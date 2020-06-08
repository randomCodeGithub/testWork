<?php


class AttributeManagmentController
{

    public function actionIndex()
    {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);
        $userAttributes = Attribute::getAttributeByUserId($userId);

        $allAttributes = Attribute::getAllSttributes(); 

        $attrName = '';
        $attrValue = '';

        if (isset($_POST['addAttribute'])) {
            $attrName = ucfirst($_POST['attrName']);
            $attrValue =ucfirst($_POST['attrValue']) ;

            $result = false;

            $errors = false;
            $errorMessage = null;

            if(!Attribute::checkAttrName($attrName)) {
                $errors[] = 'ATRRIBUTE NAME is shorter than 2 symbols !';
            }

            if(!Attribute::checkValue($attrValue)) {
                $errors[] = 'ATRRIBUTE VALUE is shorter than 2 symbols !';
            }

            if ($errors == false) {
                if(Attribute::checkAttributeExists($attrName, $userId)) {
                    $result = Attribute::updateAttributeValue($userId, $attrName, $attrValue);
                    header("Location: cabinet/");
                }else {
                    $result = Attribute::createAttribute($userId, $attrName, $attrValue);
                    header("Location: cabinet/");
                }
            } else {
                $errorMessage = implode('\n\n', $errors);
            }
        }

        require_once('./views/attributeManagment.php');
        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION['user']);
        header('Location:' . HOME_ROOT);
    }
}
