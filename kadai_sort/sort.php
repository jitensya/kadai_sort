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

        function sort_2way($ans, $data) {
        
        if ($ans){
            echo "昇順にソートします。<br/>";
            sort($data);
        } else {
            
            echo "降順にソートします。<br/>";
            rsort($data);
        }    foreach($data as $value){
        
            echo $value. '<br/>';
        }
            }
        

        sort_2way(true,$data);
        sort_2way(false,$data);
        ?>
        

    </p>
</body>

</html>