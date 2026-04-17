const btnBack = document.getElementById("btnBack");
const btnNext = document.getElementById("btnNext");
const btnSlideshow = document.getElementById("btnSlideshow");
const imageList = document.getElementById("imageList");
const img = document.getElementById("image");
const fileInfo = document.getElementsByClassName("fileInfo")[0];
let count = 0;

btnNext.addEventListener("click", () => {
    count = (count + 1) % imageList.options.length;
    updateImage();
});

btnBack.addEventListener("click", () => {
    count = (count - 1 + imageList.options.length) % imageList.options.length;
    updateImage();
});

function updateImage() {
    img.src = "/lab03/images/" + imageList.options[count].value;
    fileInfo.innerHTML = imageList.options[count].value;
    imageList.selectedIndex = count;
}
let slideInterval = null;
btnSlideshow.addEventListener("click", () => {

    if (slideInterval) {
        clearInterval(slideInterval);
        slideInterval = null;
        btnSlideshow.textContent = "Start Slideshow";
        btnBack.disabled = false;
        btnNext.disabled = false;
        btnSlideshow.style.backgroundColor = "gray";
        return;
    }

    btnBack.disabled = true;
    btnNext.disabled = true;
    btnSlideshow.textContent = "Stop Slideshow";
    btnSlideshow.style.backgroundColor = "red";

    slideInterval = setInterval(() => {
        count = (count + 1) % imageList.options.length;
        updateImage();
    }, 1000);
});
