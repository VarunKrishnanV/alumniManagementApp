<?php require "../includes/header.php" ?>

<body id="resetpass">

    <div class="main-container">
        <!-- <div class="descriptionContainer col-6">
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
        </div> -->
        <div class="formContainer col-6">
            <div class="logoContainer">
                <img class="logo_avo" src="../images/logo-color.png" alt="">
                <!-- <img class="logo_paavai" src="../images/logo-paavai.png" alt=""> -->
            </div>

            <div class="formComponent">
                <h2 class="form__heading text--center">Reset Password</h2>
                <form action="" class="form">
                    <div class="input__container">
                        <label for="email">Email<span class="required">*</span> </label>
                        <input id="email" type="text" class="input" name="email">
                        <p class="text--description text--secondary fs-14">An verification code will be sent to your
                            mail address.</p>
                    </div>
                    <button class="btn btn--primary">Send Verification Code</button>
                </form>
                <p class="cta-sec"><a class="text--primary">Back to login</a></p>
            </div>

        </div>
    </div>

</body>

</html>