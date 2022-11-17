<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: welcome_controller.class.php
 * Description:
 */
class WelcomeController {
    //put your code here
    public function index() {
        $view = new WelcomeIndex();
        $model = new SausageModel();
        $sausages = $model->getSausages();
        $view->display($sausages);
    }
}
