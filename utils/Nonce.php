<?php

class Nonce {
	public static function generate(string $action): string {
		$nonce = bin2hex(random_bytes(16));
		$_SESSION['nonces'][$action] = $nonce;
		return $nonce;
	}

	public static function verify(string $nonce, string $action): bool {
		return isset($_SESSION['nonces'][$action]) &&
			hash_equals($_SESSION['nonces'][$action], $nonce);
	}
}
