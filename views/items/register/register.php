<?php
/**
 *Author: Marielle Harrell
 *Date: 11/29/2022
 *File: register.php
 *Description:
 */

class Register extends SausageView {

    public function display($result) {
        parent::displayHeader("Register Page");
        ?>

        <div class="loginContainer">
            <div class="greyBar"> Create an Account</div>
            <div class="middle-row">
                <p><?= $result ?></p>
            </div>
            <div class="bottom-row">
                <span style="float: left; font-family: Gadugi">Already have an account? <a href="<?= BASE_URL ?>/welcome/login">Login</a></span>
                <span style="float: right; font-family: Gadugi">Don't have an account? <a href="<?= BASE_URL ?>/welcome/createAccount">Register</a></span>
                <br/>
                <a style="text-decoration: none" href='<?= BASE_URL ?>/welcome'><div class="backButton"><- Back to Home</div></a>
            </div>
        </div>
        <?php
        parent::displayFooter();
    }

}
