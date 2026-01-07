<form method="POST">
    Total Belanja: <input type="number" name="total" required>
    <button name="hitung">Hitung Bayar</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $belanja = $_POST['total'];

    if ($belanja >= 100000) {
        $diskon = $belanja * 0.08;
    } else {
        $diskon = $belanja * 0.05;
    }

    $bayar = $belanja - $diskon;

    echo "Diskon: $diskon <br>";
    echo "Total Bayar: $bayar";
}
?>