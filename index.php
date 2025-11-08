<?php

// Authentication Logic

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



    if(!$users && password_verify($password, $users['password_hash'])) {
        session_start();
        $_SESSION['user_id'] = $users['id'];

        header('Location: Home.php');
        exit();
    } else {
        exit("Invalid Arguments");
    }
}



$requested_page = $_GET['page'] ?? 'main';

$page_file = 'section/' . $requested_page . '.php';

require 'templates/header.php';


if (file_exists($page_file)) {
    require $page_file;
    require 'section/about.php';
    require 'section/contact.php';
} else {
    echo "<h1>404 Error</h1><p>The page '{$requested_page}' was not found.</p>";
}



require 'templates/footer.php';

?>