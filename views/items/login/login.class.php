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

        <!-- Code to display the form for logging in -->
        <!-- username, password, email, firstname, lastname-->
        <form action="../../../index.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" min="5" required><br>

            <input type="submit" value="Submit">
        </form>
        <a href='<?= BASE_URL ?>/welcome'>back</a>


        <?php
        //Display the footer
        parent::displayFooter();

    }
}