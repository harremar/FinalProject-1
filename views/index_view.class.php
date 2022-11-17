<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: index_view.class.php
 * Description:
 */

class SausageView {
    public function display($sausages){
        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>Sausage MVC List All Sausages</title>
            <link type="text/css" rel="stylesheet" href="includes/app_style.css" />
        </head>
        <body>
        <div class="proj-header">
            <h2>Sausages in our inventory</h2>
        </div>

        <table border="0">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Heat Index</th>
                <th>Stock</th>

            </tr>
            <?php
            //add code here to create a new row for each toy
            foreach($sausages as $sausage){
                echo "<tr>";
                echo "<td>", $sausage->getId(), "<?td>";
                echo "<td>", $sausage->getName(), "<?td>";
                echo "<td>", $sausage->getDescription(), "<?td>";
                echo "<td>", $sausage->getPrice(), "<?td>";


                echo "<td>", $sausage->getHeat(), "<?td>";
                echo "<td>", $sausage->getStock(), "<?td>";

                echo "</tr>";


            }


            ?>
        </table>
        </body>
        </html>
        <?php
    }
}
?>
