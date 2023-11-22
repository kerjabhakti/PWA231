const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.classList.add('bg-black');
    } else {
        navbar.classList.remove('bg-black');
    }
});