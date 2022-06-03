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

    <h1>Search everyone who have the same hobi</h1>
    <p>go to <a href="/soal2/">home</a></p>
    <?php
    $search="";
    if(isset($_POST['SubmitButton'])){ //check if form was submitted
        $input = $_POST['inputText']; //get input text
        $search = $input;
      }    
    ?>
        <form action="" method="post">
            <input type="text" name="inputText"/>
            <input type="submit" name="SubmitButton"/>
        </form>
        <br/>
    <?php
    $sql = "SELECT nama, hobi FROM hobi JOIN person WHERE person_id = person.id AND hobi='$search'";
    $result = $conn->query($sql);

    if ($search == "") {
        echo "0 results";
    } else {
    ?>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Hobi</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <th><?php echo $row["nama"];?></th>
                <th><?php echo $row["hobi"];?></th>
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