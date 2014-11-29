<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Youtube Downloader</title>
    <meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<style type="text/css"></style>
	</head>
<body>
	<form class="form-download" method="get" id="download" action="getvideo.php">
		<h1 class="form-download-heading">Youtube Downloader</h1>
		<input type="text" name="videourl" id="videoid" size="90" placeholder="URL Video: https://www.youtube.com/watch?v=CevxZvSJLk8" />
		<input class="btn btn-primary" type="submit" name="type" id="type" value="Download" />
		<p>Put url video Youtube</p>
		<p>Example: https://www.youtube.com/watch?v=CevxZvSJLk8</p>

    <!-- @TODO: Prepend the base URI -->
    <?PHP
	/*
    include_once('config.php');
    function is_chrome(){
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
		if(!strstr($agent, 'Iron')) // but not Iron
			return true;
	}
	return false;	// if isn't chrome return false
    }
    if(($config['feature']['browserExtensions']==true)&&(is_chrome()))
      echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
	  */
    ?>
  </form>
</body>
</html>
