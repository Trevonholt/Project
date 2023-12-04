<?php
function selectDirectors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT d.director_fname, d.director_lname, COUNT(m.movie_id) as num_movies FROM `directors` d JOIN movies m on m.director_id=d.director_id group by d.director_id ");
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
