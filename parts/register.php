<?php if (isset($_SESSION['errors'])) { ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($_SESSION['errors'] as $error) { ?>
                <li><?= $error; // "=" ir tas pats, kas "php echo" ?></li>
            <?php } ?> 
        </ul>
    </div>
<?php
unset($_SESSION['errors']);
}
?>
<form action="/Lesson_6/registration.php" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name">
    </div>
    <div>
        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name">
    </div>
    <div>
        <input type="submit" value="Register">
    </div>
</form>