<select class="form-select" id="gid" name="gid">
<?php
while ($genreItem=$genreList->fetch_assoc()){
    $selText="";
    if ($selectedGenre==$genreItem['genre_id']){
        $selText= " selected";
    }
?>
    <option value="<?php echo $genreItem['genre_id'];?>"<?=$selText?>><?php echo $genreItem['genre_type'];?></option>
<?php
}
?>
</select>
