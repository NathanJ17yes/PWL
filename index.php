<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UltraBook</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=genre">Genre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=book">Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <?php
        $navigation = filter_input(INPUT_GET, 'menu');
        switch($navigation){
            case 'home':
                include_once 'home.php';
                break;
            case 'genre':
                include_once 'genre.php';
                break;
            case 'book': 
                include_once 'book.php';
                break; 
            
        }
        ?>
    </main>
</body>
