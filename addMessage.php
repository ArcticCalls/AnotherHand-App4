<?php

include "dbFunctions.php";

if (!empty($_POST['name']) && !empty($_POST['message'])) 
{

$itemName = $_POST['name'];
$itemDesc = $_POST['message'];

    
$sql = "INSERT INTO message (ID,Name,Message) 
            VALUES (NULL, '$itemName','$itemDesc')";

$resultQuery = mysqli_query($link, $sql) or die(mysqli_error($link));
   
    if ($resultQuery) {
        $message = "Message posted successfully.";
    } else {
        $message = "Message posted failed.";
    }
} else {
    $message = "All message details have to be provided";
    
    //TODO: Close the Database conection 
    mysqli_close($link);
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Design.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <title>Add Message</title>
    </head>
    <body>
        <?php include "navbar.php"; ?>
        
        <p>
            <?php echo $message; ?>
        </p>
    </body>
</html>