
<?php

if (isset($_REQUEST["letter"])) {
    $letter = $_REQUEST["letter"];
    
    if ($letter !== "") {
        $customers = findEntries($letter);
        
        
       
        echo "<TABLE>";

        echo "<tr>
            <th>First Name</th>
            <th>Last Name</th>
            </tr>";

        foreach ($customers as $value) {
            echo"<tr>
                <td>$value->firstName</td>
                <td>$value->lastName</td>
                </tr>";
        }
        echo "</TABLE>";
        
        
        
    }

}

function findEntries($var) {
    try {
        require "Customer";
        $user = 'CS1133611';
        $password = 'alverion';
        $dataSourceName = 'mysql:host=waldo2.dawsoncollege.qc.ca;dbname=CS1133611';
        $pdo = new PDO($dataSourceName, $user, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT firstname,lastname from customer where lastname like ?");

        $var = $var . "%";
        $stmt->bindParam(1, $var);



        $customer = [];
        if ($stmt->execute()) {
            $i = 0;

            while ($row = $stmt->fetch()) {

                $customer[$i] = new Customer($row["firstname"], $row["lastname"]);
                $i++;
            }
        }

        return $customer;
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        unset($pdo);
    }
}
