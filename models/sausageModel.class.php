<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: sausage.class.php
 * Description: This is the Sausage Model. Place where it retreives data from database
 */
class SausageModel
{
    private $db; //database object
    private $dbConnection; //database connection
    static private $_instance = NULL;
    private $tblSausage;

    public function  __construct()
    {
        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();

    }

    /*
  * this method retrieves all toys from the database and
  * returns an array of Toy objects if successful or false if failed.
  */
    public function getSausages() {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all items (sausages)
            $sausages = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $sausage = new Sausage($query_row["sausage_id"],
                    $query_row["sausage_name"],
                    $query_row["price"],
                    $query_row["stock_quantity"],
                    $query_row["sausage_description"],
                    $query_row["sausage_heat"]

                );

                //push the toy into the array
                $sausages[] = $sausage;
            }
            return $sausages;
        }
        return false;
    }

    //static method to ensure there is just one SausageManager instance
    public static function getSausageModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new SausageModel();
        }
        return self::$_instance;
    }

    //for the details page. should retreieve data of the one item and display it on page
    public function view_item($id) {
        //the select ssql statement
        $sql = "SELECT * FROM " . $this->tblSausage .
            " WHERE " . $this->tblSausage . ".id='$id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a item object
            $item = new Sausage(stripslashes($obj->sausage_name), stripslashes($obj->price), stripslashes($obj->stock_quality), stripslashes($obj->sausage_description), stripslashes($obj->sausage_heat));

            //set the id for the item
            $item->setId($obj->id);

            return $item;
        }

        return false;
    }
    
    //MIGHT NEED FOR LATER

//    //search the database for movies that match words in titles. Return an array of movies if succeed; false otherwise.
//    public function search_items($terms) {
//        $terms = explode(" ", $terms); //explode multiple terms into an array
//        //select statement for AND serach
//        $sql = "SELECT * FROM " . $this->tblMovie . "," . $this->tblMovieRating .
//            " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id AND (1";
//
//        foreach ($terms as $term) {
//            $sql .= " AND title LIKE '%" . $term . "%'";
//        }
//        $sql .= ")";
//
//        //execute the query
//        $query = $this->dbConnection->query($sql);
//
//        // the search failed, return false.
//        if (!$query) {
//            return false;
//        }
//        //search succeeded, but no movie was found.
//        if ($query->num_rows == 0) {
//            return 0;
//        }
//        //search succeeded, and found at least 1 movie found.
//        //create an array to store all the returned movies
//        $movies = array();
//
//        //loop through all rows in the returned recordsets
//        while ($obj = $query->fetch_object()) {
//            $movie = new Movie($obj->title, $obj->rating, $obj->release_date, $obj->director, $obj->image, $obj->description);
//
//            //set the id for the movie
//            $movie->setId($obj->id);
//
//            //add the movie into the array
//            $movies[] = $movie;
//        }
//        return $movies;
//    }
}
