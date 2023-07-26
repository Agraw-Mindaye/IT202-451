<?php
require_once(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);
$db = getDB();

$playerWins = 0;

if(is_logged_in()) {

    $user_id = get_user_id();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //update the score in the database if the form is submitted

        $latestScore = $_POST['latest_score']; 

        $insert_query = "INSERT INTO Scores (user_id, score, created, modified) VALUES ($user_id, $latestScore, NOW(), NOW())";
        $db->query($insert_query);

        $playerWins = 0; //reset player score
    
    }

    //get the user's latest score 
   
    $score_query = "SELECT score FROM Scores WHERE user_id = $user_id ORDER BY created DESC LIMIT 1";
    $result = $db->query($score_query);
    if ($result && $result->rowCount() > 0) {
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $playerWins = $row['score'];
    }
}
?>

<h1>Rock Paper Scissors</h1>

<button type="button" onclick="playGame('rock')">Rock</button>
<button type="button" onclick="playGame('paper')">Paper</button>
<button type="button" onclick="playGame('scissors')">Scissors</button>

<div id="result"></div>
<div id="player-score">Latest Score: <?php echo $playerWins; ?></div>

<form method="post">
    <input type="hidden" id="latest-score-input" name="latest_score" value="0">
</form>

<script>

    let wins = 0 //keep track of player's consecutive wins

    function playGame(playerSelection)  {

        const choices = ['rock', 'paper', 'scissors']
        const computerSelection = choices[Math.floor(Math.random() * choices.length)]

        let result

        if (playerSelection == 'rock' && computerSelection == 'scissors' 
            || playerSelection == 'paper' && computerSelection == 'rock' 
            || playerSelection == 'scissors' && computerSelection == 'paper')
        {
            wins++
            result = `You win! ${playerSelection} beats ${computerSelection}`
        }
        else if (playerSelection == computerSelection)
        {
            result = `You tied! You both picked ${playerSelection}`
        }   
        else 
        {
            result = `You lost :( ${computerSelection} beats ${playerSelection}`

            if(wins >= 1 ) { //submit the form if the user loses with at least 1 consecuitve win

                const latestScore = document.getElementById("latest-score-input");
                latestScore.value = wins;

                document.querySelector("form").submit();

            }
            wins = 0
        }

        document.getElementById("result").innerText = result
    }
</script>