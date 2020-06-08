<?php
class Attribute
{

    public static function checkAttributeExists($attrName, $userId)
    {

        $db = Database::getConnection();

        $sql = 'SELECT COUNT(*) FROM user_attributes WHERE user_id=:id AND attr_name=:attrName';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $userId, PDO::PARAM_INT);
        $result->bindParam(':attrName', $attrName, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        }

        return false;
    }

    public static function createAttribute($userId, $attrName, $attrValue)
    {
        $db = Database::getConnection();

        $sql = "INSERT INTO user_attributes (user_id , attr_name, attr_value) VALUES (:userId, :attrName, :attrValue)";

        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result->bindParam(':attrName', $attrName, PDO::PARAM_STR);
        $result->bindParam(':attrValue', $attrValue, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function updateAttributeValue($userId, $attrName, $attrValue)
    {
        $db = Database::getConnection();

        $sql = "UPDATE user_attributes SET attr_value=:attrValue  WHERE user_id=:userId AND attr_name=:attrName";

        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result->bindParam(':attrName', $attrName, PDO::PARAM_STR);
        $result->bindParam(':attrValue', $attrValue, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkAttrName($attrName)
    {
        if (strlen($attrName) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkValue($attrValue)
    {
        if (strlen($attrValue) >= 2) {
            return true;
        }
        return false;
    }

    public static function getAttributeByUserId($userIid)
    {

        $db = Database::getConnection();
        $sql = 'SELECT * FROM user_attributes WHERE user_id= :userId';

        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userIid, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetchAll();
    }

    public static function getAllSttributes()
    {
        $db = Database::getConnection();
        $sql = 'SELECT DISTINCT attr_name FROM user_attributes';

        $result = $db->prepare($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetchAll();
    }
}
