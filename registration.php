<?php
include 'db.php';

$email = $_POST['email'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$password = $_POST['password'];

$errors = [];

// check if required fields are filled
if(!$email) {
    $errors[] = 'Email address is no provided!';
}
if(!$firstName) {
    $errors[] = 'First name is no provided!';
}
if(!$lastName) {
    $errors[] = 'Last name is no provided!';
}
if(!$password) {
    $errors[] = 'Password is no provided!';
}

// check if email address in not taken
$query = "SELECT id FROM users WHERE email = ?";// id no tabulas, kur epasts ir kautkas
$sql = $db->prepare($query); //db ir datu bazes konekcija, defineta db.php
                        // prepare pasaka, ka bus tads kverijs
                        // mainigais $sql bus prepare metodes rezultats
$sql->bind_param('s', $emailForQuery); // s ir ? augsaa, kas nozime 'string'
                // stringiem ir s, intigeram ir i, doubliem un floatiem ir d.
$emailForQuery = $email;
$sql->execute();
$sql->bind_result($id); // padod tik mainigos, cik prasiti SELECT kverijaa
$sql->fetch();// sanak, ka -> ir tas pats, kas JS ir punkts. 'console.log(mainigais)'
            // fetch ir atnest, kaa bring
var_dump($id);

if($id) {
    $errors[] = 'Email is already in use!';
}
if(count($errors) > 0) {
    // form is not valid
    $_SESSION['errors'] = $errors;
    header('Location: /Lesson_6/?page=register&errors=true');
    
} else {
    // register the user
    $sqlInsert = $db->prepare("INSERT INTO users SET email = ?, first_name = ?, last_name = ?, password = ?");
    $sqlInsert->bind_param('ssss', $email, $firstName, $lastName, $encryptedPassword);
    $encryptedPassword = md5($password);
    $sqlInsert->execute();

    header('Location: /Lesson_6/?page=login');

}

