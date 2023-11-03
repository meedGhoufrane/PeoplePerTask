// JavaScript to toggle dark mode
const darkModeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;

darkModeToggle.addEventListener('click', function () {
  body.classList.toggle('dark-mode');
  // You can also store the user's preference in a cookie or local storage.

  // Change the icon when dark mode is active
  if (body.classList.contains('dark-mode')) {
    darkModeToggle.classList.remove('fa-moon');
    darkModeToggle.classList.add('fa-sun'); // Replace "fa-sun" with the appropriate Font Awesome sun icon.
  } else {
    darkModeToggle.classList.remove('fa-sun');
    darkModeToggle.classList.add('fa-moon');
  }
});


// validation form
var nameError = document.getElementById('name-error');
var phoneError = document.getElementById('phone-error');
var emailError = document.getElementById('email-error');
var messageError = document.getElementById('message-error');
var sendError = document.getElementById('send-error');

function validateName(){
    var name = document.getElementById('name').value;
    if(name.length == 0){
        nameError.innerHTML = 'Name is required' 
        return false;
    } 
    if(!name.trim().match(/^[A-Za-z]/)){
        nameError.innerHTML ='Form name is invalid'
        return false;
    }
    if(name.trim().length > 30) {
        nameError.innerHTML = 'name form is invalid'
        return false;
    }   
    nameError.innerHTML = '<i class="fa-solid fa-check" style="color: green;"></i>'
    return true; 
}
function validatePhone(){
    var Phone = document.getElementById('phone').value; 
    if(Phone.length == 0){
        phoneError.innerHTML ='Phone number is required'
        return false;
    }
    if(Phone.trim().length !== 10){
        phoneError.innerHTML ='Phone number should be 10 digits'
        return false;
    }
    if(!Phone.trim().match(/^[0-9]{10}$/)){
        phoneError.innerHTML ='Phone number form is invalid'
        return false;
    }
    phoneError.innerHTML = '<i class="fa-solid fa-check" style="color: green;"></i>'
    return true;
}
function validateEmail(){
    var Email = document.getElementById('email').value;
    if(Email.length == 0){
        emailError.innerHTML ='Email is required'
        return false;
    }
    if(!Email.trim().match(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/)){
        emailError.innerHTML ='Email form is invalid'
        return false;
    }
    emailError.innerHTML = '<i class="fa-solid fa-check" style="color: green;"></i>'
    return true;
}
function validateMessage(){
    var Message = document.getElementById('message').value;
    if(Message.length == 0){
        messageError.innerHTML ='Message is required'
        return false;
    }
    if(Message.trim().length  > 50) {
        messageError.innerHTML ='Message should not pass 50 digits'
        return false;
    }
    messageError.innerHTML = '<i class="fa-solid fa-check" style="color: green;"></i>'
    return true;
}
function validateForm(){
    if(!validateName() || !validateMessage() || !validatePhone() || !validateEmail()){
        sendError.innerHTML = 'Please fix error to send the form' 
        return false;
    }
    sendError.innerHTML= '';
    return true ;
}
// end validatin form