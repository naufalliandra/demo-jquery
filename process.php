<?php
$data = array();
$numberInput = $_POST['numberInput'];
$textInput = $_POST['textInput'];

for ($i = 0; $i < $numberInput; $i++) {
    $data[] = $textInput . ' ' . ($i + 1);
}

header('Content-Type: application/json');
echo json_encode($data);
?>
