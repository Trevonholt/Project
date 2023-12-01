<select class="form-select" id="pid" name="pid">
<?php
while ($prodItem=$prodlist->fetch_assoc()){
    $selText="";
    if ($selectedProd==$prodItem['prod_id']){
        $selText= " selected";
    }
?>
    <option value="<?php echo $prodItem['prod_id'];?>"<?=$selText?>><?php echo $prodItem['prod_name'];?></option>
<?php
}
?>
</select>
