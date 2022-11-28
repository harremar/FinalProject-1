<?php
?>

<?php
class WelcomeIndex extends SausageView {

    public function display($sausages) {

        //display page header
        parent::displayHeader("One Stop Sausage Home ");
        ?>
        <div id="searchbar" class="searchBar">
            <form method="post" action="welcome/search">
                <input type="text" name="query-terms" id="searchtextbox" class="searchBox" placeholder="Search items..." autocomplete="off">
                <input type="submit" class="searchButton" value="Go" />
            </form>
            <!-- div block to display auto suggestion items -->
            <div id="suggestionDiv"></div>

        </div>
          <div class="products">
<!--                <div class="productItem">-->
<!--                <div class="productItemImage">-->
<!--                    <div class="heatProduct">Heat: 1</div>-->
<!--                </div>-->
<!--                <h2> Title </h2>-->
<!--                <p> This will be the description of the sausage</p>-->
<!--                <h4> $0.00 </h4>-->
<!--                <div class="productItemButtons">-->
<!--                    <a href='--><?//= BASE_URL ?><!--/welcome/details'>-->
<!--                        <div class="productItemViewButton">View Details</div>-->
<!--                    </a>-->
<!--                    <div class="productItemCartButton">Add to Cart</div>-->
<!--                </div>-->
<!--                </div>-->

            <?php
            //add code here to create a new row for each sausage
            foreach($sausages as $sausage){
                $id = $sausage->getId();
                echo "<div class='productItem'>";
                echo "<div class='productItemImage'>";
                echo "<div class='heatProduct'>", $sausage->getHeat(), "</div>";
                echo "</div>";
                echo "<h2>", $sausage->getName() ,"</h2>";
                echo "<p>", $sausage->getDescription(), "</p>";
                echo "<h4> $", $sausage->getPrice(),"</h4>";
                echo "<div class='productItemButtons'>";
                echo "<a href=",BASE_URL,"/welcome/details/$id>";
                echo "<button class='productItemViewButton' >View Details</button>";
                echo "</a>";
                echo "<button class='productItemCartButton'>Add to Cart</button>";
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
