<select class="form-select" id="did" name="did">
<?php
while ($directorItem=$directorList->fetch_assoc()){
    $selText="";
    if ($selectedDirector==$directorItem['director_id']){
        $selText= " selected";
    }
?>
    <option value="<?php echo $directorItem['director_id'];?>"<?=$selText?>><?php echo $directorItem['director_fname'];?> <?php echo $directorItem['director_lname'];?></option>
<?php
}
?>
</select>
