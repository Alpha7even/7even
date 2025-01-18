document.addEventListener('DOMContentLoaded', function() {
    const signInBtnLink = document.querySelector('.signInBtn-link');
    const signUpBtnLink = document.querySelector('.signUpBtn-link');
    const wrapper = document.querySelector('.wrapper');

    function toggleForm() {
        wrapper.classList.toggle('active');
    }

    signInBtnLink.addEventListener('click', toggleForm);
    signUpBtnLink.addEventListener('click', toggleForm);
});