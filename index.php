<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h3>Scrivi un testo</h3>
   <form method="GET" action="./censoring.php">
    <textarea name="paragraph" id="" cols="30" rows="10"></textarea>
    <br>
    <br>
    <label for="censored"> <h3>Parola da censurare</h3></label>
    <input type="text" id="censored" name="censoredWord">
   </form> 
</body>
</html>