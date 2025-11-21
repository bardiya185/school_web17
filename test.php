<?php


$password = 'bardiya';
$hashed_password = password_hash($password,$password);
echo $hashed_password;
if (password_verify($password, '1')) {
    echo 'Password is valid!';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="get">
        <input type="text" id="text1" name="text">
        <button type="submit">send</button>
    </form>
    <script>

        var s = '<?php echo $hashed_password; ?>'
        document.textContent = s;

    </script>
</body>
</html>