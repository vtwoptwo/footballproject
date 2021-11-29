<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  //  header("location: tableslist.php");
 //   exit;
//}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $title = "";
$username_err = $password_err = $login_err = $title_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Check if title is empty
    if(empty(trim($_POST["title"]))){
        $title_err = "Please enter title.";
    } else{
        $title = trim($_POST["title"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err) && empty($title_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password, title FROM USERS WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $title);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $_SESSION["title"] = $title;  
                            
                            // Redirect user to welcome page
                            switch($title){
                            case 'coach':
                            header('location: indexforcoach.php');
                            break;
                            case 'manager':
                            header('location: indexformanager.php');
                            break;
                            case 'player':
                            header('location: indexforplayer.php');
                            break;
                            case 'organization':
                            header('location: indexfororganization.php');
                            break;
                            case 'club owner':
                            header('location: indexforowner.php');
                            }

                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name ="viewport" content ="with=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
<section class="header">
    <nav>
        <a href="index.php"><img src="images/logo.PNG"></a>
        <div class="navbar"></div>
            <ul>
            <li><a href = "index.php">Home</a></li>
                <li><a href = "login_owner.php">Owner</a></li>
                <li><a href = "login_coach.php">Coach</a></li>
                <li><a href = "login_manager.php">Manager</a></li>
                <li><a href = "login_organ.php">Organization</a></li>
                <li><a href = "login_player.php">Player</a></li>
            </ul>
    </nav>
    </section>
<section class="login">
<div class="wrapper">
    <h1>Login Page for Owners</h1>
    <p>Please fill in your credentials to log in. 
    For the Title Field write <b>club owner<b>.
    </p>

    <?php 
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }        
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group-row">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div> 
        <div class="form-group-row">
            <label>Title</label>
            <input type="text" name="title" class="form-control <?php echo (!empty($title_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $title; ?>">
            <span class="invalid-feedback"><?php echo $title_err; ?></span>
        </div>      
        <div class="form-group-row">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group-row">
            <input type="submit" class="btn btn-primary" value="Login">
    </form>
</div>
</section>
</body>
</html>