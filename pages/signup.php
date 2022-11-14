<?php require "../includes/header.php" ?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=alumni_virtual_office', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$firstname = "";
$lastname = "";
$college = "";
$identity_number = "";
$dept = "";
$passed_out_year = "";
$email = "";
$contact = "";
$password = "";
$confirm_password = "";
$timestamp = "";

$password_mismatch = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $college = $_POST['college'];
    $identity_number = $_POST['identity_number'];
    $dept = $_POST['dept'];
    $passed_out_year = $_POST['passed_out_year'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $timestamp = date('Y-m-d H:i:s');


    if ($password !== $confirm_password) {
        $password_mismatch = "Password Mismatch";
    }

    if (!$password_mismatch) {
        $statement = $pdo->prepare("INSERT INTO alumni (firstname, lastname, college, identity_number, dept, passed_out_year, email, contact, password, confirm_password, timestamp) VALUES (:firstname, :lastname, :college, :identity_number, :dept, :passed_out_year, :email, :contact, :password, :confirm_password, :timestamp)");


        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':college', $college);
        $statement->bindValue(':identity_number', $identity_number);
        $statement->bindValue(':dept', $dept);
        $statement->bindValue(':passed_out_year', $passed_out_year);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':contact', $contact);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':confirm_password', $confirm_password);
        $statement->bindValue(':timestamp', $timestamp);


        $statement->execute();
    }
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
                            <input id="firstname" type="text" class="input" name="firstname" required value=<?php echo $firstname ?>>
                        </div>
                        <div class="input__container">
                            <label for="lastname">Lastname<span class="required">*</span> </label>
                            <input id="lastname" type="lastname" class="input" name="lastname" value="<?php echo $lastname ?>">
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="college">College name<span class="required">*</span> </label>
                            <select id="college" class="input" name="college" required>
                                <option selected value="pec">Paavai Engineering College</option>
                                <option value="pct">Paavai College of Technology</option>
                                <option value="pce">Paavai College of Engineering</option>
                            </select>

                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="identityNumber">Roll number / Register number (optional)</label>
                            <input id="identityNumber" type="number" class="input" name="identity_number" value=<?php echo $identity_number ?>>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="dept">department<span class="required">*</span> </label>
                            <select id="dept" class="input" name="dept" required>
                                <option selected value="CSE">B.E., Computer Science and Engineering</option>
                                <option value="CYBER">B.E., Cyber Security</option>
                                <option value="IT">B.Tech., Information Technology</option>
                                <option value="MECH">B.E., Mechanical Engineering</option>
                            </select>

                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="passedOutIn">Passsed out in<span class="required">*</span> </label>
                            <input id="passedOutIn" type="number" class="input" name="passed_out_year" required value=<?php echo $passed_out_year ?>>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="email">Email<span class="required">*</span> </label>
                            <input id="email" type="email" class="input" name="email" required value=<?php echo $email ?>>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="mobile">Mobile number<span class="required">*</span> </label>
                            <input id="mobile" type="number" class="input" name="contact" required value=<?php echo $contact ?>>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="password">Password<span class="required">*</span> </label>
                            <input id="password" type="text" class="input" name="password" required>
                        </div>
                    </div>
                    <div class="form__row">
                        <div class="input__container">
                            <label for="password2">Confirm Password<span class="required">*</span> </label>
                            <input id="password2" type="text" class="input" name="confirm_password" required>
                            <?php if ($password_mismatch) : ?>
                                <p class="text--error  fs-14">Password Mismatch</p>
                            <?php endif ?>


                        </div>
                    </div>

                    <button class="btn btn--primary">Login</button>
                </form>
                <p class="cta-sec">Already have an account? <a class="text--primary">Sign in</a></p>
            </div>

        </div>
    </div>

</body>

</html>