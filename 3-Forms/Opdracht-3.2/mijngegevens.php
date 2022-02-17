<form>
<label for="name">wat is je lievelingskleur</label><br>
<select name="classes">
<?php
$klassen = array("yellow", "blue", "green", "purple", "red", "white", "black", "orange", "brown",);
foreach ($klassen as $klas){
    echo "<option value=$klas>$klas</option>";
}
?>
</select>
<input type="submit" value="Submit">
</form>
