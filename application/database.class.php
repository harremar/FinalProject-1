<?php

/**
 * Author: Aiden Eichenour
 * Date: 11/14/2022
 * File: database.class.php
 * Description: Database class
 * 
 */

class Database {

    //define database parameters
    private $param = array(
        'host' => 'localhost',
        'login' => 'phpuser',
        'password' => 'phpuser',
        'database' => 'Insert Name here',
//        'tblMovie' => 'movies',
//        'tblBook' => 'books',
//        'tblGame' => 'games',
//        'tblCD' => 'cds',
//        'tblMovieRating' => 'movie_ratings',
//        'tblBookCategory' => 'book_categories'
    );
    //define the database connection object
    private $objDBConnection = NULL;
    static private $_instance = NULL;

    //constructor
    private function __construct() {
        try{
            $this->objDBConnection = new mysqli(
                $this->param['host'], $this->param['login'], $this->param['password'], $this->param['database']
            );
            if (mysqli_connect_errno() != 0) {
                throw new DatabaseConnectionException("Connecting database failed: " . mysqli_connect_error() . ".");
            }
        }catch (DatabaseConnectionException $e) {
            $view = new MovieError();
            $view->display($e->getMessage());
        }catch (Exception $e) {
            $view = new MovieError();
            $view->display($e->getMessage());
        }

    }

    //static method to ensure there is just one Database instance
    static public function getDatabase() {
        if (self::$_instance == NULL)
            self::$_instance = new Database();
        return self::$_instance;
    }

    //this function returns the database connection object
    public function getConnection() {
        return $this->objDBConnection;
    }

    //returns the name of the table that stores movies
    public function getMovieTable() {
        return $this->param['tblMovie'];
    }

    //returns the name of the table that stores books
    public function getBookTable() {
        return $this->param['tblBook'];
    }

    //returns the name of the table storing games
    public function getGameTable() {
        return $this->param['tblGame'];
    }

    //returns the name of the table storing cds
    public function getCDTable() {
        return $this->param['tblCD'];
    }

    //returns the name of the table storing movie ratings
    public function getMovieRatingTable() {
        return $this->param['tblMovieRating'];
    }

    //return the name of the table that stores book categories
    public function getBookCategoryTable() {
        return $this->param['tblBookCategory'];
    }

}
