<?php
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!$email) {
    $errors[] = 'Email is missing';
}
if (!$password) {
    $errors[] = 'Password is missing';
}

$sql = $db->prepare('SELECT id FROM users WHERE email = ? AND password = ?');
$sql->bind_param('ss', $email, $encryptedPassword);
$encryptedPassword = md5($password);
$sql->execute();
$sql->bind_result($id);
$sql->fetch();

if ($id) {
    // user was found
    var_dump('yay');
    $_SESSION['user_id'] = $id;
    header('Location: /Lesson_6');

} else {
    // user was not found
    header('Location: /Lesson_6?page=login&error=true');
}
