<?php
/**
 *Author: Marielle Harrell
 *Date: 11/29/2022
 *File: verify.php
 *Description:
 */

class Verify extends SausageView {

    public function display($result) {
        parent::displayHeader("Verify Page");
        ?>
        <div class="loginContainer">
            <div class="greyBar"> Login </div>
            <div class="middle-row">
                <p><?= $result ?></p>
            </div>
            <div class="bottom-row">
            <span style="float: left">
                <?php
                if (strpos($result, "successful") == true) { //if the user has logged in, display the logout button
                    echo "Want to log out? <a href='/I211/Final/FinalProject2/welcome/logout'>Logout</a>";
                } else { //if the user has not logged in, display the login button
                    echo "Already have an account? <a href='/I211/Final/FinalProject2/welcome/login'>Login</a>";
                }
                ?>
            </span>
                <br/>
                <a style="text-decoration: none" href='<?= BASE_URL ?>/welcome'><div class="backButton"><- Back to Home</div></a>

            </div>
        </div>
        <?php
        parent::displayFooter();
    }

}
