const form = document.forms['registrationForm'];
let errors = document.querySelector(".errors");
if (form) {
    console.log("FORM")
    form.addEventListener('submit', validateForm);
}

function validateForm(event) {
    // Complete this function
    event.preventDefault();
    let failed = false;
    let errorMessage;

    if (form.fname.value === "") {
        form.fname.classList.add('error');
        errorMessage += document.createTextNode("Please enter your first name");
        failed = true;    
    }
    if (form.lname.value === "") {
        form.lname.classList.add('error');
        errorMessage += document.createTextNode("Please enter your last name");
        failed = true;
    }
    if (form.event.value === "") {
        form.event.classList.add('error');
        errorMessage += document.createTextNode("Please select an event to participate in");
        failed = true;
    }
    if (form.email.value === "") {
        form.email.classList.add('error');
        errorMessage += document.createTextNode("Please enter your email");
        failed = true;
    }
    if (form.pwd.value === "" || form.confirm-pwd.value) {
        form.pwd.classList.add('error');
        form.confirm-pwd.classList.add('error');
        errorMessage += document.createTextNode("Please enter a password in both fields");
        failed = true;
    }
    if (form.pwd.value != form.confirm-pwd.value) {
        form.pwd.classList.add('error');
        form.confirm-pwd.classList.add('error');
        errorMessage += document.createTextNode("Passwords do not match");
        failed = true;
    }
    if (form.age.value === "") {
        form.age.classList.add('error');
        errorMessage += document.createTextNode("Please select your age group");
        failed = true;
    }
    if (failed === true) {
        console.log("FAILED");
        console.log(errors + typeof(errors));
        console.log(errorMessage + typeof(errorMessage));
        errors.appendChild(errorMessage);
        return false;
    }
    console.log("TRUE");
    return true;
}
