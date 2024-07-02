<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=sanko', 'root', 'root');
    $stmt = $db->prepare("SELECT * FROM student");
    $res = $stmt->execute();
    if($res){
        $all = $stmt->fetchAll();
        foreach ($all as $loop) {
            echo $loop["id"];
            echo $loop["name"];
            echo $loop["grade"]."<br>";
        }
    }
    $db = null;
} catch (PDOExeption $e){
    echo $e->getMessage();
}
?>