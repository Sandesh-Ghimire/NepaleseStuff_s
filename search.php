<?php

    include "functions/connect.php";

    function array_push_assoc($array, $key, $value) {
        $array[$key] = $value;
        return $array;
     }

    if (isset($_POST['query'])) {

        // Variables
        $search = $_POST['query'];
        $maxNumOfResult = 5;
        $result = "";

        // Query for getting similar string as search string
        $query = "SELECT * FROM `blogtable` WHERE `title` LIKE '".$search."%' OR `title` LIKE '%".$search."' OR `title` LIKE '%".$search."%' LIMIT $maxNumOfResult";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result .= "<li onclick='getBlogContent(".$row['blogId'].")' class='setCursorPointer'>".$row['title']."</li>";
        }

        echo $result;

        // echo "<center><hr style='border: 1px solid #bbb; width: 83%; margin: 0; padding: 0;'></center>";

    } else {
        echo "query nai set bhako xaina";
    }

?>