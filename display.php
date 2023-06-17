<?php
include 'php/connectdb.php';
if(!empty($_GET['id'])){
    

    
    //Get image data from database
    $result = $conn->query("SELECT img FROM articles WHERE a_id = {$_GET['id']}");
    
    if($result->num_rows > 0){
        $rpw = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $row['img']; 
    }else{
        //do nothing
    }
}
?>