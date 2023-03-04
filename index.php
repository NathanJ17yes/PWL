<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UltraBook Center</title>
    <link rel="stylesheet" href = "index.css">
</head>

<body>
    <nav id= "navbar">
        <ul>
            <li><a href="?menu=home">home</a></li>
            <li><a href="?menu=genre">genre</a></li>
            <li><a href="?menu=book">book</a></li>
        </ul>
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
