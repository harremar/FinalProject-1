<?php
/**
 *Author: Marielle Harrell
 *Date: 11/22/2022
 *File: search.class.php
 *Description:
 */

class Search extends SausageView
{
    public function display(){
        //Display the header
        parent::displayHeader("One Stop Sausage Searching Items ");

        ?>
        <div> this will display the search items page</div>
        <a href='<?= BASE_URL ?>/welcome'>back</a>

        <?php
        //Display the footer
        parent::displayFooter();

    }
}
