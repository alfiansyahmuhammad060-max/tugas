<form method="POST">
    <input type="number" name="n" placeholder="Masukkan angka" required>
    <button name="cek">Cek</button>
</form>

<?php
if (isset($_POST['cek'])) {
    $n = $_POST['n'];
    if ($n % 3 == 0) {
        echo "$n adalah kelipatan 3";
    } else {
        echo "$n bukan kelipatan 3";
    }
}
?>
