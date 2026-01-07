<form method="POST">
    MTK: <input type="number" name="m" required><br>
    B. Indo: <input type="number" name="i" required><br>
    B. Inggris: <input type="number" name="t" required><br>
    <button name="cek">Cek Kelulusan</button>
</form>

<?php
if (isset($_POST['cek'])) {
    $rata = ($_POST['m'] + $_POST['i'] + $_POST['t']) / 3;

    if ($rata >= 70) {
        echo "Lulus (Rata-rata: $rata)";
    } else {
        echo "Tidak Lulus (Rata-rata: $rata)";
    }
}
?>