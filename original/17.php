<form action="" method="post">
    <input type="submit" name="submit" value="hapus">
</form>

<?php 
    if(isset($_POST["submit"])){
    $id = 1;
    $conn = mysqli_connect("localhost", "root", "", "barang");
    mysqli_query($conn, "DELETE FROM barang WHERE id = '$id'");

    if(mysqli_affected_rows($conn) > 0) {
        echo "berhasil menghapus";
    };
    }
?>

<?php 
$conn = mysqli_connect("localhost", "root", "", "barang");
$query = "SELECT * FROM barang";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) { 
        echo $data["kursi"] . "<br>";
        echo $data["meja"] . "<br>";
        echo $data["spanduk"] . "<br>";
        echo $data["pintu"];
    }
}
?>