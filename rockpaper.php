```php
<?php

$result = "";

if (isset($_POST['choice'])) {

    $player = $_POST['choice'];

    // Computer choices
    $choices = array("Rock", "Paper", "Scissors");

    // Computer randomly selects
    $computer = $choices[rand(0, 2)];

    // Check winner
    if ($player == $computer) {
        $result = "🤝 It's a Draw!";
    }
    elseif (
        ($player == "Rock" && $computer == "Scissors") ||
        ($player == "Paper" && $computer == "Rock") ||
        ($player == "Scissors" && $computer == "Paper")
    ) {
        $result = "🎉 You Win!";
    }
    else {
        $result = "😢 Computer Wins!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Rock Paper Scissors</title>

    <style>

        body {
            font-family: Arial;
            text-align: center;
            background-color: lightblue;
            padding-top: 80px;
        }

        .game {
            background-color: white;
            width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
        }

        h1 {
            color: darkblue;
        }

        button {
            padding: 15px 20px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 10px;
            border: none;
        }

        button:hover {
            background-color: lightgreen;
        }

        .result {
            font-size: 22px;
            font-weight: bold;
        }

    </style>

</head>

<body>

<div class="game">

    <h1>🎮 Rock Paper Scissors</h1>

    <p>Choose your option:</p>

    <form method="post">

        <button type="submit" name="choice" value="Rock">
            🪨 Rock
        </button>

        <button type="submit" name="choice" value="Paper">
            📄 Paper
        </button>

        <button type="submit" name="choice" value="Scissors">
            ✂️ Scissors
        </button>

    </form>

    <?php

    if (isset($_POST['choice'])) {

        echo "<p>You chose: <b>$player</b></p>";
        echo "<p>Computer chose: <b>$computer</b></p>";

        echo "<p class='result'>$result</p>";
    }

    ?>

</div>

</body>
</html>
```
