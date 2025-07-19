
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $parcels = $_POST["parcels"];
    $location = $_POST["location"];
    $payment = $_POST["payment"];
    $whatsapp = "+966578217652";

    $message = "New Biryani Order:%0AName: $name%0APhone: $phone%0AParcels: $parcels%0ALocation: $location%0APayment: $payment";

    $log = "orders.txt";
    $entry = "Name: $name | Phone: $phone | Parcels: $parcels | Location: $location | Payment: $payment\n";
    file_put_contents($log, $entry, FILE_APPEND);

    header("Location: https://wa.me/" . $whatsapp . "?text=" . urlencode($message));
    exit();
}
?>
