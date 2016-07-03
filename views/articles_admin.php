<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Mesozoic</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>        
        <?php include 'header_admin.php'; ?>
        
        <div class='container'>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>id</th>
                      <th>Date</th>
                      <th>Title</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($articles as $article): ?>
                    <tr>
                      <td><?=$article['id']?></td>
                      <td><?=$article['date']?></td>
                      <td><a href="../article.php?id=<?=$article['id']?>"><?=$article['title']?></a></td>
                      <td><a href="index.php?action=edit&id=<?=$article['id']?>"
                       class="glyphicon glyphicon-edit" aria-hidden="true"></a></td>
                      <td><a href="index.php?action=delete&id=<?=$article['id']?>"
                       class="glyphicon glyphicon-trash" aria-hidden="true"></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>