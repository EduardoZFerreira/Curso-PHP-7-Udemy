<?php 

    $conn = new PDO("sqlsrv:database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "Local@2019");

    $stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $row)
    {
        foreach ($row as $key => $value) {
            echo "<strong>" . $key . ": </strong>" . $value . "<br>";
        }

        echo "============================================ <br>";
    }

   