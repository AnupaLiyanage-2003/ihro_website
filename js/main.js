/* Scroll Animation */
const feedbacks = document.querySelectorAll('.animate-feedback');

const feedbackObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
}, {
    threshold: 0.2
});

feedbacks.forEach(item => {
    feedbackObserver.observe(item);
});