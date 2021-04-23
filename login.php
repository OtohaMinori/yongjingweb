<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./login.css" type="text/css" />
    <title>LoginSystem</title>
</head>

<body>
    <h1 class="warning">警告！</h1>
    <h2 class="announcement">請確保沒人在嘗試竊取密碼！</h2>
    <form action="./loginsystem.php" method="post">
        <pre>
            <label for="Account">Account:&#9;<input type="text" name="Account" id="" size="16" maxlength="12"><br></label>
            <label for="Password">Password:&#9;<input type="password" name="Password" id="" size="16" maxlength="12"><br></label>
        </pre>
        <input type="submit" name="Submit" value="Login System">
    </form>
</body>

</html>