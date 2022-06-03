<!DOCTYPE html>
<html>
<body>
<p>tes</p>
<?php

if (isset($_POST['baris'], $_POST['kolom'])) {
	$baris = htmlspecialchars($_POST['baris']);
	$kolom = htmlspecialchars($_POST['kolom']);
?>
<form action="/soal1/soal1c" method="post">
<?php
	// tampilkan $baris dan $kolom
    $key=0;
    $array=array();
    $values=array();
    for ($i=1;$i<=$baris;$i++){
        for ($j=1;$j<=$kolom;$j++){
            echo "$i.$j: ";
            $key++;
            array_push($values,"$key");
?>

            <input type="text" name="$data" placeholder="<?php echo $key." (default value)";?>"/>
            
<?php    
        array_push($array,"$i.$j");
        }
        echo "<br/><br/>";
    }

?>
    <div>
        <button  type="submit">Submit</button>
    </div>
</form>
<br/>

<?php  
        $i=0;
        foreach ($array as $data){
            echo "$data :";
            echo " $values[$i]";
            echo "<br/>";
            $i++;
         }
}
?>
</form>

</body>
</html>