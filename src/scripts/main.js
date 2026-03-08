import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs';
import backToTop from './modules/_backtotop';
import JustValidate from 'just-validate';

window.Alpine = Alpine;
window.AOS = AOS;

Alpine.start();
backToTop();

AOS.init({
	duration: 800,
	offset: 300,
	once: true,
	// disable: "mobile",
});

//import './modules/_send_email';
