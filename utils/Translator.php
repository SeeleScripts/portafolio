<?php

use Symfony\Component\Translation\Loader\JsonFileLoader;
use Symfony\Component\Translation\Translator as SymfonyTranslator;

class Translator {
	/** @var SymfonyTranslator */
	private $translator;
	/** @var string */
	private $locale;

	public const SUPPORTED_LOCALES = ['en', 'es'];
	public const DEFAULT_LOCALE = 'en';
	public const COOKIE_NAME = 'lang_pref';

	public function __construct(string $locale = self::DEFAULT_LOCALE) {
		$this->locale = in_array($locale, self::SUPPORTED_LOCALES, true)
			? $locale
			: self::DEFAULT_LOCALE;

		$this->translator = new SymfonyTranslator($this->locale);
		$this->translator->addLoader('json', new JsonFileLoader());

		foreach (self::SUPPORTED_LOCALES as $lang) {
			$file = ROOT . '/translations/' . $lang . '.json';
			if (file_exists($file)) {
				$this->translator->addResource('json', $file, $lang);
			}
		}
	}

	/**
	 * Translate a dot-notation key, e.g. "header.tagline"
	 */
	public function trans(string $key, array $params = []): string {
		// Convert "section.key" → symfony dot-path
		return $this->translator->trans($key, $params, null, $this->locale);
	}

	public function getLocale(): string {
		return $this->locale;
	}

	/**
	 * Detect locale from: cookie → Accept-Language header → default
	 */
	public static function detectLocale(): string {
		// 1. Cookie
		if (
			!empty($_COOKIE[self::COOKIE_NAME]) &&
			in_array($_COOKIE[self::COOKIE_NAME], self::SUPPORTED_LOCALES, true)
		) {
			return $_COOKIE[self::COOKIE_NAME];
		}

		// 2. Browser Accept-Language header
		$acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
		if ($acceptLanguage) {
			// Parse "es-ES,es;q=0.9,en;q=0.8" → ["es", "en"]
			preg_match_all(
				'/([a-z]{2})(?:-[A-Z]{2})?(?:;q=[\d.]+)?/',
				$acceptLanguage,
				$matches,
			);
			foreach ($matches[1] ?? [] as $lang) {
				if (in_array($lang, self::SUPPORTED_LOCALES, true)) {
					return $lang;
				}
			}
		}

		return self::DEFAULT_LOCALE;
	}
}
