<?php

 require './includes/common.php';

if(isset($_REQUEST["term"])){
    
    $sql = "SELECT name FROM shooz_name_list WHERE name LIKE ? LIMIT 10";
    
    if($stmt = mysqli_prepare($con, $sql)){
 
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
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        }
    }
     
    
    mysqli_stmt_close($stmt);
}
 
mysqli_close($con);
?>
