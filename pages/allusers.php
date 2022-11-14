<?php require "../includes/header.php" ?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=alumni_virtual_office', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$statement = $pdo->prepare("SELECT * from alumni");
$statement->execute();
$all_users = $statement->fetchAll(PDO::FETCH_ASSOC);

echo var_dump($all_users);
?>


<body id="signup">

    <table border="1">
        <?php foreach ($all_users as $user) : ?>
            <tr>
                <td><?php echo $user["alumni_id"] ?></td>
                <td><?php echo $user["firstname"] ?></td>
                <td><?php echo $user["lastname"] ?></td>
                <td><?php echo $user["college"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

</body>

</html>