<?php
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
include('functions.php');
	define("OAUTH_TOKEN", "7197842-sZcimnMyM7zTmELaPrzjBeaRuYaRFpqJhANPZoakek");
	define("OAUTH_SECRET", "qvBcJvlbvb6V7SMhiwd22pfUM5z3voESZd0TO2YESE");


			$connection = getConnectionWithAccessToken(OAUTH_TOKEN, OAUTH_SECRET);
			$tweetid = $_GET["statusid"];
			
			$base = $connection->get('statuses/show/' . $tweetid);
			$tweetid = $base->in_reply_to_status_id;
			$entry = $connection->get('statuses/show/' . $tweetid);
			
			show_tweet($entry, 1);
			
			while (strlen($entry->in_reply_to_status_id) > 3) {
				$tweetid = $entry->in_reply_to_status_id;
				$entry = $connection->get('statuses/show/' . $tweetid);
				show_tweet($entry, 1);
			}
?>