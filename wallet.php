<?php

	$platform = $_GET["platform"];

	$msg = "Please wait...";

	$url = "";

	if ($platform == "macos")
	{
		$url = "https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcash-client-0.6.0.4-osx.zip";
	}
	else if ($platform == "macosd")
	{
		$url = "https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcashd-0.6.0.4-win32.zip";
	}	
	else if ($platform == "win64")
	{
		$url = "https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcash-client-0.6.0.4-win64.zip";
	}
	else if ($platform == "win32d")
	{
		$url = "https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcashd-0.6.0.4-win32.zip";
	}
	else if ($platform == "win64d")
	{
		$url = "https://github.com/openvcash/vcash/releases/download/0.6.0.4/vcashd-0.6.0.4-win64.zip";
	}
	else if ($platform == "linux")
	{
		$url = "https://github.com/openvcash/vcash";
		$msg = "Redirecting to github.com/openvcash/vcash.";
	}
	else if ($platform == "mobile")
	{
		$url = "https://www.coinomi.com/downloads/";
		$msg = "Redirecting to coinomi.com/downloads.";
	}
	else if ($platform == "github")
	{
		$url = "https://github.com/openvcash/vcash";
		$msg = "Redirecting to github.com/openvcash/vcash.";
	}

	echo "<meta http-equiv=\"refresh\" content=\"1;URL='" . $url . "'\">";

	echo $msg;
?>
