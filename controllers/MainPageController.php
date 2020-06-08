<?php

class MainPageController
{

    public function actionIndex()
    {

        $name = '';
        $email = '';
        $password = '';

        $loginEmail = '';
        $loginPassword = '';

        if (isset($_POST['submit'])) {
            $name = ucfirst($_POST['name']);
            $email = $_POST['email'];
            $password = $_POST['password'];

            $result = false;

            $errors = false;
            $errorMessage = null;

            if (!User::checkName($name)) {
                $errors[] = 'NAME is shorter than 2 symbols !';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'EMAIL is incorrect !';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'PASSWORD is shorter than 6 symbols !';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'EMAIL: `' . $email . '` is already used!';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
            } else {
                $errorMessage = implode('\n\n', $errors);
            }
        }

        if (isset($_POST['login'])) {
            $loginEmail = $_POST['loginEmail'];
            $loginPassword = $_POST['loginPassword'];

            $result = false;

            $errors = null;
            $errorMessage = null;

            if (!User::checkEmail($loginEmail)) {
                $errors[] = 'EMAIL is incorrect !';
            }

            if (!User::checkPassword($loginPassword)) {
                $errors[] = 'PASSWORD is shorter than 6 symbols !';
            }

            $userId = User::checkUserData($loginEmail, $loginPassword);


            if ($userId == false) {
                $errors[] = 'incorrect EMAIL or PASSWORD !';
                $errorMessage = implode('\n\n', $errors);
            } else {
                User::auth($userId);
                header("Location: cabinet/");
            }
        }

        if (!User::isGuest()) {
            header("Location: cabinet/");
        }

        require_once('./views/index.php');
        return true;
    }
}
