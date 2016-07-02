<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mesozoic Blog | One Post</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'header.php'; ?>
        
        <div class='container'>
            
            <div class='post'>
                <em class='post_date'><?=$article['date']?></em>
                <h3 class='post_title'><?=$article['title']?></h3>
                <div class='post_content'><p><?=$article['content']?></p></div>
              </div>
        
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>