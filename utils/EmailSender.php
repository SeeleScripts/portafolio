<?php

class EmailSender
{
	public static function send(array $data): array
	{
		// Sanitize and validate inputs
		$name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
		$email = filter_var($data['email'] ?? '', FILTER_VALIDATE_EMAIL);
		$message = htmlspecialchars($data['message'] ?? '', ENT_QUOTES, 'UTF-8');

		if (!$name || !$email || !$message) {
			return ['error' => 'Invalid input data'];
		}

		$mailgunApi = VITE_SITE_MAILGUN_API;
		$mailgunDomain = VITE_SITE_MAILGUN_DOMAIN;
		$recipient = 'chernandezv2013@gmail.com';

		$postData = [
			'from'    => "Portfolio Contact <mailgun@{$mailgunDomain}>",
			'to'      => $recipient,
			'subject' => "New Contact Form Message from {$name}",
			'text'    => "Name: {$name}\nEmail: {$email}\n\nMessage:\n{$message}",
			'h:Reply-To' => "{$name} <{$email}>",
		];

		$ch = curl_init("https://api.mailgun.net/v3/{$mailgunDomain}/messages");
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($ch, CURLOPT_USERPWD, "api:{$mailgunApi}");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

		$result = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$curlError = curl_error($ch);
		curl_close($ch);

		if ($curlError) {
			return ['error' => 'Connection error: ' . $curlError];
		}

		$response = json_decode($result, true);

		if ($httpCode === 200) {
			return [
				'success' => true,
				'message' => 'Message sent successfully!',
			];
		}

		return [
			'error' => 'Failed to send email: ' . ($response['message'] ?? "HTTP {$httpCode}"),
		];
	}
}
