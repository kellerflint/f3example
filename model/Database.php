<?php


class Database
{
    //PDO object
    private $_dbh;

    /**
     * Constructor for database class. Creates a new database object
     * @author Dallas Sloan
     */
    function __construct()
    {
        try {
            define("DB_DSN", "mysql:host=database;dbname=tutors");
            define("DB_USERNAME", "root");
            define("DB_PASSWORD", 'password');
            //Creates a new PDO connection
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getAllFoodTypes() {
        $sql = "SELECT * FROM Food";
        $statement = $this->_dbh->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}