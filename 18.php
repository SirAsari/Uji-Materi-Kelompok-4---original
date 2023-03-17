<form action="" method="post">
    <input type="text" name="user">
    <input type="text" name="password">
    <input type="submit" name="submit">
</form>
<?php 
    if(isset($_POST["submit"])){
        session_start();

        if(isset($_SESSION["username"])){
            echo $_SESSION["username"];
        }
        
        $conn = mysqli_connect("localhost", "root", "", "tugas");
        $username = $_POST["user"];
        $password = $_POST["password"];

        $query = "SELECT * FROM tugas";
        $test = mysqli_query($conn, $query);

        while ($data = mysqli_fetch_assoc($test)) { 
            $user = $data["email"];
            $pw = $data["password"];
        }

        if($password == $pw && $username == $user) {
            echo "Username dan password sesuai";
            $_SESSION["username"] = $username;
        }
    }
?>