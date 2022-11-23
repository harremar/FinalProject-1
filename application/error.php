

<?php
/**
 * Author: Group 4
 * Date: 11/22/2022
 * Name: error.php
 * Description: this script displays an error message. This script is globally available throughout the application.
 *     The message to be displayed is passed to this script via variable $message. The dispatcher uses this to
 *     display an error message when the requested controller is not found.
 */

$page_title = "Error";
//display header
SausageView::displayHeader($page_title);

?>
    <div id = "main-header">Error</div>
    <hr>
    <table style = "width: 100%; border: none">
        <tr>
            <td style = "text-align: left; vertical-align: top;">
                <h3> Sorry, but an error has occurred.</h3>
                <div style = "color: red">
                    <?= urldecode($message)
                    ?>
                </div>
                <br>
            </td>
        </tr>
    </table>
    <br><br><br><br><hr>
    <a href="<?= BASE_URL ?>/index.php">Back to Welcome Page</a>

<?php
//display footer
SausageView::displayFooter();
