<?php
class WelcomeIndex extends SausageView {

    public function display($sausages) {
        //display page header
        parent::displayHeader("One Stop Sausage Home ");
        ?>
          <div class="products">
<!--                <div class="productItem">-->
<!--                <div class="productItemImage">-->
<!--                    <div class="heatProduct">Heat: 1</div>-->
<!--                </div>-->
<!--                <h2> Title </h2>-->
<!--                <p> This will be the description of the sausage</p>-->
<!--                <h4> $0.00 </h4>-->
<!--                <div class="productItemButtons">-->
<!--                    <div class="productItemViewButton">View Details</div>-->
<!--                    <div class="productItemCartButton">Add to Cart</div>-->
<!--                </div>-->
<!--                </div>-->

            <?php
            //add code here to create a new row for each sausage
            foreach($sausages as $sausage){
                echo "<div class='productItem'>";
                echo "<div class='productItemImage'>";
                echo "<div class='heatProduct'>", $sausage->getHeat(), "</div>";
                echo "</div>";
                echo "<h2>", $sausage->getName() ,"</h2>";
                echo "<p>", $sausage->getDescription(), "</p>";
                echo "<h4> $", $sausage->getPrice(),"</h4>";
                echo "<div class='productItemButtons'>";
                echo "<div class='productItemViewButton'>View Details</div>";
                echo "<div class='productItemCartButton'>Add to Cart</div>";
                echo "</div>";
                echo "</div>";

            }
            ?>
            </div>
        <?php
        //display page footer
        parent::displayFooter();
    }

}
