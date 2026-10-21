tictac.php```php
<?php
session_start();

// Start a new game
if (!isset($_SESSION['board']) || isset($_POST['restart'])) {
    $_SESSION['board'] = array("", "", "", "", "", "", "", "");
    $_SESSION['turn'] = "X";
    $_SESSION['message'] = "Player X's Turn";
}

// When a player clicks a box
if (isset($_POST['position'])) {

    $position = $_POST['position'];

    // Check if the box is empty
    if ($_SESSION['board'][$position] == "") {

        $_SESSION['board'][$position] = $_SESSION['turn'];

        // Check winning combinations
        $winning = array(
            array(0, 1, 2),
            array(3, 4, 5),
            array(6, 7, 8),
            array(0, 3, 6),
            array(1, 4, 7),
            array(2, 5, 8),
            array(0, 4, 8),
            array(2, 4, 6)
        );

        $winner = "";

        foreach ($winning as $combination) {

            if (
                $_SESSION['board'][$combination[0]] != "" &&
                $_SESSION['board'][$combination[0]] ==
                $_SESSION['board'][$combination[1]] &&
                $_SESSION['board'][$combination[1]] ==
                $_SESSION['board'][$combination[2]]
            ) {
                $winner = $_SESSION['turn'];
                break;
            }
        }

        // Winner found
        if ($winner != "") {
            $_SESSION['message'] = "🎉 Player $winner Wins!";
        }

        // Check draw
        elseif (!in_array("", $_SESSION['board'])) {
            $_SESSION['message'] = "🤝 It's a Draw!";
        }

        // Change player
        else {
            $_SESSION['turn'] =
                ($_SESSION['turn'] == "X") ? "O" : "X";

            $_SESSION['message'] =
                "Player " . $_SESSION['turn'] . "'s Turn";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Tic Tac Toe</title>

    <style>

        body {
            font-family: Arial;
            text-align: center;
            background-color: lightblue;
            padding-top: 50px;
        }

        .game {
            width: 350px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
        }

        h1 {
            color: darkblue;
        }

        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            gap: 5px;
            justify-content: center;
            margin: 20px auto;
        }

        .cell {
            width: 100px;
            height: 100px;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            border: 2px solid black;
            background-color: white;
        }

        .cell:hover {
            background-color: lightgreen;
        }

        .restart {
            padding: 10px 25px;
            font-size: 16px;
            background-color: orange;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

    </style>

</head>

<body>

<div class="game">

    <h1>⭕ Tic-Tac-Toe ❌</h1>

    <h2>
        <?php echo $_SESSION['message']; ?>
    </h2>

    <div class="board">

        <?php

        for ($i = 0; $i < 9; $i++) {

            echo "<form method='post'>";

            echo "<button
                    class='cell'
                    type='submit'
                    name='position'
                    value='$i'>";

            echo $_SESSION['board'][$i];

            echo "</button>";

            echo "</form>";
        }

        ?>

    </div>

    <form method="post">

        <button
            class="restart"
            type="submit"
            name="restart">

            🔄 Restart Game

        </button>

    </form>

</div>

</body>

</html>
```
