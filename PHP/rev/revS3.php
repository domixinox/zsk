<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
    </head>
    <body>

        <form action="" method="get" id="f1">
            <input type="text" name="surname">
            <input type="submit" value="submit" name="bttn">
        </form>

            <?php
                if(!empty($_GET['surname'])){
                    if(strlen(trim($_GET['surname'])) != 0){
                        echo "Surname: ", $_GET['surname'];
                    }else{
                        echo "Ya moron";
                    }
                }

            ?>
        
    </body>
</html>