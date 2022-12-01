<?php

/**
 * Author: Aiden Eichenour
 * Date: Date: 11/14/2022
 * File: config.php
 * Description: set application settings
 * 
 */

//error reporting level: 0 to turn off all error reporting; E_ALL to report all
error_reporting(E_ALL);

//local time zone
date_default_timezone_set('America/New_York');

//base url of the application
define("BASE_URL", "http://localhost/i211/FinalProject");


/*************************************************************************************
 *                       settings for Store                                        *
 ************************************************************************************/

//define default path for media images
//define("MOVIE_IMG", "www/images/movies/");