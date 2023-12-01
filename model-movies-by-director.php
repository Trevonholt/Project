<?php
function selectMoviesByDirector($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT d.director_id, director_fname,director_lname, title, rated FROM `directors` d JOIN movies m on m.director_id=d.director_id WHERE m.director_id=?");
        $stmt->bind_param("i", $tid);
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
