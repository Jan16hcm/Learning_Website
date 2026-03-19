const form = document.querySelector("form")
const message = document.querySelector("#message")
const content = document.querySelector("#contentText")
const btn = document.querySelector(".btn-success")

// function updateText(message) {
//     content.innerHTML = message

//     const color = document.getElementById("color").value
//     const isBold = document.getElementById("bold").checked
//     const isItalic = document.getElementById("italic").checked
//     const isUnderline = document.getElementById("underline").checked

//     updateColor(color)
//     updateFont(isBold)
//     updateStyle(isItalic)
//     updateDecoration(isUnderline)
//     // This code will help I implement immediately if I type and Event already selected
// }

// function updateColor(color) {
//     if(message.value != "") {
//         content.style.color = color
//     }
// }

// function updateFont(isBold) {
//     if(isBold && message.value != "") {
//         content.style.fontWeight = "Bold"
//     } else {
//         content.style.fontWeight = "normal"
//     }
// }

// function updateStyle(isItalic) {
//     if(isItalic && message.value != "") {
//         content.style.fontStyle = "Italic"
//     } else {
//         content.style.fontStyle = "normal"
//     }
// }

// function updateDecoration(isUnderline) {
//     if(isUnderline && message.value != "") {
//         content.style.textDecoration = "Underline"
//     } else {
//         content.style.textDecoration = "none"
//     }
// }

// btn.addEventListener("click",() => {
//     form.reset()
//     message.value = ""
//     content.innerHTML = "This text will be changed immediately when typing new text."
//     content.style.color = ""
//     content.style.fontWeight = ""
//     content.style.fontStyle = ""
//     content.style.textDecoration = "none"
// })
// function restore() {
//     form.reset()
//     message.value = ""
//     content.innerHTML = "This text will be changed immediately when typing new text."
//     content.style.color = ""
//     content.style.fontWeight = ""
//     content.style.fontStyle = ""
//     content.style.textDecoration = "none"
// }

// Below is the code I optimize with refer by Claude
const isControl = () => ({
    color : document.getElementById("color").value,
    isBold : document.getElementById("bold").checked,
    isItalic : document.getElementById("italic").checked,
    isUnderline : document.getElementById("underline").checked
})

const hasText = () => message.value !== ""

const applyStyle = () => {
    const {color, isBold, isItalic, isUnderline} = isControl()

    content.style.color = hasText() ? color : ""
    content.style.fontWeight = isBold && hasText() ? "bold" : "normal"
    content.style.fontStyle = isItalic && hasText() ? "italic" : "normal"
    content.style.textDecoration = isUnderline && hasText() ? "underline" : "none"
}

function updateText(value) {
    content.innerHTML = value
    applyStyle()
}

function updateFont(isBold) {applyStyle()}
function updateStyle(isItalic) {applyStyle()}
function updateDecoration(isUnderline) {applyStyle()}

btn.addEventListener("click", () => {
    form.reset()
    message.value = ""
    content.innerHTML = "This text will be changed immediately when typing new text."
    applyStyle()
})