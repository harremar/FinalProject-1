<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: sausage.class.php
 * Description:
 */
class SausageModel
{
    //private attributes
    private $db; //database object
    private $dbConnection; //database connection
    static private $_instance = NULL;
    private $tblSausage;

    //making the constructor
    public function  __construct()
    {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
        $this->tblSausage = $this->db->getSausageTable();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars.
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

    /*
  * this method retrieves all toys from the database and
  * returns an array of Toy objects if successful or false if failed.
  */
    public function getSausages() {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getSausageTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all sausage items
            $sausages = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $sausage = new Sausage(
                    $query_row["sausage_id"],
                    $query_row["sausage_name"],
                    $query_row["price"],
                    $query_row["stock_quantity"],
                    $query_row["sausage_description"],
                    $query_row["sausage_heat"],
                    $query_row["image_filepath"]

                );

                //push the sausages into the array
                $sausages[] = $sausage;
            }
            //return all the sausages
            return $sausages;
        }
        //else return false
        return false;
    }

    //static method to ensure there is just one SausageManager instance
    public static function getSausageModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new SausageModel();
        }
        return self::$_instance;
    }

    //getting the item details for the details page. getting the data from database
    public function view_item($id) {
        //the select ssql statement--getting table
        $sql = "SELECT * FROM " . $this->db->getSausageTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create an item object --building from constructor on sausage.class.php
            $item = new Sausage($obj->sausage_id, $obj->sausage_name, $obj->price, $obj->stock_quantity, $obj->sausage_description, $obj->sausage_heat, $obj->image_filepath);

            //set the id for the item
            $item->setId($id);

            //returning the data of that item
            return $item;
        }

        //else return false
        return false;
    }

    //search the database for movies that match words in titles. Return an array of movies if succeed; false otherwise.
    public function search_items($terms) {
        $terms = explode(" ", $terms); //explode multiple terms into an array
        //select statement for AND search
        $sql = "SELECT * FROM " . $this->tblSausage;

        foreach ($terms as $term) {
            $sql .= " WHERE sausage_name LIKE '%" . $term . "%'";
        }

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false.
        if (!$query) {
            return false;
        }
        //search succeeded, but no movie was found.
        if ($query->num_rows == 0) {
            return 0;
        }
        //search succeeded, and found at least 1 movie found.
        //create an array to store all the returned movies
        $items = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            //create an item object --building from constructor on sausage.class.php
            $item = new Sausage($obj->sausage_id, $obj->sausage_name, $obj->price, $obj->stock_quantity, $obj->sausage_description, $obj->sausage_heat, $obj->image_filepath);

            //set the id for the movie
            $item->setId($obj->sausage_id);

            //add the movie into the array
            $items[] = $item;
        }
        return $items;
    }
}
