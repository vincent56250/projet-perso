const wrapper = document.getElementById("wrapper");
let images = ["hamburger-494706_1920.jpg", "coffee-171653_1920.jpg", "olive-oil-968657_1920.jpg"];

let left = document.getElementById("left-arrow")
let right = document.getElementById("right-arrow")
let position = 0;
wrapper.innerHTML = "<img src='public/images/images1920/" + images[position] + "'/>";

left.addEventListener('click', function () {
    if (position == 2) {
        position = 0;
    } else {
        position++;
    }
    wrapper.innerHTML = "<img src='public/images/images1920/" + images[position] + "'/>";
});

right.addEventListener("click", function () {
    if (position == 0) {
        position = 2;
    } else {
        position--;
    }
    wrapper.innerHTML = "<img src='public/images/images1920/" + images[position] + "'/>";
});