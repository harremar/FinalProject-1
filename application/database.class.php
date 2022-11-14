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
        'database' => 'one_stop_sausage',
        'tblOrders' => 'orders',
        'tblOrders_line_items' => 'Orders_line_items',
        'tblsausage' => 'sausage',
        'tbluser' => 'user'
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
            $view = new SausageError();
            $view->display($e->getMessage());
        }catch (Exception $e) {
            $view = new SausageError();
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

    //returns the name of the table that stores orders
    public function getOrderTable() {
        return $this->param['tblOrders'];
    }

    //returns the name of the table that stores orders of line items
    public function getOrderLineItems() {
        return $this->param['tblOrders_line_items'];
    }

    //returns the name of the table storing sausages
    public function getSausageTable() {
        return $this->param['tblsausage'];
    }

    //returns the name of the table storing users
    public function getUserTable() {
        return $this->param['tbluser'];
    }

}
