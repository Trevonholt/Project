<?php
function selectDirectors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT director_id, director_fname, director_lname, director_number FROM `directors` ");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertDirectors($dFname, $dLname, $dNum) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `directors` (`director_fname`, `director_lname`, `director_number`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $dFname, $dLname, $dNum);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateDirectors($dFname, $dLname, $dNum, $did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `directors` set `director_fname`=?, `director_lname`=?, `director_number`=? where director_id=?");
        $stmt->bind_param("sssi", $dFname, $dLname, $dNum, $did);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteDirectors($did) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from directors where director_id=?");
        $stmt->bind_param("i", $did);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
