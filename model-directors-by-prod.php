<?php
function selectDirectorsByProd($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT d.director_id,director_fname,director_lname,director_number FROM `directors` d JOIN movies m on m.director_id=d.director_id WHERE m.prod_id=?");
        $stmt->bind_param("i", $did);
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
