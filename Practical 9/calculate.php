<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$a = $data["num1"];
$b = $data["num2"];
$op = $data["operation"];

switch ($op) {
    case "add":
        $result = $a + $b;
        break;

    case "sub":
        $result = $a - $b;
        break;

    case "mul":
        $result = $a * $b;
        break;

    case "div":
        if ($b == 0) {
            $result = "Cannot divide by zero";
        } else {
            $result = $a / $b;
        }
        break;

    default:
        $result = "Invalid operation";
}

echo json_encode(["result" => $result]);
?>