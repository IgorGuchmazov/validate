let form = document.querySelector('.formAccount');
let required = form.querySelectorAll('.required');
let email = form.querySelector('.email');
let sample = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

$(".first-tel").mask("+7(999)999-99-99");
$(".second-tel").mask("+7(999)999-99-99");


form.addEventListener('submit', function(event)
{
    let error = true;
    for(let input of required)
    {
        if(input.value === '')
        {
            input.classList.add('error');
            error = false;
        }
        else input.classList.remove('error');
    }
    if(sample.test(email.value) === false)
    {
        email.classList.add('error');
        error = false;
    }
    if (error === false) 
    {
        event.preventDefault();
    }
})