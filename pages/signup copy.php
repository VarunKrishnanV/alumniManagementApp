<?php require "../includes/header.php" ?>

<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=alumni_virtual_office', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    // $lastname = $_POST['lastname'];
    // $college = $_POST['college'];
    // $identity_number = 123;
    // $identity_number = $_POST['identity_number'];
    // $dept = $_POST['dept'];
    // $passed_out_year = $_POST['passed_out_year'];
    // $email = $_POST['email'];
    // $contact = $_POST['contact'];
    // $password = $_POST['password'];
    // $confirm_password = $_POST['confirm_password'];
    // $timestamp = date('Y-m-d H:i:s');

    $statement = $pdo->prepare('INSERT INTO demo (`name`, `price`) VALUES (:name, :price)');


    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    // $statement->bindValue(':lastname', $lastname);
    // $statement->bindValue(':college', $college);
    // $statement->bindValue(':identity_number', 123);
    // $statement->bindValue(':dept', $dept);
    // $statement->bindValue(':passed_out_year', $passed_out_year);
    // $statement->bindValue(':email', $email);
    // $statement->bindValue(':contact', $contact);
    // $statement->bindValue(':password', $password);
    // $statement->bindValue(':confirm_password', $confirm_password);
    // $statement->bindValue(':timestamp', $timestamp);


    // $statement->bindValue(':firstname', "varun");
    // $statement->bindValue(':lastname', "krishnan");
    // $statement->bindValue(':college', "pec");
    // $statement->bindValue(':identity_number', 123);
    // $statement->bindValue(':dept', "cse");
    // $statement->bindValue(':passed_out_year', 2024);
    // $statement->bindValue(':email', "varunk@gmail.com");
    // $statement->bindValue(':contact', 1231231233);
    // $statement->bindValue(':password', "123123123");
    // $statement->bindValue(':confirm_password', "123123123");
    // $statement->bindValue(':timestamp', date('Y-m-d H:i:s'));


    $statement->execute();
}

?>


<body id="signup">

    <div class="main-container">
        <div class="descriptionContainer col-6">
            <div class="logoContainer">
                <img class="logo_avo" src="../images/logo-white.png" alt="">
                <img class="logo_paavai" src="../images/logo-paavai.png" alt="">
            </div>
            <div class="description">
                <h1>Hello
                    <br>Paavaians!
                </h1>
                <p>Welcome back. Let connect with other and helps to make Paavai the best</p>
            </div>
        </div>
        <div class="formContainer col-6">
            <div class="logoContainer logoContainer--mobile">
                <img class="logo_avo" src="../images/logo-color.png" alt="">
                <img class="logo_paavai" src="../images/logo-paavai.png" alt="">
            </div>

            <div class="formComponent">
                <h2 class="form__heading">Create Account</h2>
                <form action="" class="form" method="POST">
                    <div class="form__row">
                        <div class="input__container">
                            <label for="firstname">Firstname<span class="required">*</span> </label>
                            <input id="firstname" type="text" class="input" name="name" required>
                        </div>
                        <div class="input__container">
                            <label for="lastname">Lastname<span class="required">*</span> </label>
                            <input id="lastname" type="lastname" class="input" name="price">
                        </div>
                    </div>
                    <button type="submit" class="btn btn--primary">Login</button>
                </form>
                <p class="cta-sec">Already have an account? <a class="text--primary">Sign in</a></p>
            </div>

        </div>
    </div>

</body>

</html>