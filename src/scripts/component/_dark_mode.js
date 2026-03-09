export default function darkModeToggle() {
	const themeToggleBtn = document.getElementById('theme-toggle');
	if (!themeToggleBtn) return;

	const savedTheme = localStorage.getItem('theme');
	const systemPrefersDark = window.matchMedia(
		'(prefers-color-scheme: dark)',
	).matches;

	// Initial setup
	const isDarkMode =
		savedTheme === 'dark' || (!savedTheme && systemPrefersDark);

	if (isDarkMode) {
		document.documentElement.classList.add('dark');
	} else {
		document.documentElement.classList.remove('dark');
	}

	themeToggleBtn.addEventListener('click', () => {
		const currentlyDark =
			document.documentElement.classList.contains('dark');

		if (currentlyDark) {
			document.documentElement.classList.remove('dark');
			localStorage.setItem('theme', 'light');
		} else {
			document.documentElement.classList.add('dark');
			localStorage.setItem('theme', 'dark');
		}
	});
}
