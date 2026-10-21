```php
<?php

// Generate a random number between 1 and 100
$number = rand(1, 100);

$message = "";

if (isset($_POST['guess'])) {

    $guess = $_POST['guess'];

    if ($guess == $number) {
        $message = "🎉 Correct! You guessed the number!";
    }
    elseif ($guess < $number) {
        $message = "📉 Too Low! Try again.";
    }
    else {
        $message = "📈 Too High! Try again.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number Game</title>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            background-color: lightblue;
            padding-top: 100px;
        }

        .game {
            background-color: white;
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
        }

        input {
            padding: 10px;
            width: 150px;
        }

        button {
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
        }

        h1 {
            color: darkblue;
        }
    </style>
</head>

<body>

<div class="game">

    <h1>🎯 Guess the Number</h1>

    <p>Guess a number between <b>1 and 100</b></p>

    <form method="post">

        <input type="number" name="guess"
               min="1" max="100"
               placeholder="Enter your guess"
               required>

        <br>

        <button type="submit">Guess</button>

    </form>

    <h3><?php echo $message; ?></h3>

</div>

</body>
</html>
```
