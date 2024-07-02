<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=sanko', 'root', 'root');

    $grade = 3;
    
    $stmt = $db->prepare("DELETE FROM student WHERE grade = ?;");
    $stmt->bindParam(1, $grade, PDO::PARAM_INT);

    $res = $stmt->execute();
    $db = null;
} catch (PDOExeption $e){
    echo $e->getMessage();
}
?>