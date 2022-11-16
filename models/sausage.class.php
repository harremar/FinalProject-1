<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: sausage.class.php
 * Description:
 */

class SausageModel
{
    private $db; //database object
    private $dbConnection; //database connection

    public function  __construct()
    {
        $this->db = Database2::getInstance();
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
            //array to store all toys
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
}
