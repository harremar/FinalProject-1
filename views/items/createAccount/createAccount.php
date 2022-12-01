<?php
/**
 *Author: Marielle Harrell
 *Date: 11/29/2022
 *File: createAccount.class.php
 *Description:
 */

class Create extends SausageView {

    public function display() {
        parent::displayHeader("this is the createAccount page");
        ?>
        <div class="loginContainer">
            <div class="greyBar"> Create an Account</div>
            <div class="middle-row">
                <p style="padding-top: 15px">Please complete the entire form. All fields are required.</p>
                <form method="post" action="<?= BASE_URL ?>/welcome/register">
                    <div><input class="input" type="text" name="username" style="width: 99%"  placeholder="Username"></div>
                    <div><input class="input" type="password" name="password" style="width: 99%"  placeholder="Password, 5 characters minimum"></div>
                    <div><input class="input" type="text" name="email" style="width: 99%" placeholder="Email"></div>
                    <div><input class="input" type = 'text' name="fname" style="width: 99%"  placeholder="First name"></div>
                    <div><input class="input" type="text" name="lname" style="width: 99%" placeholder="Last name"></div>
                    <div><input class="submitButton" type="submit" class="button" value="Register"></div>
                </form>
            </div>
            <div class="bottom-row">
                <span style="float: left; font-family: Gadugi">Already have an account? <a href="<?= BASE_URL ?>/welcome/login">Login</a></span>
                    <br/>
                <a style="text-decoration: none" href='<?= BASE_URL ?>/welcome'><div class="backButton"><- Back to Home</div></a>
            </div>
            </div>
        <?php
        parent::displayFooter();
    }

}
