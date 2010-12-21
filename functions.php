<?php
	define( 'LINK_LIMIT', 30 );
	define( 'LINK_FORMAT', '<a href="%s" rel="ext">%s</a>' );
	
	function parse_links  ( $m )
	{
	    $href = $name = html_entity_decode($m[0]);
	
	    if ( strpos( $href, '://' ) === false ) {
	        $href = 'http://' . $href;
	    }
	
	    if( strlen($name) > LINK_LIMIT ) {
	        $k = ( LINK_LIMIT - 3 ) >> 1;
	        $name = substr( $name, 0, $k ) . '...' . substr( $name, -$k );
	    }
	
	    return sprintf( LINK_FORMAT, htmlentities($href), htmlentities($name) );
	}


	function show_tweet ($entry, $reply = 0){
		$tweet_text = $entry->text;
		$reg = '~((?:https?://|www\d*\.)\S+[-\w+&@#/%=\~|])~';
		print("\n        ");
		if ($reply == 1){
			print('<div id="replytext">');
		}
		else{
			print('<div id="tweet">');
		}
		
		print ('<img src="' . $entry->user->profile_image_url . '" width="40" height="40">');
		print("\n        ");
		print ( '<b>' . $entry->user->screen_name . '</b>' . ': ' );
		print preg_replace_callback( $reg, 'parse_links', $tweet_text );
		print ('<br />');
		print("\n        ");
		print ('<pre style="font-size: 10px;">');
		print (' via ' . $entry->source . ' ' . $entry->created_at);
		if ($entry->in_reply_to_status_id != "") {
				print ( ' in reply to: <a onClick="showReplies(' . $entry->id_str . 
				')">' . $entry->in_reply_to_screen_name . '</a>' );
				print ('<div id="' . $entry->id_str . '"></div>');
			}

		print ("</pre></div>\n");
	}
	
	function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
		$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $oauth_token, $oauth_token_secret);
	  return $connection;
	}

?>