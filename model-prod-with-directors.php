<?php
function selectProds() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT prod_id, prod_name, state, city FROM `prodComp` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectDirectorsByProd($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT m.title, m.rated, d.director_id,director_fname,director_lname,director_number,prod_name, movie_id,m.genre_id,m.prod_id,m.actor_id FROM `directors` d JOIN movies m on m.director_id=d.director_id JOIN prodComp p on m.prod_id=p.prod_id WHERE m.prod_id=?");
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

function selectProdsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT prod_id, prod_name FROM `prodComp` order by prod_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectGenreForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT genre_id, genre_type FROM `genre` order by genre_type");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectDirectorForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT director_id, director_fname, director_lname FROM `directors` order by director_fname");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectActorForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT actor_id, actor_fname, actor_lname FROM `actors` order by actor_fname");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertMov($pid, $gid, $did, $aid, $title, $rated) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `movies` (`prod_id`, `genre_id`, `director_id`, `actor_id`, `title`, `rated`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("iiiiss", $pid, $gid, $did, $aid, $title, $rated);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMov($pid, $gid, $did, $aid, $title, $rated, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `movies` set `prod_id` = ?, `genre_id` = ?, `director_id` = ?, `actor_id` = ?, `title` = ?, `rated` = ? where movie_id = ?");
        $stmt->bind_param("iiiissi", $pid, $gid, $did, $aid, $title, $rated, $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteMov($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from movies where movie_id=?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
