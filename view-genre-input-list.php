<select class="form-select" id="gid" name="gid">
<?php
while ($genreItem=$genreList->fetch_assoc()){
?>
    <option value="<?php echo $genreItem['genre_id'];?>"><?php echo $genreItem['genre_type'];?></option>
<?php
}
?>
</select>
