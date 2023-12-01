<?php
function selectDirectorsByProd($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT d.director_id,director_fname,director_lname,director_number,prod_name FROM `directors` d JOIN movies m on m.director_id=d.director_id JOIN prodComp p on m.prod_id=p.prod_id WHERE m.prod_id=?");
        $stmt->bind_param("i", $pid);
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
