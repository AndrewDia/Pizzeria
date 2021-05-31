function increase(id) {
    if (document.getElementById('count_' + id).innerHTML < 20)
        document.getElementById("form_" + id).action = "/add/" + ++document.getElementById('count_' + id).innerHTML;
}

function decrease(id) {
    if (document.getElementById('count_' + id).innerHTML > 1)
        document.getElementById("form_" + id).action = "/add/" + --document.getElementById('count_' + id).innerHTML;
}
