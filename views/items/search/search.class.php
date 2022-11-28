<?php
/**
 *Author: Marielle Harrell
 *Date: 11/22/2022
 *File: search.class.php
 *Description:
 */

class Search extends SausageView
{
    public function display($terms, $items){
        //Display the header
        parent::displayHeader("One Stop Sausage Searching Items ");

        ?>
        <div id="main-header"> Search Results for <i><?= $terms ?></i></div>
        <span class="rcd-numbers">
            <?php
            echo ((!is_array($items)) ? "( 0 - 0 )" : "( 1 - " . count($items) . " )");
            ?>
        </span>
        <hr>

        <!-- display all records in a grid -->
        <div class="grid-container">
            <?php
            if ($items === 0) {
                echo "No item was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($items as $item) {
                    $id = $item->getId();
                    $name = $item->getName();

                    echo "<div>", $id ,"</div>";
                    echo "<div>", $name ,"</div>";

                }
            }
            ?>
        </div>
        <div> this will display the search items page</div>
        <a href='<?= BASE_URL ?>/welcome'>back</a>

        <?php
        //Display the footer
        parent::displayFooter();

    }
}