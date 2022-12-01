<?php

/**
 * Author: Aiden Eichenour
 * date: 11/7/22
 * File: login.class.php
 * Description: The methods to display a form for logging in
 */
class Login extends SausageView
{
    public function display(){
        //Display the header
        parent::displayHeader("One Stop Sausage Login Page ");

        ?>

            <div class="loginContainer">
                <div class="greyBar"> Welcome to Login Page</div>
                <!-- Code to display the form for logging in -->
                <!-- username, password, email, firstname, lastname-->
                <form action="<?= BASE_URL ?>/welcome/verify" method="post">
                    <label class="label" for="username">Username:</label><br>
                    <input class="input" class="input" type="text" id="username" name="username" required><br>
                    <label class="label" for="password">Password:</label><br>
                    <input class="input" type="password" id="password" name="password" min="5" required><br>

                    <input class="submitButton" type="submit" value="Login">
                </form>

                <div class="bottom-row">
                    <span style="font-family: Gadugi; float: left">Don't have an account? <a href="<?= BASE_URL ?>/welcome/createAccount">Create Account</a></span>
                    <span style="float: right"></span>
                </div>

                <br/>
                <a style="text-decoration: none" href='<?= BASE_URL ?>/welcome'><div class="backButton"><- Back to Home</div></a>
            </div>


        <?php
        //Display the footer
        parent::displayFooter();

    }
}
