function increase(id) {
    if(document.getElementById("ingr_" + id).value < 5)
        document.getElementById("ingr_" + id).value++;
}

function decrease(id) {
    document.getElementById("ingr_" + id).value--;
}
