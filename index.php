<?php include 'header.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles/login.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>

<h2> Velkommen til DK-Foods </h2>
<form action='formular.php' method="post">
    Brugernavn: <input type="text" id="Brugernavn"><br>
    Kode: <input type="text" id="kode"><br>
    <input type="submit">
 </form>

<body>

<?php include 'footer.php'; ?>