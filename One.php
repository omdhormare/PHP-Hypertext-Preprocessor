<?php
$array1 = ["a" => 5, "b" => 2, "c" => 8, "d" => 1];
$array2 = ["e" => 7, "f" => 3, "g" => 6, "h" => 4];

while (true) {
    echo "Menu:\n";
    echo "a) Sort the array by values in ascending order\n";
    echo "b) Sort the array by values in descending order\n";
    echo "c) Filter the odd elements from the array\n";
    echo "d) Sort different arrays at a glance\n";
    echo "e) Merge the given arrays\n";
    echo "f) Find Union, Intersection & Set Difference of two arrays\n";
    echo "x) Exit\n";

    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 'a':
            asort($array1);
            print_r($array1);
            break;
        case 'b':
            arsort($array1);
            print_r($array1);
            break;
        case 'c':
            $filteredArray = array_filter($array1, fn($value) => $value % 2 == 0);
            print_r($filteredArray);
            break;
        case 'd':
            ksort($array1);
            ksort($array2);
            print_r($array1);
            print_r($array2);
            break;
        case 'e':
            $mergedArray = $array1 + $array2;
            print_r($mergedArray);
            break;
        case 'f':
            $union = array_merge($array1, $array2);
            $intersection = array_intersect($array1, $array2);
            $difference = array_diff($array1, $array2);
            
            echo "Union: ";
            print_r($union);
            echo "Intersection: ";
            print_r($intersection);
            echo "Set Difference: ";
            print_r($difference);
            break;
        case 'x':
            exit(0);
        default:
            echo "Invalid choice. Please try again.\n";
    }
}

?>
