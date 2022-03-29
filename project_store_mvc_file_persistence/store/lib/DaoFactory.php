<?php

require_once "model/persist/UserPersistFileDao.php";
require_once "model/persist/ProductPersistFileDao.php";

class DaoFactory {

    /**
     * creates a proper DAO according to value of parameter $type
     * @param $type the type of DAO to create.
     * @return a DAO object or null if unknown type.
     */
    public static function getDao(string $type) {
        $result = null;
        switch ($type) {
            case "user":
                $result = new UserPersistFileDao("files/users.txt", ";");
                break;
            case "product":
                $result = new ProductPersistFileDao("files/products.txt", ";");
                break;
            default:
                break;
        }
        return $result;
    }

}
