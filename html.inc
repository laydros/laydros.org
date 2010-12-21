<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Some Page</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<style type="text/css" media="all"> 
		@import "basicstyle.css";
	</style>
	<script type="text/javascript">

		// function showReplies(msgID){
		// 			// alert(document.getElementByID(msgID).innerHTML);
		// 			// alert("hi " + msgID);
		// 			var someText = "here is some text in a var";
		// 			document.getElementById(msgID).innerHTML = someText;
		// 		}


		function showReplies(msgID){
			if (window.XMLHttpRequest){ // code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
		  	}
			else {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function(){
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById(msgID).innerHTML=xmlhttp.responseText;
			    }
			}
			xmlhttp.open("GET","getreplies.php?statusid=" + msgID, true);
			xmlhttp.send();
		}


	</script>

  </head>
  <body>
    <div>
  <div id="title">
  <h1>WATTAGO</h1>
  </div>
	  	<?php
			date_default_timezone_set('EST');
			print ( 'Refreshed at: ' . date('H:i:s') );
			?> 
	  </h5> 
      <hr />
      <?php if (isset($menu)) { ?>
        <?php echo $menu; ?>
      <?php } ?>
    </div>
    <?php if (isset($status_text)) { ?>
      <?php echo '<h3>'.$status_text.'</h3>'; ?>
    <?php } ?>
    <div id="container">
        <?php 
			foreach($content as $entry) {
				show_tweet ($entry);
			}
			// print_r($content);
			?>
	</div>

  </body>
</html>
