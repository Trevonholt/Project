<select class="form-select" id="aid" name="aid">
<?php
while ($actorItem=$actorList->fetch_assoc()){
     $selText="";
    if ($selectedActor==$actorItem['actor_id']){
        $selText= " selected";
    }
?>
    <option value="<?php echo $actorItem['actor_id'];?>"<?=$selText?>><?php echo $actorItem['actor_fname'];?> <?php echo $actorItem['actor_lname'];?></option>
<?php
}
?>
</select>
