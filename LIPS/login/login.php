<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location: index.php");
    exit;
}

require_once "config.php";

$username = $password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty(trim($_POST['username']))) {
        //die("Please enter a username.");
        echo '<script>alert("Please enter a username.")</script>';
        echo '<script>window.location.replace("index.html");</script>';

    } else {
        $username = trim($_POST['username']);
    }

    if (empty(trim($_POST['password']))) {
        //die("Please enter a password.");
        echo '<script>alert("Please enter a password.")</script>';
        echo '<script>window.location.replace("index.html");</script>';

    } else {
        $password = trim($_POST['password']);
    }

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $param_username);
    $param_username = $username;

    if ($stmt->execute()) {
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password);
            if ($stmt->fetch()) {
                if (password_verify($password, $hashed_password)) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $id;
                    $_SESSION['username'] = $username;
                    echo '<script>alert("Welcome back :)")</script>';
                    echo '<script>window.location.replace("../index.php");</script>';
                
                } else {
                    //die("The password you entered was not valid.");
                    echo '<script>alert("The password you entered was not valid")</script>';
                    echo '<script>window.location.replace("index.html");</script>';
                }         
            }
        } else {
            //die("No account found with that username.");
            echo '<script>alert("No account found with that username.")</script>';
            echo '<script>window.location.replace("index.html");</script>';
        }
    } else {
        die("Execution error: " . htmlspecialchars($stmt->error));
    }
    $stmt->close();
}
$mysqli->close();
?>