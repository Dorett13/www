<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $temperature = isset($_GET['temperature']) ? $_GET['temperature'] : 'N/A';
    $humidity = isset($_GET['humidity']) ? $_GET['humidity'] : 'N/A';

    echo "Nhiệt độ: $temperature °C, Độ ẩm: $humidity %";
} else {
    echo "Không nhận được yêu cầu GET.";
}
?>
