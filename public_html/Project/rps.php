<?php
require_once(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);
$db = getDB();

$playerWins = 0;

if(is_logged_in()) {

    $user_id = get_user_id();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $score_increase = $_POST['score_increase'];

        $score_query = "SELECT score FROM Scores WHERE user_id = $user_id";
        $result = $db->query($score_query);


        if ($result && $result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $current_score = $row['score'];
            $new_score = $current_score + $score_increase;
            $update_query = "UPDATE Scores SET score = $new_score WHERE user_id = $user_id";
            $db->query($update_query);
        } else {

            $insert_query = "INSERT INTO Scores (user_id, score, created, modified) VALUES ($user_id, $score_increase, NOW(), NOW())";
            $db->query($insert_query);
        }

    }

    $get_score_query = "SELECT score FROM Scores WHERE user_id = $user_id";
    $result = $db->query($get_score_query);
    if ($result && $result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $playerWins = $row['score'];
    }
}
?>

<h1>Rock Paper Scissors</h1>
<div class="game-container">
    <form method="post">
        <button type="button" onclick="playGame('rock')">Rock</button>
        <button type="button" onclick="playGame('paper')">Paper</button>
        <button type="button" onclick="playGame('scissors')">Scissors</button>
        <input type="hidden" id="score-increase-input" name="score_increase" value="0">
    </form>
    <div id="result"></div>
    <div id="player-score">Wins: <?php echo $playerWins; ?></div>
</div>


<script>

    function playGame(playerSelection)  {

        const choices = ['rock', 'paper', 'scissors']
        const computerSelection = choices[Math.floor(Math.random() * choices.length)]

        let result

        if (playerSelection == 'rock' && computerSelection == 'scissors' 
            || playerSelection == 'paper' && computerSelection == 'rock' 
            || playerSelection == 'scissors' && computerSelection == 'paper')
        {
            result = `You win! ${playerSelection} beats ${computerSelection}`
            updateScore(1)
        }
        else if (playerSelection == computerSelection)
        {
            result = `You tied! You both picked ${playerSelection}`
        }   
        else 
        {
            result = `You lost :( ${computerSelection} beats ${playerSelection}`
        }

        document.getElementById("result").innerText = result
    }

    function updateScore(scoreIncrease) {
        const scoreIncreaseInput = document.getElementById("score-increase-input");
        scoreIncreaseInput.value = scoreIncrease;
       
        document.querySelector("form").submit();
    }


</script>