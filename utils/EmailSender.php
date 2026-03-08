<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender {
	public static function send(array $data): array {
		// Sanitize and validate inputs
		$name = htmlspecialchars($data['name'] ?? '', ENT_QUOTES, 'UTF-8');
		$email = filter_var($data['email'] ?? '', FILTER_VALIDATE_EMAIL);
		$reason = strip_tags($data['reason'] ?? '');
		$message = htmlspecialchars(
			$data['message'] ?? '',
			ENT_QUOTES,
			'UTF-8',
		);
		$recipient = filter_var(
			$data['recipient'] ?? '',
			FILTER_VALIDATE_EMAIL,
		);

		if (!$name || !$email || !$reason || !$message || !$recipient) {
			return ['error' => 'Invalid input'];
		}

		$mail = new PHPMailer(true);

		try {
			$mail->isSMTP();
			$mail->Host = VITE_SITE_SMTP_HOST;
			$mail->SMTPAuth = true;
			$mail->Username = VITE_SITE_SMTP_USER;
			$mail->Password = VITE_SITE_SMTP_PASS;
			$mail->SMTPSecure = VITE_SITE_SMTP_SECURE;
			$mail->Port = VITE_SITE_SMTP_PORT;

			$mail->setFrom(VITE_SITE_SMTP_FROM, VITE_SITE_SMTP_FROM_NAME);
			//$mail->addAddress($recipient);
			$mail->addAddress('carlos@evolve.ca');
			$mail->addReplyTo($email, $name);

			$mail->isHTML(false);
			$mail->Subject = 'New Contact Form Submission';
			$mail->Body = "Name: $name\nEmail: $email\nReason: $reason\nMessage:\n$message";

			$mail->send();

			return [
				'success' => true,
				'message' => 'Message sent successfully!',
			];
		} catch (Exception $e) {
			return ['error' => 'Error sending email: ' . $mail->ErrorInfo];
		}
	}
}
