<html>
<head>
    <title>Cookies, pagina 2</title>
</head>
<body> <?php
if (isset($_COOKIE['contador'])){
    setcookie('contador', ($_COOKIE['contador']+1));
}
else{
    setcookie('contador',1);
}
echo "Você visitou essa página. ".$_COOKIE['contador']." Vezes";
?>
</body>
</html>