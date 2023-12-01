<select class="form-select" id="pid" name="pid">
<?php
while ($prodItem=$prodlist->fetch_assoc()){
?>
    <option value="<?php echo $prodItem['prod_id'];?>"><?php echo $prodItem['prod_name'];?></option>
<?php
}
?>
</select>
