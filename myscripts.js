
function keyPress(e) {
    var l = e.keyCode;
    var letter = String.fromCharCode(l);

    var xmlhttp = new XMLHttpRequest();

    var queryString = "?letter=" + letter;
    xmlhttp.open("GET", "name.php" + queryString, true);

    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
            xmlhttp.send();
        alert(sent);
    }







}

    