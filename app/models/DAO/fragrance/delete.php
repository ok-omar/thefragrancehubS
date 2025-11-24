<?php

function deleteAllfragrances($pdo) {
    $stmt = $pdo->prepare("DELETE FROM fragrances");
    $stmt->execute();
}

?>