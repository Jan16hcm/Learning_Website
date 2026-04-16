const email = document.getElementById("email");
const password = document.getElementById("pwd");
const error = document.querySelector("#errorMessage");
const btnSubmit = document.getElementById("btn-submit");
const form = document.querySelector("form");

function updateMess(message, input = null) {
    error.classList.remove("d-none");
    error.innerHTML = message;

    if(input) {
        input.focus();
        input.classList.add("is-invalid");
    }
}
email.addEventListener("invalid", (e) => {
    e.preventDefault();
    updateMess("Your email is not correct", email);
})
email.addEventListener(("input"), () => {
    email.classList.remove("is-invalid");
    error.classList.add("d-none");
})

password.addEventListener(("input"), () => {
    password.classList.remove("is-invalid");
    error.classList.add("d-none");
})


form.addEventListener("submit", (e) => {
    if(email.value.trim() === "") {
        e.preventDefault();
        updateMess("Please enter your email", email);
    } else if(password.value.trim() === "") {
        e.preventDefault();
        updateMess("Please enter your password", password);
    } else if(password.value.trim().length < 6) {
        e.preventDefault();
        updateMess("Your password must contain at least 6 characters", password);
    }
});


