<!DOCTYPE html>
<html>
    <body>
        <script src="myscripts.js"></script>

        Please enter the first letter of the last name:<br><br>
        <input id = "lname" type="text" name="lastname" onkeypress="keyPress(event)">


    </body>
</html>


<?php
if (isset($_GET['letter']))
    echo $_GET['letter'];

