<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<section>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-100 text-center">
                <h1>Hello <?php echo $user['name'] ?></h1>
                <a class="text-red" href="<?php echo HOME_ROOT; ?>/cabinet/logout">Logout</a>
            </div>

        </div>
    </div>
    <div class="container vh-100 d-flex justify-content-center align-items-center ">
        <div class="row bg-dark-blue text-white pos-rel">

            <div id="signUpDiv" class="col">
                <h2>Your attributes</h2>
                <p>
                    <ul>
                        <?php foreach ($userAttributes as $attribute) : ?>

                            <li><?php echo $attribute['attr_name'] . ': ' . $attribute['attr_value'] ?></li>

                        <?php endforeach ?>
                    </ul>
                </p>

                <button type="button" id="signUpBtn">All Attributes</button>
            </div>
            <div id="logDiv" class="col">
                <h2>All created attributes</h2>
                <p>
                    <ul>
                        <?php foreach ($allAttributes as $attribute) : ?>

                            <li><?php echo $attribute['attr_name'] ?></li>

                        <?php endforeach ?>
                    </ul>
                </p>
                <button id="loginBtn">Your attributes</button>
            </div>
            <div id="formDiv" class="slide-right col pos-abs d-flex justify-content-center flex-column align-items-center">

                <?php
                if (isset($errors) && is_array($errors)) {
                    echo "<script>";
                    echo "alert(\"$errorMessage\")";
                    echo "</script>";
                }
                ?>

                <form id="login" method="POST" class="pos-abs">
                    <div class="row justify-content-between">
                        <div class="col text-left">
                            <h2 class="">Attribute Adding</h2>
                        </div>
                        <div class="col text-right"><img src="<?php echo BASE_ROOT; ?>/assets/img/logo.png" alt=""></div>
                    </div>

                    <div class="form-group">
                        <label for="inputAttrName">Attribute Name<span class="text-red">*</span></label>
                        <input type="text" id="inputAttrName" name="attrName" required minlength="2" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Attribute Value<span class="text-red">*</span></label>
                        <input type="text" id="inputName" name="attrValue" value="" required minlength="2" class="form-control">
                    </div>
                    <div class="text-center">
                        <button id="loginBtnInForm" type="submit" name="addAttribute">Add attribute</button>
                    </div>
                </form>

                <form action="#" method="POST" id="signUp" class="pos-abs d-none hide ">
                    <div class="row justify-content-between">
                        <div class="col text-left">
                            <h2 class="">Attribute Adding</h2>
                        </div>
                        <div class="col text-right"><img src="<?php echo BASE_ROOT; ?>/assets/img/logo.png" alt=""></div>
                    </div>

                    <div class="form-group">
                        <label for="inputAttrName">Attribute Name<span class="text-red">*</span></label>
                        <input type="text" id="inputAttrName" name="attrName" required minlength="2" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Attribute Value<span class="text-red">*</span></label>
                        <input type="text" id="inputName" name="attrValue" value="" required minlength="2" class="form-control">
                    </div>
                    <div class="text-center">
                        <button id="loginBtnInForm" type="submit" name="addAttribute">Add attribute</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>