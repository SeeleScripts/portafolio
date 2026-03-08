import JustValidate from 'just-validate';
const validation = new JustValidate('#contactForm');

validation
	.addField('[name="name"]', [{ rule: 'required' }])
	.addField('[name="email"]', [{ rule: 'required' }, { rule: 'email' }])
	.addField('[name="reason"]', [{ rule: 'required' }])
	.addField('[name="message"]', [{ rule: 'required' }])
	.addField('[name="recipient"]', [{ rule: 'required' }])
	.onSuccess(async (event) => {
		// Prevent default submit
		event.preventDefault();

		const form = event.target;
		const formData = new FormData(form);
		const nonce = document.getElementById('magic_token').value;

		const payload = {
			action: 'send_email',
			nonce: nonce,
			name: formData.get('name'),
			email: formData.get('email'),
			reason: formData.get('reason'),
			message: formData.get('message'),
			recipient: formData.get('recipient'),
		};
		console.log('ajax call start');
		console.log(payload);
		try {
			const res = await fetch('/ajax-handler', {
				method: 'POST',
				headers: { 'Content-Type': 'application/json' },
				body: JSON.stringify(payload),
				credentials: 'same-origin',
			});

			const result = await res.json();

			if (res.ok) {
				alert(result.message || 'Email sent!');
				console.log(result.message);
				form.reset(); // Optional: reset form after success
			} else {
				console.log('failed');
				console.error(result.error);
			}
		} catch (err) {
			console.error('Request failed:', err);
			console.log('An error occurred. Please try again.');
		}
	});
