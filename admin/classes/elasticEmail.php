<?php 

	function sendElasticEmail($to, $subject, $body_text, $body_html, $from, $fromName)
	{
		$res = "";
	
		$data = "username=".urlencode("5a873eaa-3e10-4529-9120-9db07c76ca8f");
		$data .= "&api_key=".urlencode("5a873eaa-3e10-4529-9120-9db07c76ca8f");
		$data .= "&from=".urlencode($from);
		$data .= "&from_name=".urlencode($fromName);
		$data .= "&to=".urlencode($to);
		$data .= "&subject=".urlencode($subject);
		if($body_html)
			$data .= "&body_html=".urlencode($body_html);
		if($body_text)
			$data .= "&body_text=".urlencode($body_text);
	
		$header = "POST /mailer/send HTTP/1.0\r\n";
		$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Content-Length: " . strlen($data) . "\r\n\r\n";
		$fp = fsockopen('ssl://api.elasticemail.com', 443, $errno, $errstr, 30);
	
		if(!$fp)
			return "ERROR. Could not open connection";
		else {
			fputs ($fp, $header.$data);
			while (!feof($fp)) {
				$res .= fread ($fp, 1024);
			}
			fclose($fp);
		}
		return $res;
	}
//echo sendElasticEmail("test@test.com", "My Subject", "My Text", "My HTML", "youremail@yourdomain.com", "Your Name");
