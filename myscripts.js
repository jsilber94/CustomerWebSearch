
function keyPress(e) {

    var letter = String.fromCharCode(e.keyCode);

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {

            document.getElementById()
        }
    };

    xmlhttp.open("GET", "name.php?letter=" + letter, true);
    xmlhttp.send();

}




