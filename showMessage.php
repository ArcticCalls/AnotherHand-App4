<?php
include("dbFunctions.php");
$messages = array();
$query = "SELECT * FROM message";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $messages[] = $row;
}
mysqli_close($link);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Show Message</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Design.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <?php include "navbar.php"; ?>
        <div class="content">
            <div id="messageScroll">
                <marquee behavior="scroll" direction="up" scrollamount="2"><?php
                    for ($i = 0; $i < count($messages); $i++) {
                        ?>
                        <p>"<?php echo $messages[$i]['Name']; ?>"><?php echo $messages[$i]['Message']; ?></p>                 
                    <?php } ?> </marquee>
            </div>
            <br>
            <div id="content">
                <p>Here are some of the messages that gives thanks to the front-line and healthcare workers.</p>
            </div>
        </div>
    </body>
</html>