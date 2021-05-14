import '../style/styles.scss';
import { swiper } from './modules/slider.js';

const toggleBtn = document.querySelector('.nav__toggle');
const nav = document.querySelector('.main__header--nav');
const faqs = document.querySelectorAll('.faq__item--head');

toggleBtn.addEventListener('click', (e) => {
  document.body.classList.toggle('open');

  const navLinks = e.target.closest('.nav').querySelectorAll('.nav__item');
  navLinks.forEach((navLink) => {
    navLink.addEventListener('click', () => {
      document.body.classList.remove('open');
    });
  });
});

window.addEventListener('scroll', () => {
  if (pageYOffset > 100) nav.classList.add('nav-fixed');
  else nav.classList.remove('nav-fixed');
});

faqs.forEach((faq) => {
  faq.addEventListener('click', (e) => {
    const faqItem = e.target.closest('.faq__item');
    faqs.forEach((checkActiveFaq) => {
      const activeFaq = checkActiveFaq.closest('.faq__item');
      // if (activeFaq.classList.contains('active')) {
      activeFaq.classList.remove('active');
      // }
    });
    // if (faqItem.classList.con) faqItem.classList.add('active');
    faqItem.classList.contains('active')
      ? faqItem.classList.remove('active')
      : faqItem.classList.add('active');
  });
});

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept();
}
