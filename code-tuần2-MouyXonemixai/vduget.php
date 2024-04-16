<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
    <form action="welcome_get.php" method="get" 
    Name: <input type="text" name="name="neme"><br>
    E-mail: <input type="text" name="email" 
    <input type="submit"> 
</form>
    Welcome <?php echo $_GET["name"]; ?><br> 
    Your email address is: <?php echo $_GET["email"]; ?>
    </body>
</html>
