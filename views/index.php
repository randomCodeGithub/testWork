<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<section>
    <div class="container vh-100 d-flex justify-content-center align-items-center ">
        <div class="row bg-dark-blue text-white pos-rel">
            <div id="signUpDiv" class="col">
                <h2>Don't have an account?</h2>
                <p>Lorem ipsum dolor sit amet,<br />
                    consectetur adipisicing elit, sed do <br />
                    eiusmod tempor incididunt ut labore et <br />
                    dolore magna aliqua.</p>
                <button type="button" id="signUpBtn">Sign
                    Up</button>
            </div>
            <div id="logDiv" class="col">
                <h2>Have an account?</h2>
                <p>Lorem ipsum dolor sit amet consectetur <br />
                    adipisicing elit.</p>
                <button id="loginBtn">Login</button>
            </div>
            <div id="formDiv" class="slide-right col pos-abs d-flex justify-content-center flex-column align-items-center">

                <?php
                if (isset($errors) && is_array($errors)) {
                    echo "<script>";
                    echo "alert(\"$errorMessage\")";
                    echo "</script>";
                }
                if (isset($result) && $result) {
                    echo "<script>";
                    echo "alert(\"Successful registration!\")";
                    echo "</script>";
                }
                ?>

                <form id="login" method="POST" class="pos-abs">
                    <div class="row justify-content-between">
                        <div class="col-50 text-left header-const">
                            <h2>Login</h2>
                        </div>
                        <div class="col-50 text-right"><img src="<?php echo BASE_ROOT ?>/assets/img/logo.png" alt=""></div>
                    </div>

                    <div class="form-group">
                        <div class="row justify-content-between">
                            <div class="col-50 text-left header-const"><label id="loginLabelEmail" for="inputEmail">Email<span class="text-red">*</span></label></div>
                            <div class="col-50 text-right"><img id="loginMail" src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_mail.png"></div>
                        </div>

                        <input type="email" id="inputLoginEmail" name="loginEmail" required value="<?php echo $loginEmail ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-50 header-const"><label id="loginLabelPassword" for="inputPassword">Password<span class="text-red">*</span></label></div>
                            <div class="col-50 text-right"><img id="loginLock" src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_lock.png" alt=""></div>
                        </div>

                        <input type="password" id="inputLoginPassword" name="loginPassword" required class="form-control">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <button id="loginBtnInForm" type="submit" name="login">login</button>
                        <a href="#">Forgot?</a>
                    </div>
                </form>

                <form action="#" method="POST" id="signUp" class="pos-abs d-none hide ">
                    <div class="row">
                        <div class="col-50 text-left header-const">
                            <h2>Sign Up</h2>
                        </div>
                        <div class="col-50 text-right"><img src="<?php echo BASE_ROOT ?>/assets/img/logo.png" alt=""></div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-50 header-const">
                                <label id="signUpName" for="inputName">Name<span class="text-red">*</span></label>
                            </div>
                            <div class="col-50 text-right">
                                <img id="signUpUser" src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_user.png" alt="">
                            </div>
                        </div>
                        <input type="text" id="inputSignupName" name="name" value="<?php echo $name ?>" required minlength="2" class="form-control">

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-50 header-const">
                                <label id="signUpLabelEmail" for="inputEmail">Email<span class="text-red">*</span></label>
                            </div>
                            <div class="col-50 text-right">
                                <div id="mail">
                                    <img id="signUpmail" src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_mail.png" alt="">
                                </div>

                            </div>
                        </div>
                        <input type="email" id="inputSignupEmail" name="email" value="<?php echo $email ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-50 header-const">
                                <label id="signUpLabelPassword" for="inputPassword">Password<span class="text-red">*</span></label>
                            </div>
                            <div class="col-50 text-right">
                                <img id="signUpLock" src="<?php echo BASE_ROOT ?>/assets/img/icons/icon_lock.png" alt="">
                            </div>
                        </div>

                        <input type="password" id="inputSignUpPassword" name="password" required minlength="6" class="form-control">
                    </div>
                    <div class="text-center">
                        <button id="signUpBtnInForm" type="submit" name="submit">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>