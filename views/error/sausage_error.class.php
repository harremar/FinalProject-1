<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: sausage_error.class.php
 * Description:
 */
class SausageError{
    public function display($message){
        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>SausageMVC Error</title>
            <link type="text/css" rel="stylesheet" href="includes/style.css" />
        </head>
        <body>
        <table width='500'>
            <tr>
                <td valign='top' align='left'>
                    <h3> We're sorry, but an error has occurred.</h3>
                    <?php echo $message; ?>
                    <a href='<?= BASE_URL ?>/welcome'>back</a>
                </td>
            </tr>
        </table>
        </body>
        </html>


        <?php
    }
}
?>

