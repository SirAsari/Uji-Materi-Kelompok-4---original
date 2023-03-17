<form action="" method="post">
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="text" name="nis" placeholder="nis"><br>
    <input type="text" name="rayon" placeholder="rayon"><br>
    <input type="text" name="rombel" placeholder="rombel"><br>
    <input type="submit" name="submit">
</form>

<?php 
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $rayon = $_POST["rayon"];
    $rombel = $_POST["rombel"];

    echo "nama = ".$nama. "<br>";
    echo "nis = ".$nis . "<br>";
    echo "rayon = ".$rayon . "<br>";
    echo "rombel = ".$rombel;
}
?>