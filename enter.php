<!DOCTYPE html>
<html>


    <head>

        <script>

            function keyPress(e) {
                if (e.keyCode === 8) {
                    var letter = document.getElementById('lname').value;
                    letter = letter.substring(0, letter.length - 1);
                } else
                {
                    var letter = document.getElementById('lname').value;
                    letter += String.fromCharCode(e.keyCode);
                }

                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };

                xmlhttp.open("GET", "name.php?letter=" + letter, true);
                xmlhttp.send();

            }

        </script>

    </head>
    <body>

        Please enter the first letter of the last name:<br><br>
        <input id = "lname" type="text" name="lastname" onkeydown="keyPress(event)">

        <div id="txtHint"></div>

    </body>
</html>





