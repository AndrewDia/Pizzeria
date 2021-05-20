function increase(id) {
    document.getElementById("form_"+id).action = "/add/"+ ++document.getElementById('count_'+id).innerHTML;
}

function decrease(id) {
    document.getElementById("form_"+id).action = "/add/"+ --document.getElementById('count_'+id).innerHTML;
}
