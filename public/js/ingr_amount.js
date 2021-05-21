let increases = document.querySelectorAll('.increase');
let decreases = document.querySelectorAll('.decrease');
if (increases.length > 0) {
    let decreaseDiv = document.querySelectorAll('.decrease');
    let blackSquare = document.querySelectorAll('.black_square');
    for (let i = 0; i < increases.length; i++) {
        const increaseButt = increases[i];
        const decreaseButt = decreases[i];
        if (parseInt(document.getElementById("ingr_" + (i + 1)).value) <= 5
            && parseInt(document.getElementById("ingr_" + (i + 1)).value) > 0) {
            decreaseDiv[i].classList.add('_display');
            blackSquare[i].classList.add('_display');
        }
        increaseButt.addEventListener("click", function (e) {
            if(document.getElementById("ingr_" + (i + 1)).value < 5) {
                document.getElementById("ingr_" + (i + 1)).value++;
            }
            if (parseInt(document.getElementById("ingr_" + (i + 1)).value) === 1) {
                decreaseDiv[i].classList.add('_display');
                blackSquare[i].classList.add('_display');
            }
        });
        decreaseButt.addEventListener("click", function (e) {
            document.getElementById("ingr_" + (i + 1)).value--;
            if (parseInt(document.getElementById("ingr_" + (i + 1)).value) === 0) {
                decreaseDiv[i].classList.remove('_display');
                blackSquare[i].classList.remove('_display');
            }
        });
    }
}

let greyButtons = document.querySelectorAll('.grey_button');
if (greyButtons.length > 0) {
    const choosePizza = document.querySelector('.choose__pizza');
    for (let i = 0; i < greyButtons.length; i++) {
        const greyButton = greyButtons[i];
        greyButton.addEventListener("click", function (e) {
            document.body.classList.toggle('_lock');
            choosePizza.classList.toggle('_active');
        });
    }
}
