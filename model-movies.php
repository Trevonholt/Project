<?php
function selectMovies() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT movie_id, title, rated FROM `movies`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMovies($prod_id, $genre_id, $director_id, $actor_id, $title, $rated) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `movies` (`prod_id`, `genre_id`, `director_id`, `actor_id`, `title`,`rated`) VALUES (?, ?, ?,?,?,?)");
        $stmt->bind_param("iiiiss", $prod_id, $genre_id, $director_id, $actor_id, $title, $rated);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMovies($prod_id, $genre_id, $director_id, $actor_id, $title, $rated, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `movies` SET `prod_id`=?,`genre_id`=?,`director_id`=?,`actor_id`=?,`title`=?,`rated`=? WHERE movie_id=?");
        $stmt->bind_param("iiiissi", $prod_id, $genre_id, $director_id, $actor_id, $title, $rated, $mid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMovies($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from movies where movie_id=?");
        $stmt->bind_param("i", $mid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
