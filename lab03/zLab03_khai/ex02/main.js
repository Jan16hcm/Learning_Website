const form = document.querySelector("form");
const fName = document.getElementById("firstname");
const lName = document.getElementById("lastname");
const email = document.getElementById("email");
const error = document.querySelector(".errorMessage");
const table = document.querySelector(".table");

function errorMessage(message, input = null) {
    error.innerHTML = message;
    error.classList.remove("d-none");

    if(input) {
        input.focus();
        input.classList.add("is-invalid");
    }
}

fName.addEventListener("input", () => {
    fName.classList.remove("is-invalid");
    error.classList.add("d-none");
});

lName.addEventListener("input", () => {
    lName.classList.remove("is-invalid");
    error.classList.add("d-none");
});

email.addEventListener("invalid", (e) => {
    e.preventDefault();
    errorMessage("Your email is not correct!", email);
});
email.addEventListener("input", () => {
    email.classList.remove("is-invalid");
    error.classList.add("d-none");
})

form.addEventListener("submit", (e) => {
    e.preventDefault();
    if(fName.value.trim() === "") {
        errorMessage("Please enter your First name!", fName);
        return;

    } else if(lName.value.trim() === "") {
        errorMessage("Please enter your Last name", lName);
        return;

    } else if(email.value.trim() === "") {
        errorMessage("Please enter your email", email);
        return;

    }

    const tbody = table.querySelector("tbody");
    const row = document.createElement("tr");

    row.innerHTML = `
    <td>${fName.value.trim()}</td>
    <td>${lName.value.trim()}</td>
    <td>${email.value.trim()}</td>
    <td>
        <button class="delete-btn btn btn-danger btn-sm">Delete</button>
    </td>`;

    tbody.appendChild(row);
    form.reset();
});


form.addEventListener("reset", () => {
    error.classList.add("d-none");
    [fName, lName, email].forEach(i => i.classList.remove("is-invalid"));
});

table.addEventListener("click", e => {
    if(e.target.classList.contains("delete-btn")) {
        if(confirm("Are you sure?")) {
            e.target.closest("tr").remove();
        }
    }
});