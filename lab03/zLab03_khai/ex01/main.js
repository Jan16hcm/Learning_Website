// const email = document.getElementById("email");
// const password = document.getElementById("pwd");
// const error = document.querySelector(".errorMessage");
// const form = document.querySelector("form");

// function showError(message , input = null) {
//     error.innerHTML = message;
//     error.classList.remove("d-none");

//     if(input) {
//         input.classList.add("is-invalid");
//         input.focus();
//     }
// }

// email.addEventListener("invalid", (e) => {
//     e.preventDefault();
//     showError("Your email is not correct!", email);
// });

// email.addEventListener("input", () => {
//     error.classList.add("d-none");
//     email.classList.remove("is-invalid");
// });


// password.addEventListener("input", () => {
//     error.classList.add("d-none");
//     password.classList.remove("is-invalid");
// });


// form.addEventListener("submit", (e) => {
//     if(email.value.trim() === "") {
//         e.preventDefault();
//         showError("Please enter your email", email);
//     } 
//     else if(password.value.trim() === "") {
//         e.preventDefault();
//         showError("Please enter your password!", password);
//     }
//     else if(password.value.trim().length < 6) {
//         e.preventDefault();
//         showError("Your password must contain at least 6 characters", password);
//     }
// });

const email = document.querySelector("#email")
const password = document.querySelector("#pwd")
const error = document.querySelector(".errorMessage")
const form = document.querySelector("form")

function showMessage(message, input = null) {
    error.innerHTML = message
    error.classList.remove("d-none")

    if(input) {
        input.classList.add("is-invalid")
        input.focus()
    }
}
email.addEventListener("invalid", (e) => {
    e.preventDefault()
    showMessage("Your email is not correct", email)
})
email.addEventListener("input", () => {
    error.classList.add("d-none")
    email.classList.remove("is-invalid")
})

password.addEventListener("input", () => {
    error.classList.add("d-none")
    password.classList.remove("is-invalid")
})

form.addEventListener("submit", (e) => {
    if(email.value.trim() === "") {
        e.preventDefault()
        showMessage("Please enter your email", email)
    }
    else if(password.value.trim() === "") {
        e.preventDefault()
        showMessage("Please enter your password", password)
    }
    else if(password.value.trim().length < 8) {
        e.preventDefault()
        showMessage("Your password must contain at least 6 characters", password)
    }
})