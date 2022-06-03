<?php

//-----------------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//-----------------------------------------------------

if (isset($_POST['baris'], $_POST['kolom'])) {
	$baris = htmlspecialchars($_POST['baris']);
	$kolom = htmlspecialchars($_POST['kolom']);
?>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
<?php
	// tampilkan $baris dan $kolom
    $data=0;
    $array=array();
    $values=array();
    for ($i=1;$i<=$baris;$i++){
        for ($j=1;$j<=$kolom;$j++){
            echo "$i.$j: ";
            $data++;
            array_push($values,"$data");
?>

            <input type="text" name="$data" placeholder="<?php echo $data;?>"/>
            
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
        foreach ($array as $data){
            echo "$data :";
            echo "<br/>";
         }
}