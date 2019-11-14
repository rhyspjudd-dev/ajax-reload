<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Live Reload</title>

    <link rel="stylesheet" href="main.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/ajax.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao|Roboto&display=swap" rel="stylesheet"> 

    <script>
    

    </script>

    </head>
<body>

<nav>
    <ul>
        <li><a href="#" data-target="home">Photo#1</a></li>
        <li>&#8711;</li>
        <li><a href="#" data-target="about">Photo#2</a></li>
    </ul>
</nav>
        <section>
            <!-- Content contianer for reload -->
            <div id="content">
                <?php include 'home.php'; ?>
            </div>
        </section>

</body>
</html>