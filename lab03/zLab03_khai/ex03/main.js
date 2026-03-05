const message = document.querySelector("#message")
const color = document.querySelector("#color")
const bold = document.querySelector("#bold")
const italic = document.querySelector("#italic")
const underline = document.querySelector("#underline")
const form = document.querySelector("form")
const content = document.querySelector(".alert-success")
const reset = document.querySelector(".btn")

function updateText(message) {
    content.innerHTML = message
}

function updateColor(color) {
    content.style.color = color
}

function updateStyle(isBold) {
    if(isBold) {
        content.style.fontWeight = "bold"
    } else {
        content.style.fontWeight = "normal"
    }
}

function changeStyle(isItalic) {
    if(isItalic) {
        content.style.fontStyle = "italic"
    } else {
        content.style.fontWeight = "normal"
    }
}

function changeDecoration(isUnderline) {
    if(isUnderline) {
        content.style.textDecoration = "underline"
    } else {
        content.style.textDecoration = "none"
    }
}
