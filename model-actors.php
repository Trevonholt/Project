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

function insertActors($aFname, $aLname, $aNum) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `actors` (`actor_fname`, `actor_lname`, `actor_number`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $aFname, $aLname, $aNum);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateActors($aFname, $aLname, $aNum, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `actors` set `actor_fname`=?, `actor_lname`=?, `actor_number`=? where actor_id=?");
        $stmt->bind_param("sssi", $aFname, $aLname, $aNum, $aid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteActors($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from actors where actor_id=?");
        $stmt->bind_param("i", $aid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
