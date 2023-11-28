<?php
function selectActors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT actor_id, actor_fname, actor_lname, actor_number FROM `actors` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
