<!DOCTYPE html>
<html>
    <head>
        <title>SIMPLE CALCULATOR</title>
    </head>
    <?php
        $first = $_POST['first'];
        $second = $_POST['second'];
        $operation = $_POST['operation'];
        $result='';
        if(is_numeric($first)&& is_numeric($second))
        {
            switch($operation)
            {
           case"Add":
               $result= $first + $second;
               break;
           case"Multiply":
               $result= $first * $second;
               break;
            }
        }
    ?>
    <body>
        <h1>Simple Calculator</h1>
        <form action=" " method="post" id="form">
            <p>
                <input type="number" name="first" id="first" required="required" value="<?php echo "$first";?>" />
                <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second" id="second" required="required" value="<?php echo "$second";?>" />
                <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo "$result";?>" />
                <b>Result</b>
            </p>
            <input type="submit" name="operation" value="Add"/>
            <input type="submit" name="operation" value="Multiply"/>
        </form>
    </body>
</html>

