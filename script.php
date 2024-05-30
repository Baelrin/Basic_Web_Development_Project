<?php
// Create a variable and display it
$ученик = "Иванов Иван";
echo "Ученик: " . $ученик . "<br>";

// Create an array and display it
$ученики = ["Иванов", "Петров", "Сидоров"];
echo "Ученики: " . implode(", ", $ученики) . "<br>";

// If-else condition and display the result
$погода = "солнечно";
if ($погода == "солнечно") {
    echo "Идем гулять";
} else {
    echo "Остаемся дома";
}
?>