<?php

namespace Csnntrt\IcqBot;

class Bot
{


	private $token;
	private $base_url;

	public function __construct($token, $url)
	{
		$this->token = $token;
		$this->base_url = $url;
	}


	public function sendText($chatId, $message)
	{
		$chatId = $chatId;
		$message = $message;
		$url = $this->base_url . '/messages/sendText?token=' . $this->token . '&chatId=' . $chatId . '&text=' . urlencode($message);
		$response = file_get_contents($url);
		if (strpos($response, 'ok') == true) {
			echo 'Message was sent successfully';
		}
	}
}
