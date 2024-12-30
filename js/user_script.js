const userBtn = document.querySelector('#user-btn');
userBtn.addEventListener('click', function(){
    const userBox = document.querySelector('.profile'); // Fixed quotes
    userBox.classList.toggle('active');
});

const toggle = document.querySelector('#menu-btn');
toggle.addEventListener('click', function(){
    const navbar = document.querySelector('.navbar'); // Fixed quotes
    navbar.classList.toggle('active');
});

const SearchForm = document.querySelector('.search-form');
document.querySelector('#search_service_btn').onclick = () => {
    SearchForm.classList.toggle('active');
};



/*..............testimonial-item..............*/
let slide = document.querySelectorAll('.testimonial-item');
let index = 0;

function rightSlide(){
    slide[index].classList.remove('active');
    index = (index + 1) % slide.length;
    slide[index].classList.add('active');
}

function leftSlide(){
    slide[index].classList.remove('active');
    index = (index - 1 + slide.length) % slide.length;
    slide[index].classList.add('active');
}