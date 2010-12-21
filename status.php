<html><head>
	<title>Replies</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<style type="text/css" media="all"> 
		@import "basicstyle.css";
	</style>
    </head>
	<body>
		<a href="apage.php">Back to list</a>
		<hr />
		<!-- <pre> -->
		<div id="container">
		<?php
		session_start();
		require_once('twitteroauth/twitteroauth.php');
		require_once('config.php');
		include('functions.php');
			define("OAUTH_TOKEN", "7197842-sZcimnMyM7zTmELaPrzjBeaRuYaRFpqJhANPZoakek");
			define("OAUTH_SECRET", "qvBcJvlbvb6V7SMhiwd22pfUM5z3voESZd0TO2YESE");
		
		
			// print('Retrieved at: ' . date(DATE_RFC822);
					$connection = getConnectionWithAccessToken(OAUTH_TOKEN, OAUTH_SECRET);
					$tweetid = $_GET["statusid"];
					$entry = $connection->get('statuses/show/' . $tweetid);

					show_tweet($entry);

					while (strlen($entry->in_reply_to_status_id) > 3) {
						$tweetid = $entry->in_reply_to_status_id;
						$url = "http://api.twitter.com/1/statuses/show/" . $tweetid . ".xml";
						$entry = $connection->get('statuses/show/' . $tweetid);
						show_tweet($entry);
					}
		?>
	</div>
		</body>
		</html>
		
