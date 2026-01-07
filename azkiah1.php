<form method="POST">
    P: <input type="number" name="p" required>
    L: <input type="number" name="l" required>
    <button name="cek">Cek</button>
</form>

<?php
if (isset($_POST['cek'])) {
    $p = $_POST['p'];
    $l = $_POST['l'];

    if ($p == $l) {
        echo "Bujur Sangkar";
    } else {
        echo "Persegi Panjang";
    }
}
?>