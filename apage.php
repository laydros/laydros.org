<?php
/**
 * @file
 * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
include('functions.php');

define("CONSUMER_KEY", "????");
define("CONSUMER_SECRET", "????");
define("OAUTH_TOKEN", "7197842-sZcimnMyM7zTmELaPrzjBeaRuYaRFpqJhANPZoakek");
define("OAUTH_SECRET", "qvBcJvlbvb6V7SMhiwd22pfUM5z3voESZd0TO2YESE");


/* jason is adding this part */

$connection = getConnectionWithAccessToken(OAUTH_TOKEN, OAUTH_SECRET);

$content = $connection->get('statuses/home_timeline', array('count' => 75) );


/* Some example calls */
//$connection->get('users/show', array('screen_name' => 'abraham')));
//$connection->post('statuses/update', array('status' => date(DATE_RFC822)));
//$connection->post('statuses/destroy', array('id' => 5437877770));
//$connection->post('friendships/create', array('id' => 9436992)));
//$connection->post('friendships/destroy', array('id' => 9436992)));

/* Include HTML to display on the page */
include('html.inc');
