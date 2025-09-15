<!DOCTYPE html>
<html lang="en">
<head>
	<title>operator logika</title>
</head>
<body>
	<?php
        $n = true;
        $i = false;

        echo "operator logika and";
        echo "<br>";
        echo "N && I : " . var_dump($n && $i);
        echo "<br>";
        echo "I && I : " . var_dump($i && $i);
        echo "<br>";
        echo "N && N : " . var_dump($n && $n);
        echo "<br>";
        echo "I && N : " . var_dump($i && $n);
        echo "<br>";
        echo "<br>";
        echo "operator logika or";
        echo "<br>";
        echo "N || I : " . var_dump($n || $i);
        echo "<br>";
        echo "I || I : " . var_dump($i || $i);
        echo "<br>";
        echo "N || N : " . var_dump($n || $n);
        echo "<br>";
        echo "I || N : " . var_dump($i || $n);
        echo "<br>";
        echo "<br>";
        echo "operator logika negasi";
        echo "<br>";
        echo ("negasi n :");var_dump(!$n);
        echo "<br>";
        echo ("negasi i :");var_dump(!$i)


    ?>

</body>
</html>