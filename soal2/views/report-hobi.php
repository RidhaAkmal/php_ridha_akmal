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

    <h1>Table Report Hobi</h1>
    <p>go to <a href="/soal2/">home</a></p>
    <?php
    
    $sql = "SELECT hobi, count(hobi) AS jml FROM hobi GROUP BY hobi ORDER BY jml DESC";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "0 results";
    } else {
    ?>
    <table>
        <thead>
            <tr>
                <th>Hobi</th>
                <th>Jumlah Person</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <th><?php echo $row["hobi"];?></th>
                <th><?php echo $row["jml"];?></th>
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