const form = document.forms['registrationForm'];
let errors = document.querySelector(".errors");
if (form) {
    form.addEventListener('submit', validateForm);
}

function validateForm(event) {
    // Complete this function
    event.preventDefault();
    let failed = false;
    var errorMessage = '';

    if (form.fname.value === "") {
        form.fname.classList.add('error');
        errorMessage += "Please enter your first name <br>";
        failed = true;    
    }
    if (form.lname.value === "") {
        form.lname.classList.add('error');
        errorMessage += "Please enter your last name <br>";
        failed = true;
    }
    if (form.event.value === "") {
        form.event.classList.add('error');
        errorMessage += "Please select an event to participate in <br>";
        failed = true;
    }
    if (form.email.value === "") {
        form.email.classList.add('error');
        errorMessage += "Please enter your email <br>";
        failed = true;
    }
    if (form.pwd.value === "" || form.confirmPWD.value === "") {
        form.pwd.classList.add('error');
        form.confirmPWD.classList.add('error');
        errorMessage += "Please enter a password in both fields <br>";
        failed = true;
    }
    if (form.pwd.value != form.confirmPWD.value) {
        form.pwd.classList.add('error');
        form.confirmPWD.classList.add('error');
        errorMessage += "Passwords do not match <br>";
        failed = true;
    }
    if (form.age.value === "") {
        form.age.classList.add('error');
        errorMessage += "Please select your age group <br>";
        failed = true;
    }
    if (failed === true) {
        errors.innerHTML = errorMessage;
        return false;
    }
    console.log("TURE");
    errors.innerHTML = "";
    return true;
}
