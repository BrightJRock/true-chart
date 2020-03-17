<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dv";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE data (
    month VARCHAR(255) NOT NULL,
    timsetamp VARCHAR(255) NOT NULL,
    date_1 VARCHAR(255) NOT NULL,
    type_1 VARCHAR(255) NOT NULL,
    job VARCHAR(255) NOT NULL,
    area_shop VARCHAR(255) NOT NULL,
    shop_area VARCHAR(255) NOT NULL,
    type_swap VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    satisfaction_in_this_repair VARCHAR(255) NOT NULL,
    as_expected VARCHAR(255) NOT NULL,
    satisfaction_with_the_repair_time time VARCHAR(255) NOT NULL,
    expected_period_of_repair VARCHAR(255) NOT NULL,
    avg_expected_period_of_repair VARCHAR(255) NOT NULL,
    would_like_to_recommend VARCHAR(255) NOT NULL,
    pride_to_the_product_true_house_brand VARCHAR(255) NOT NULL,
    suggestion VARCHAR(255) NOT NULL,
    complain VARCHAR(255) NOT NULL,
    user VARCHAR(255) NOT NULL,
    check_status VARCHAR(255) NOT NULL,
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table data created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>