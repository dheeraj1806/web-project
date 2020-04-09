<?php

include('db.php');

if(isset($_REQUEST["term"])){
    
    $sql = "SELECT name FROM shooz_name_list WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
 
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        $param_term = $_REQUEST["term"] . '%';
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["name"] . "</p>";
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    
    mysqli_stmt_close($stmt);
}
 
mysqli_close($link);
?>
