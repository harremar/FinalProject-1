<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: index.php
 * Description: Final Project- One Stop Sausage. index page
 */

require_once ("application/config.php");

//load autoloader
require_once ("vendor/autoload.php");

//load the dispatcher that dissects a request URL
new Dispatcher();
