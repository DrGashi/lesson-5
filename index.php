<?php
    $dogs = [
        ["Golden Retriever", "Germany", 13],
        ["Husky", "Japan", 16],
        ["Samoyed", "Russia", 10],
    ];
    for($i = 0; $i < count($dogs); $i++){
        echo "Breed: ".$dogs[$i][0].", Origin: ".$dogs[$i][1].", Age: ".$dogs[$i][2]."<br>";
    };
    for($row = 0; $row < count($dogs); $row++){
        echo "<p><b>Dog $row </b></p>";
        echo "<ul>";
        for($col = 0; $col < count($dogs); $col++){
            echo "<li>".$dogs[$row][$col]."</li>";
        };
        echo "</ul>";
    };
?>