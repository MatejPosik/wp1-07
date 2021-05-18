<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrační formulář</h1>
    <form action="submit.php" method="post">
    <label for="firstname">Příjmení:</label>
    <input type="text" name="firstname" id="firstname" placeholder="Jméno">
    <br>
    <label for="lastname">Jméno:</label>
    <input type="text" name="lastname" id="lastname" placeholder="Příjmení"> 
    <br>
    <label for="gender">Pohlaví:</label>
    <br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">muž</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">žena</label><br>
    <input type="radio" id="unknown" name="gender" value="unknown">
    <label for="unknown">neuvádět</label>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Email">
    <br>
    <label for="question">Vyber si kontrolní otázku:</label>
    <select id="question" name="question">
    <option value="mothername">Jaké bylo jméno vaší matky za svobodna?</option>
    <option value="parentscity">V jakém městě se vaší rodiče potkali</option>
    <option value="petname">Jméno vašeho prvního mazlíčka</option>
    </select>
    <br>
    <label for="answer">Napište svojí odpověď:</label>
    <input type="text" name="answer" id="answer" placeholder="Kontrolní odpověď">
    <br>
    <input type="submit" value="Register">
</body>
</html>