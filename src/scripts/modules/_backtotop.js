function backToTop() {
	const backToTopBtn = document.querySelector('.back-to-top');
	const backToTopWrap = document.querySelector('.back-to-top-wrap');
	const progressPath = document.querySelector('.back-to-top-wrap path');
	const pathLength = progressPath.getTotalLength();

	progressPath.style.transition = 'none';
	progressPath.style.strokeDasharray = `${pathLength} ${pathLength}`;
	progressPath.style.strokeDashoffset = pathLength;
	progressPath.getBoundingClientRect();
	progressPath.style.transition = 'stroke-dashoffset 10ms linear';

	const updateProgress = () => {
		const scrollTop = window.scrollY || document.documentElement.scrollTop;
		const docHeight =
			document.documentElement.scrollHeight - window.innerHeight;
		const progress = pathLength - (scrollTop * pathLength) / docHeight;
		progressPath.style.strokeDashoffset = progress;
	};

	window.addEventListener('scroll', () => {
		const scrollTop = window.scrollY || document.documentElement.scrollTop;

		// Toggle visibility
		if (scrollTop > 50) {
			backToTopBtn.style.display = 'block';
			backToTopWrap.classList.add('active-progress');
		} else {
			backToTopBtn.style.display = 'none';
			backToTopWrap.classList.remove('active-progress');
		}

		updateProgress();
	});

	backToTopWrap.addEventListener('click', (event) => {
		event.preventDefault();
		window.scrollTo({ top: 0, behavior: 'smooth' });
	});

	// Initial call
	updateProgress();
}

export default backToTop;
