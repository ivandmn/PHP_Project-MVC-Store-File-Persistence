<?php
require_once "lib/DaoFactory.php";
/**
 * Model for store application.
 *
 * @author ivandmn
 */
class Model {
    
    public function __construct() {
        
    }

    /** methods related to user **/
    
    /**
     * searches all users in database.
     * @return array with all users found or null in case of error.
     */
    public function searchAllUsers(): ?array {
        $data = null;
        $dao = DaoFactory::getDao("user");
        $data = $dao->selectAll();
        return $data;
    }

    /**
     * searches users with given username and password
     * @param string $username the username to search
     * @param string $password the password to search
     * @return user with given username and password
     */
    public function searchUserByUsernameAndPassword(string $username, string $password): ?User {
        $data = null;
        $dao = DaoFactory::getDao("user");
        $data = $dao->searchUsersbyUsernameAndPassword($username, $password);
        return $data;
    }
    
    /**
     * searches users with given username
     * @param string $username the username to search
     * @return user with given username
     */
    public function searchUsersByUsername(string $username): ?User {
        $data = null;
        $dao = DaoFactory::getDao("user");
        $data = $dao->searchUsersByUsername($username);
        return $data;
    }    
    
    /**
     * adds a new user
     * @param User $user the user to add
     * @return int number of users added
     */
    public function addUser(User $user) : int {
        $result = 0;
        $dao = DaoFactory::getDao("user");
        $result = $dao->insert($user);
        return $result;
    }

    /**
     * search a user with given id
     * @param int $id the id to search
     * @return the user searched or null if not found
     */
    public function searchUserById(int $id): ?User {
        $found = null;
        $dao = DaoFactory::getDao("user");
        $u = new User($id);
        $found = $dao->select($u);
        return $found;
    }

    /**
     * modify user with user given
     * @param $user user to modify
     * @return int 0 if not modified 1 if modified
     */
    public function modifyUser(User $user): int {
        $dao = DaoFactory::getDao("user");
        $found = $dao->update($user);
        return $found;
    }

    /**
     * delete user with id given
     * @param $id id of user to delete
     * @return int 0 if not deleted 1 if deleted
     */
    public function deleteUser(int $id): int{
        $dao = DaoFactory::getDao("user");
        $u = new User($id);
        $found = $dao->select($u);
        $usersDeleted = $dao->delete($found);
        return $usersDeleted;
    }
    
    /** methods related to product **/
    
    /**
     * searches all products in database.
     * @return array with all products found or null in case of error.
     */
    public function searchAllProducts(): ?array {
        $data = null;
        $dao = DaoFactory::getDao("product");
        $data = $dao->selectAll();
        return $data;
    } 

    /**
     * search a product with given id
     * @param int $id the id to search
     * @return the product searched or null if not found
     */
    public function searchProductById(int $id): ?Product {
        $found = null;
        $dao = DaoFactory::getDao("product");
        $u = new Product($id);
        $found = $dao->select($u);
        return $found;
    }

    /**
     * adds a product to database.
     * @param Product $product the product to add.
     * @return int result code for this operation.
     */
    public function addProduct(Product $product): int {
        $result = -1;
        $dao = DaoFactory::getDao("product");
        $result = $dao->insert($product);
        return $result;
    }

    /**
     * modifies a product to database.
     * @param Product $product the product to modify.
     * @return int result code for this operation.
     */    
    public function modifyProduct(Product $product): int {
        $dao = DaoFactory::getDao("product");
        $found = $dao->update($product);
        return $found;
    }
    
    /**
     * removes a product to database.
     * @param $id id of product to delete
     * @return int result code for this operation.
     */
    public function removeProduct(int $id): int {
        $dao = DaoFactory::getDao("product");
        $p = new Product($id);
        $found = $dao->select($p);
        $usersDeleted = $dao->delete($found);
        return $usersDeleted;
    }
    
}