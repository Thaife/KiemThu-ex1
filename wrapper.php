<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border: 1px solid black;
        }
        td {
            width: 140px;
            margin: 20px 0;
        }
    </style>
</head>

<body>
<?php
require './RootEmployee.php';
//require './Employee.php';

    //Khởi tạo 4 nhân viên
    $employ_1 = new Employee("ADAMS", 35, 5.0);
    $employ_2 = new Employee("BAKER", 40, 5.0);
    $employ_3 = new Employee("CAIRNS", 44, 5.0);
    $employ_4 = new Employee("DONALD", 20, 6.0);

    $arr = array($employ_1, $employ_2, $employ_3, $employ_4);

    echo "<table>";
    echo "<tr><td>Test</td><td>Name</td><td>Hours</td><td>Rate</td><td>Gross</td><td>Tax</td><td>Net Pay</td></tr>";
    foreach ($arr as $key => $employ) {
        //Chạy phương thức tính toàn
        $employ->calculatePay();
        $testNumber = $key+1;
        echo "<tr><td>".$testNumber."</td>
        <td>".$employ->getName()."</td>
        <td>".$employ->getHourlyRate()."</td>
        <td>".$employ->getHourlyRate()."</td>
        <td>".$employ->getGrossPay()."</td>
        <td>".$employ->getTax()."</td>
        <td>".$employ->getNetPay()."</td></tr>";
    }

    echo "</table>";

?>
</body>

</html>