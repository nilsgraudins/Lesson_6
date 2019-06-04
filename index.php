<?php
include 'db.php';

// $query = "SELECT * FROM users";
// $sql = $db->query($query);
// echo '<pre>';
// while($row = $sql->fetch_assoc()) {
//     var_dump($row);
// };

include 'parts/header.php';

if (isset($_GET['page']) && $_GET['page'] == 'articles') {
    include 'parts/articles.php';// GET iet caur jautajumzimi, POST bez jautajumzimes brauzeri
}elseif (isset($_GET['page']) && $_GET['page'] == 'register') {
    include 'parts/register.php';
} else {
    include 'parts/content.php';
}
include 'parts/footer.php';