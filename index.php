<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    
   <form method="GET" action="censoring.php">
    <label for="paragraph"><h3>Scrivi un testo</h3></label>
    <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
    <br>
    <br>
    <label for="censored"> <h3>Parola da censurare</h3></label>
    <input type="text" id="censored" name="censored">
    <button>Invia</button>
   </form> 
</body>
</html>