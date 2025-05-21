<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 30%;
        }
        th, td, table{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        th{
            background-color: #0050ee;
            color: white;
        }
        tr:nth-child(even){
            background-color: #eeeeee;
        }
    </style>
</head>
<body>
    <?php
    $iphone = [
        ["Iphone 16 Pro", 2024, "A18 Pro"],
        ["Iphone 16", 2024, "A18"],
        ["Iphone 15 Pro", 2023, "A17 Bionic"],
        ["Iphone 15", 2023, "A16 Pro Bionic"],
        ["Iphone 14 Pro", 2022, "A16 Bionic"],
        ["Iphone 14", 2022, "A15 Bionic"],
        ["Iphone 13 Pro", 2021, "A15 Pro Bionic"],
        ["Iphone 13", 2021, "A15 Bionic"],
        ["Iphone 12 Pro", 2020, "A14 Pro"],
        ["Iphone 12", 2020, "A14 Bionic"],
    ];
    echo "<table>";
    echo "<thead><th>Model</th><th>Year</th><th>CPU</th></thead>";
    echo "<tbody>";
    for($row = 0; $row < count($iphone); $row++){
        echo "<tr>";
        for ($col = 0; $col < 3; $col++){
            echo "<td>".$iphone[$row][$col]."</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
?>
</body>
</html>
