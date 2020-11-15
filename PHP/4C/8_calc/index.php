<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
    </head>
    <body>

        <h1>Calc it</h1>
        
        <div class="ff">
            <form action="" method="POST">
                <input type="number" name="x" id="" placeholder="x" step="0.01">

                <select name="operator" id="">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

                <input type="number" name="y" id="" placeholder="y" step="0.01">
                <input type="submit" name="submit" id="" value="=">
                <input type="number" name="result" id="res" step="0.01" disabled>
            </form>

                <?php
                
                    if(isset($_POST['submit'])){
                        if(!empty($_POST['x']) || $_POST['x'] == "0" && !empty($_POST['y']) || $_POST['y'] == "0" && isset($_POST['operator'])){
                            require_once 'calc-fun.php';
                            $result = 0;

                            switch($_POST['operator']){
                                case "+":
                                    echo add($_POST['x'], $_POST['y']);
                                break;

                                case "-":
                                    echo sub($_POST['x'], $_POST['y']);
                                break;

                                case "*":
                                    echo mul($_POST['x'], $_POST['y']);
                                break;

                                case "/":
                                    echo div($_POST['x'], $_POST['y']);
                                break;

                                default:
                                    echo "<hr>Choose operator";
                                break;
                            }
                            ?>
                            <script>
                                document.querySelector("#res").value = <?php echo $result ?>;
                            </script>
                            <?php
                        }else{
                            echo "<hr>All inputs!";
                        }
                    }

                ?>
        </div>

    </body>
</html>