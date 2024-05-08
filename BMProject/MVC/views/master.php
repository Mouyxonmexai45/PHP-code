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
        <header id="header">
            <!-- hearder here -->
            <?php
            require_once "layout/top.php"
            ?>
        </header>
        <main>
            <did class="container-fluid">
                <did class="row flex-nowrap">
                    <did class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <?php
                    require_once "layout/left.php"; 
                    ?>
                </did>
                <did id="" class="col py-3">
                    <?php
                    //require_once "./MVC/views/pages/" . $data["page"] . ".php";
                    echo "Mouy ngo";
                    ?>
                </did>
            </did>
        </main>
        <footer id="footer">
            <!-- place footer here -->
            <?php
            require_once "layout/bottom.php"
            ?>
        </footer>
    </body>
</html>