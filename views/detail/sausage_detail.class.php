<?php
/**
 * Author: Aiden Eichenour
 * date: 11/15/22
 * File: sausage_detail.class.php
 * Description:
 */

class Details extends SausageView
{
    public function display($sausage){
        //Display the header
        parent::displayHeader("One Stop Sausage Details Page ");

        //retrieve item details by calling get methods
        $id = $sausage->getId();
        echo $id;

        ?>
        <div> this will display the details page </div>
        <a href='<?= BASE_URL ?>/welcome'>back</a>

        <?php
        //Display the footer
        parent::displayFooter();

    }
}
