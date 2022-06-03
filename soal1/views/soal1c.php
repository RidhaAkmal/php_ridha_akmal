<!DOCTYPE html>
<html>
<body>
<p>tes</p>
<?php


if (isset($_POST['values'])) {
	$values = $_POST['values'];
?>


<?php  
        foreach ($values as $data){
            echo "$data";
            echo "<br/>";
         }
}
?>
</form>

</body>
</html>