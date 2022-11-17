<?php
class WelcomeIndex extends SausageView {

    public function display($sausages) {
        //display page header
        parent::displayHeader("One Stop Sausage Home ");
        ?>
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
        <?php
        //display page footer
        parent::displayFooter();
    }

}
