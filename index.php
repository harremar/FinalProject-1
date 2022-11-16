<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: index.php
 * Description: Final Project- One Stop Sausage. index page
 */
<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: index.php
 * Description: Final Project- One Stop Sausage. index page
 */

require 'vendor/autoload.php';


$sausage_controller = new SausageController();

$action = "all";

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

//display all the toys
if($action == "all"){
    $sausage_controller->all();
}
//display an error
else if($action == "error"){
    $message ="we are sorry, but an error has occurred";
    if(isset($_GET['message'])){
        $message = $_GET['message'];
    }
    $sausage_controller->error($message);
}

else{
    $message = "Invalid action was requested";
    $sausage_controller->error($message);
}
