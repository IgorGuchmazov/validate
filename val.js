let form = document.querySelector('.formAccount');
let required = form.querySelector('.required');
let val = document.querySelector('.input-val');
let email = form.querySelector('.email');
let sample = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

$(".first-tel").mask("+7(999)999-99-99");
$(".second-tel").mask("+7(999)999-99-99");

// val.classList.add('error');
// for(let i in required){
//     console.log(required[i]);
// }
form.addEventListener('submit', function(event)
{
    let error = true;
    alert(surname);
    for(let input of val)
    {
        if(input.value === '')
        {
            input.classList.add('error');
            error = false;
        }
        else input.classList.remove('error');
    }
    // if(sample.test(email.value) === false)
    // {
    //     email.classList.add('error');
    //     error = false;
    // }
    if (error === false) 
    {
        event.preventDefault();
    }
})