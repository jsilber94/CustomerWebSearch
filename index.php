<!DOCTYPE html>
<html>
    <body>

        <form method="GET" action ="">
            Postcode:<br>
            <input type="number" name="postcode">
            <br>
            Salary start: <br>
            <input type="number" name="salarystart" min = 1000>
            <br>
            Salary end:<br>
            <input type="number" name="salaryend" min = 1000>

            <br>
            Date start:<br>
            <input type="date" name="datestart">
            <br>
            Date end:<br>
            <input type="date" name="dateend">
            <br>
            <input type="submit" value="Submit">
        </form>




        <?php
        if (isset($_GET['postcode'])) {
            $postcode = $_GET['postcode'];


            if (isset($_GET['salarystart'])) {
                $salarystart = $_GET['salarystart'];
            }
            if (isset($_GET['salaryend'])) {
                $salaryend = $_GET['salaryend'];
            }



            if (isset($_GET['datestart'])) {
                $datestart = $_GET['datestart'];
                $datestart = date("Y-m-d", strtotime($datestart));
            }

            if (isset($_GET['dateend'])) {
                $dateend = $_GET['dateend'];
                $dateend = date("Y-m-d", strtotime($dateend));
            }

            require "CustomerDAO";

            $customer = new Customer("", "", $datestart, $salarystart, "", "", "", "", $postcode);
            $customer->dateEnd = $dateend;
            $customer->salaryEnd = $salaryend;

            $dao = new CustomerDAO($customer);
            $students = $dao->find();

            echo "<table>";

            echo "<tr>
                <th>First name</th>
                 <th>Last name</th>
                <th>Birth date</th>
                <th>Salary</th>
                 <th>Civic Number</th>
                 <th>Street</th>
                 <th>City</th>
                 <th>State</th>
                 <th>Postal Code</th>
                
                </tr>";
            foreach ($students as $v) {
                echo"<tr>";
                echo "<th>" . $v->firstName . "</th>";
                echo "<th>" . $v->lastName . "</th>";
                echo "<th>" . $v->birthDate . "</th>";
                echo "<th>" . $v->salary . "</th>";
                echo "<th>" . $v->civicNumber . "</th>";
                echo "<th>" . $v->street . "</th>";
                echo "<th>" . $v->city . "</th>";
                echo "<th>" . $v->state . "</th>";
                echo "<th>" . $v->postcode . "</th>";
                echo "</tr>";
            }
            echo "</table>";
        }

