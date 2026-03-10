import JustValidate from 'just-validate';
import Toastify from 'toastify-js';
import 'toastify-js/src/toastify.css';

/**
 * Show a toast notification.
 * @param {string} text  Message to display
 * @param {'success'|'error'} type  Style variant
 */
function showToast(text, type = 'success') {
	const isSuccess = type === 'success';
	Toastify({
		text,
		duration: 4500,
		gravity: 'top',
		position: 'right',
		stopOnFocus: true,
		style: {
			background: isSuccess
				? 'linear-gradient(135deg, #00AFF0, #0090c8)'
				: 'linear-gradient(135deg, #ef4444, #b91c1c)',
			borderRadius: '10px',
			fontFamily: 'Roboto, sans-serif',
			fontSize: '14px',
			padding: '12px 20px',
			boxShadow: '0 4px 20px rgba(0,0,0,0.2)',
		},
	}).showToast();
}

/**
 * Initialise contact form validation + AJAX submission.
 */
export default function contactForm() {
	const form = document.getElementById('contactForm');
	if (!form) return;

	const submitBtn = document.getElementById('contactSubmitBtn');
	const btnText = document.getElementById('contactBtnText');

	const validator = new JustValidate('#contactForm', {
		errorFieldCssClass: ['border-red-400', '!border-red-400'],
		errorLabelCssClass: ['text-red-500', 'text-xs', 'mt-1'],
		successFieldCssClass: ['border-primary'],
	});

	validator
		.addField('#name', [
			{
				rule: 'required',
				errorMessage: 'Name is required.',
			},
			{
				rule: 'minLength',
				value: 3,
				errorMessage: 'Name must be at least 3 characters.',
			},
		])
		.addField('#email', [
			{
				rule: 'required',
				errorMessage: 'Email is required.',
			},
			{
				rule: 'email',
				errorMessage: 'Please enter a valid email address.',
			},
		])
		.addField('#message', [
			{
				rule: 'required',
				errorMessage: 'Message cannot be empty.',
			},
		])
		.onSuccess(async (event) => {
			event.preventDefault();

			// ── Read Turnstile token ──────────────────────────────────
			const turnstileInput = form.querySelector(
				'[name="cf-turnstile-response"]',
			);
			const turnstileToken = turnstileInput ? turnstileInput.value : '';

			if (!turnstileToken) {
				showToast('Please complete the captcha.', 'error');
				return;
			}

			// ── Gather payload ────────────────────────────────────────
			const nonce = document.getElementById('magic_token')?.value ?? '';
			const formData = new FormData(form);

			const payload = {
				action: 'send_email',
				nonce,
				name: formData.get('name'),
				email: formData.get('email'),
				message: formData.get('message'),
				turnstileToken,
			};

			// ── Loading state ─────────────────────────────────────────
			submitBtn.disabled = true;
			btnText.textContent = 'Sending…';

			try {
				const res = await fetch('/ajax-handler', {
					method: 'POST',
					headers: { 'Content-Type': 'application/json' },
					body: JSON.stringify(payload),
					credentials: 'same-origin',
				});

				const result = await res.json();

				if (res.ok && result.success) {
					showToast('✅ Message sent! I\'ll get back to you soon.', 'success');
					form.reset();
					// Reset Turnstile widget so user can submit again later
					if (window.turnstile) {
						window.turnstile.reset();
					}
				} else {
					showToast(
						'❌ ' + (result.error ?? 'Something went wrong. Please try again.'),
						'error',
					);
					if (window.turnstile) {
						window.turnstile.reset();
					}
				}
			} catch (err) {
				console.error('Contact form error:', err);
				showToast('❌ Network error. Please check your connection.', 'error');
			} finally {
				submitBtn.disabled = false;
				btnText.textContent = 'Send Message';
			}
		});
}
