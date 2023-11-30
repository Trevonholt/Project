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

function insertProds($pName, $state, $city) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `prodComp` (`prod_name`, `state`, `city`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $pName, $state, $city);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateProds($pName, $state, $city, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `prodComp` set `prod_name`=?, `state`=?, `city`=? where prod_id=?");
        $stmt->bind_param("sssi", $pName, $state, $city, $pid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteDirectors($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from prodComp where prod_id=?");
        $stmt->bind_param("i", $pid);
        $success=$stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
