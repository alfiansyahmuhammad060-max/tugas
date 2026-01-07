<form method="POST">
    Tinggi (cm): <input type="number" name="t" required>
    Berat (kg): <input type="number" name="b" required>
    <button name="cek">Cek</button>
</form>

<?php
if (isset($_POST['cek'])) {
    $t = $_POST['t'];
    $b = $_POST['b'];

    if ($t - $b == 110) {
        echo "Ideal";
    } else {
        echo "Tidak Ideal";
    }
}
?>