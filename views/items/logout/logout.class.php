<?php
/**
 *Author: Marielle Harrell
 *Date: 11/29/2022
 *File: logout.class.php
 *Description:
 */

class Logout extends SausageView
{
    public function display(){
        //Display the header
        parent::displayHeader("One Stop Sausage Login Page ");

        ?>

        <div class="loginContainer">
            <div class="greyBar"> Logout</div>
            <!-- Code to display the form for logging in -->
            <!-- username, password, email, firstname, lastname-->
            <div class="middle-row">
                <p>You have logged out</p>
            </div>

            <div class="bottom-row">
                <span style="font-family: Gadugi; float: left">Have an account? <a href="<?= BASE_URL ?>/welcome/login">Login</a></span>
                <span style="font-family: Gadugi; float: right">Don't have an account? <a href="<?= BASE_URL ?>/welcome/createAccount">Create Account</a></span>

            </div>
            <br/>
            <a style="text-decoration: none" href='<?= BASE_URL ?>/welcome'><div class="backButton"><- Back to Home</div></a>
        </div>


        <?php
        //Display the footer
        parent::displayFooter();

    }
}
