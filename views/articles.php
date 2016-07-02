<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mesozoic Blog | One Post</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <header class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Mesozoic/">Mesozoic Blog</a>
            </div>
        </header>
        <div class='container'>
            <?php foreach($articles as $article): ?>
            <div class='post'>
                <em class='post_date'><?=$article['date']?></em>
                <h3 class='post_title'>
                    <a href="article.php?id=<?=$article['id']?>">
                        <?=$article['title']?>
                    </a>
                </h3>
                <div class='post_content'><p><?=$article['content']?></p></div>
              </div>
            <?php endforeach; ?>
        </div>
        
        <footer class="navbar navbar-default navbar-fixed-bottom"> 
            <p class="container text-right">Mesozoic Blog <br> Copyright &copy; 2016</p>
        </footer>
    </body>
</html>

<!--
//https://yandex.ru/referats/
-->