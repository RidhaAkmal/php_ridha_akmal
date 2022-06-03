<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border:1px solid black;
}

</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>

    <h1>Table Person</h1>
    <p>go to <a href="/soal2/">home</a></p>
    <?php
    
    $sql = "SELECT id, nama, alamat FROM person";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "0 results";
    } else {
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <th><?php echo $row['id'];?></th>
                <th><?php echo $row["nama"];?></th>
                <th><?php echo $row["alamat"];?></th>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php
    }
    $conn->close();
    ?>

</body>
</html>