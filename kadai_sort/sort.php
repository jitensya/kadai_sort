<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //$order = true;
        $data = [15, 4, 18, 23, 10];
        sort($data);
        echo "昇順にソートします。<br/>";

        foreach ($data as $value){
        echo $value. '<br/>';
        }

        rsort($data);
        echo "降順にソートします。<br/>";
        foreach($data as $value){
        
        echo $value. '<br/>';
        }
        ?>
        

    </p>
</body>

</html>