<?php
$associativeArray = [
    "apple" => "fruit",
    "banana" => "fruit",
    "carrot" => "vegetable",
    "orange" => "fruit",
    "broccoli" => "vegetable"
];

function displayArray($array) {
    foreach ($array as $key => $value) {
        echo "$key: $value\n";
    }
}

function displaySize($array) {
    echo "Array size: " . count($array) . "\n";
}

function deleteElement($array, $index) {
    if (array_key_exists($index, $array)) {
        unset($array[$index]);
        echo "Element at index $index deleted.\n";
    } else {
        echo "Index $index not found in array.\n";
    }
    return $array;
}

function reverseKeyValuePairs($array) {
    $reversedArray = array_flip($array);
    return $reversedArray;
}

function traverseRandomOrder($array) {
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) {
        echo "$key: {$array[$key]}\n";
    }
}

while (true) {
    echo "Menu:\n";
    echo "1. Display elements with keys\n";
    echo "2. Display array size\n";
    echo "3. Delete element from index\n";
    echo "4. Reverse key-value pairs\n";
    echo "5. Traverse in random order\n";
    echo "6. Exit\n";
    
    $choice = readline("Enter your choice: ");
    
    switch ($choice) {
        case 1:
            displayArray($associativeArray);
            break;
            
        case 2:
            displaySize($associativeArray);
            break;
            
        case 3:
            $index = readline("Enter the index to delete: ");
            $associativeArray = deleteElement($associativeArray, $index);
            break;
            
        case 4:
            $reversedArray = reverseKeyValuePairs($associativeArray);
            displayArray($reversedArray);
            break;
            
        case 5:
            traverseRandomOrder($associativeArray);
            break;
            
        case 6:
            echo "Exiting the program. Goodbye!\n";
            exit;
            
        default:
            echo "Invalid choice. Please enter a valid option.\n";
            break;
    }
}
?>
