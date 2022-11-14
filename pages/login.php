<?php require "../includes/header.php" ?>


<body id="login">

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
                <h2 class="form__heading">Login to Office</h2>
                <form action="" class="form">
                    <div class="input__container">
                        <label for="email">Email<span class="required">*</span> </label>
                        <input id="email" type="text" class="input" name="email">
                    </div>
                    <div class="input__container input__container--description">
                        <label for="password">Password<span class="required">*</span> </label>
                        <input id="password" type="password" class="input" name="password">
                        <a href="" class=" text--secondary">Forgot password?</a>
                    </div>
                    <button class="btn btn--primary">Login</button>
                </form>
                <p class="cta-sec">Don’t have an account? <a class="text--primary">Sign up</a></p>
            </div>

        </div>
    </div>

</body>

</html>