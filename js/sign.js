// const signUPButton = document.getElementById('signUp')
// const signINButton = document.getElementById('signIn')
// const main = document.getElementById('main')
// signUPButton.addEventListener('click',() =>{
//     main.classList.add("right-panel-active")
// });
// signINButton.addEventListener('click',() =>{
//     main.classList.remove("right-panel-active")
// });
const signUPButton = document.getElementById('signUp');
const signINButton = document.getElementById('signIn');
const main = document.getElementById('main');

signUPButton.addEventListener('click', () => {
    main.classList.add("right-panel-active");
});

signINButton.addEventListener('click', () => {
    main.classList.remove("right-panel-active");
});
/* <script>
    document.getElementById('myForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const emailRegex = /^[\w\.-]+@\w+\.\w+$/;
      const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
      const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/;
      const dateRegex = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
      const phoneRegex = /^(\+[0-9]{1,3}[- ]?)?\(?[0-9]{3}\)?[- ]?[0-9]{3}[- ]?[0-9]{4}$/;
      const usernameRegex = /^[a-zA-Z0-9_]{3,16}$/;

      const email = document.getElementById('emailInput').value;
      const password = document.getElementById('passwordInput').value;
      const url = document.getElementById('urlInput').value;
      const date = document.getElementById('dateInput').value;
      const phone = document.getElementById('phoneInput').value;
      const username = document.getElementById('usernameInput').value;

      if (!emailRegex.test(email)) {
        alert('Invalid email format');
        return;
      }
      if (!passwordRegex.test(password)) {
        alert('Invalid password format');
        return;
      }
      if (!urlRegex.test(url)) {
        alert('Invalid URL format');
        return;
      }
      if (!dateRegex.test(date)) {
        alert('Invalid date format (YYYY-MM-DD)');
        return;
      }
      if (!phoneRegex.test(phone)) {
        alert('Invalid phone number format');
        return;
      }
      if (!usernameRegex.test(username)) {
        alert('Invalid username format');
        return;
      }

      alert('Form submitted successfully');
    });
  </script> */