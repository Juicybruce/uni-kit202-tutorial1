const form = document.forms['registrationForm'];
let errors = document.querySelector(".errors");
if (form) {
    form.addEventListener('submit', validateForm);
}

function validateForm(event) {
    // Complete this function
    event.preventDefault();
    let valid = true;
    var errorMessage = '';

    if (form.fname.value === "") {
        form.fname.classList.add('error');
        errorMessage += "Please enter your first name <br>";
        valid = false;    
    }
    if (form.lname.value === "") {
        form.lname.classList.add('error');
        errorMessage += "Please enter your last name <br>";
        valid = false;
    }
    if (form.event.value === "") {
        form.event.classList.add('error');
        errorMessage += "Please select an event to participate in <br>";
        valid = false;
    }
    if (form.email.value === "") {
        form.email.classList.add('error');
        errorMessage += "Please enter your email <br>";
        valid = false;
    }
    if (form.pwd.value === "" || form.confirmPWD.value === "") {
        form.pwd.classList.add('error');
        form.confirmPWD.classList.add('error');
        errorMessage += "Please enter a password in both fields <br>";
        valid = false;
    }
    if (form.pwd.value != form.confirmPWD.value) {
        form.pwd.classList.add('error');
        form.confirmPWD.classList.add('error');
        errorMessage += "Passwords do not match <br>";
        valid = false;
    }
    if (form.age.value === "") {
        form.age.classList.add('error');
        errorMessage += "Please select your age group <br>";
        valid = false;
    }
    
    if (valid) {
        form.submit();
    } else {
        errors.innerHTML = errorMessage;
        return false;
    }
}
