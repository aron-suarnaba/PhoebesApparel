<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])){
    require (__DIR__ . '/../db.php');

    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("Invalid email format.");
    }   

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->execute([$email]);       
    $users = $stmt->fetch(PDO::FETCH_ASSOC);

    $password = $_POST['password'];



    if($users && password_verify($password, $users['password'])) {
        session_start();
        $_SESSION['user_id'] = $users['id'];

        header('Location: /../section/home.php');
        exit();
    } else {
        header('Location: /index.php');
        exit();
    }
}

?>