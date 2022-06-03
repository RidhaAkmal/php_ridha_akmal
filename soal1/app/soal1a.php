<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <div>
        <label for="name">Inputkan Jumlah baris:</label>
        <input type="text" name="baris" placeholder="Baris" />
    </div>
    <br/>
    <div>
        <label for="name">Inputkan Jumlah kolom:</label>
        <input type="text" name="kolom" placeholder="Kolom" />
    </div>
    <br/>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>