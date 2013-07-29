<?php
$fp = fsockopen("127.0.0.1", 9001, $errno, $errstr, 30);
	if(!$fp) {
		echo "$errstr ($errno) </br>\n";
	} else
	{
		$out .= "GET /homework1.php HTTP/1.1\r\n";
		$out .= "User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:20.0) Gecko/20100101 Firefox/20.0\r\n"; 
		$out .= "Host: localhost\r\n";
		$out .= "Connection: Close\r\n\r\n";

		fputs($fp, $out);
		while(!feof($fp)) {
			echo fgets($fp, 128);			
		}
		fclose($fp);
	}
?>
