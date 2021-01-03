<?php
require_once "config.php";

$username = $password = $confirm_password = "";

// Validate username
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['username']))) {
        //die("Please enter a username.");
        echo '<script>alert("Please enter a username.")</script>';
        echo '<script>window.location.replace("signup.html");</script>';
        header('signup.html');

    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $param_username);
        $param_username = trim($_POST['username']);
        
        if ($stmt->execute()) {
            $stmt->store_result();
            if ($stmt->num_rows == 1) {
                //die("This username is already taken.");
                echo '<script>alert("This username is already taken.")</script>';
                echo '<script>window.location.replace("signup.html");</script>';
                header('signup.html');

            } else {
                $username = trim($_POST['username']);
            }
            $stmt->free_result();
        } else {
            die("Execution falied: " . htmlspecialchars($stmt->error));
        }
        $stmt->close();
    }

    // Validate password
    if (empty(trim($_POST['password']))) {
        //die("Please enter a password.");
        echo '<script>alert("Please enter a password.")</script>';
        echo '<script>window.location.replace("signup.html");</script>';
        header('signup.html');

    } elseif (strlen(trim($_POST['password'])) < 8) {
        //die("Password must have atleast 8 characters.");
        echo '<script>alert("Password must have atleast 8 characters.")</script>';
        echo '<script>window.location.replace("signup.html");</script>';
        header('signup.html');

    } else {
        $password = trim($_POST['password']);
    }

    // Validate confirm
    if (empty(trim($_POST['confirm_password']))) {
        //die("Please confirm password.");
        echo '<script>alert("Please confirm password")</script>';
        header('signup.html');

    } else {
        $confirm_password = trim($_POST['confirm_password']);
        if ($password != $confirm_password) {
            //die("Password did not match.");
            echo '<script>alert("Password did not match.")</script>';
            echo '<script>window.location.replace("signup.html");</script>';
            header('signup.html');
        }
    }

    // Inserting in DB
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    //$stmt = $mysqli->prepare($sql);
    if($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param('ss', $param_username, $param_password);
    //$param_username = trim($_POST['username']);
    $param_username = $username;
    $param_password = password_hash($password, PASSWORD_DEFAULT);

    if ($stmt->execute()) {
        echo '<script>alert("Successful Sign up")</script>';
        echo '<script>window.location.replace("index.html");</script>';
        header('signup.html');

    } else {
        die("Execution error: " . htmlspecialchars($stmt->error));
    }
    $stmt->close();
}
}
$mysqli->close();
?>
