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
            
            <h1>New Post</h1>
            
            <form method="post" action="index.php?action=add" role="form">
                <div class="form-group">
                    <label>Title</label>  
                    <input type="text" name="title" value="" class="form-control" autofocus required>                 
                </div>
                <div class="form-group">
                    <label>Content</label>   
                    <textarea name="content" class="form-control" required></textarea>                
                </div>
                <div class="form-group">
                    <label>Date</label> 
                    <input type="date" name="date" value="" class="form-control" required>                  
                </div>
                <input type="submit" value="Save" class="btn">
            </form>
        </div>
        
        <?php include 'footer.php'; ?>
    </body>
</html>