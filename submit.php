<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vyplněná data</h1>
    <?php
    $firstname = filter_input(INPUT_POST, 'firstname');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $question = filter_input(INPUT_POST, 'question');
    $answer = filter_input(INPUT_POST, 'answer');
    $gender = filter_input(INPUT_POST, 'gender');

    echo "Email: $email";
    echo "</br>";
    echo "Password: $password";
    echo "</br>";
    echo "Fullname: $firstname $lastname";
    echo "</br>";
    echo "Control question: $question";
    echo "</br>";
    echo "Control answer: $answer";
    echo "</br>";
    echo "Gender: $gender";
?>
</body>
</html>