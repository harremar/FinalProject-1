<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: sausage_controller.class.php
 * Description:
 */

class SausageController
{
    private $toy_model;

    public function __construct(){
        $this->toy_model = new SausageModel();
    }

    //list all toys
    public function all(){
        //get all the toys
        $toys=$this->toy_model->getSausages();

        //handle errors
        if(!$toys){
            $this->error("No toy was found");
        }

        //display all the toys
        $view = new SausageView();
        $view->display($toys);
    }


    //display an error
    public function error($message){
        $view = new SausageError();
        $view->display($message);
    }
}
