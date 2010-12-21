<html><body>

<?php
`http://api.twitter.com/1/statuses/user_timeline.rss?screen_name=cmsrc > ~/tmp.txt`;
`grep title ~/tmp.txt > ~/parse.txt`;

$output = `cat ~/parse.txt`;
echo "<pre>$output</pre>";

?>

Hi <?php echo htmlspecialchars($_POST['name']); ?>.
You are <?php echo (int)$_POST['age']; ?> years old.
</body></html>
