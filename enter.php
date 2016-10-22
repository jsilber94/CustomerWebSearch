<!DOCTYPE html>
<html>


    <head>

        <script>

            function keyPress(e) {

                var letter = String.fromCharCode(e.keyCode);

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
        <input id = "lname" type="text" name="lastname" onkeypress="keyPress(event)">

        <div id="txtHint"></div>

    </body>
</html>





