<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Message</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Design.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <?php include "navbar.php"; ?>
        <div class="content">
            <br>
            <div>
                <form id="postForm" method="post" action="addMessage.php">
                    <label for="idName">Name</label>
                    <input type="text" id="idName" name="name" required/>
                    <br>
                    <label for="idDesc">Message:</label>
                    <br>
                    <textarea id="idDesc" name="message" rows="5" cols="30" required></textarea>	
                    <br>
                    <input type="submit" value="Post Item" />	
                </form>

            </div>
        </div>
    </body>
</html>