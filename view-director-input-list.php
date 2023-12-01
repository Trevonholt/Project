<select class="form-select" id="did" name="did">
<?php
while ($directorItem=$directorList->fetch_assoc()){
?>
    <option value="<?php echo $directorItem['director_id'];?>"><?php echo $directorItem['director_fname'];?> <?php echo $directorItem['director_lname'];?></option>
<?php
}
?>
</select>
