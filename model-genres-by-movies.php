<?php
function selectGenresByMovies($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.genre_id, genre_type, title, rated FROM `genre` g JOIN movies m on m.genre_id=g.genre_id WHERE m.movie_id=?");
        $stmt->bind_param("i", $mid);
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
