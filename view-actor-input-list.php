<select class="form-select" id="aid" name="aid">
<?php
while ($actorItem=$actorList->fetch_assoc()){
?>
    <option value="<?php echo $actorItem['actor_id'];?>"><?php echo $actorItem['actor_fname'];?> <?php echo $actorItem['actor_lname'];?></option>
<?php
}
?>
</select>
