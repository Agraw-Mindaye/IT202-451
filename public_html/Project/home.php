<?php
require(__DIR__ . "/../../partials/nav.php");
require(__DIR__ . "/scoreboards.php");
?>
<h1>Home</h1>
<?php

if (is_logged_in(true)) {
    //comment this out if you don't want to see the session variables
    error_log("Session data: " . var_export($_SESSION, true));
}
?>

<div class="game-details">
    <div class="game-description">
        
        <p>This is a single player game of Rock Paper Scissors between you and a computer</p>

        <p>You will have an option to choose rock, paper, or scissors.<br>
        The computer will randomly choose between those three options and the <br>
        winner will be decided based on your choice and the computer's.</p>

        <h2>***Game Rules***</h2>
        <h4>Rock beats scissors</h4>
        <h4>Paper beats rock</h4>
        <h4>Scissors beats paper</h4>
        
    </div>
    <div class="game-link">
        <a href="rps.php">Play Game</a>
    </div>
</div>


<div class="scoreboard-container">
    <div class="scoreboard-column">
        <h2>Top 10 Daily Scores</h2>
        <?php
        $dailyScores = getTopDailyScores(10);
        if(empty($dailyScores)) {
            echo "No daily scores to display";
        } else {
        ?>
            <table class="scoreboard-table">
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Timestamp</th>
                </tr>
                <?php foreach ($dailyScores as $score) { ?>
                    <tr>
                        <td><?php echo htmlentities($score['username']); ?></td>
                        <td><?php echo htmlentities($score['score']); ?></td>
                        <td><?php echo htmlentities($score['created']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php
        }
        ?>
    </div>

    <div class="scoreboard-column">
        <h2>Top 10 Weekly Scores</h2>
        <?php
        $weeklyScores = getTopWeeklyScores(10);
        if(empty($weeklyScores)) {
            echo "No weekly scores to display";
        } else {
        ?>
            <table class="scoreboard-table">
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Timestamp</th>
                </tr>
                <?php foreach ($weeklyScores as $score) { ?>
                    <tr>
                        <td><?php echo htmlentities($score['username']); ?></td>
                        <td><?php echo htmlentities($score['score']); ?></td>
                        <td><?php echo htmlentities($score['created']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php
        }
        ?>
    </div>
</div>

<div class="scoreboard-container">
    <div class="scoreboard-column">
        <h2>Top 10 Monthly Scores</h2>
        <?php
        $monthlyScores = getTopMonthlyScores(10);
        if(empty($monthlyScores)) {
            echo "No monthly scores to display";
        } else {
        ?>
            <table class="scoreboard-table">
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Timestamp</th>
                </tr>
                <?php foreach ($monthlyScores as $score) { ?>
                    <tr>
                        <td><?php echo htmlentities($score['username']); ?></td>
                        <td><?php echo htmlentities($score['score']); ?></td>
                        <td><?php echo htmlentities($score['created']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php
        }
        ?>
    </div>

    <div class="scoreboard-column">
        <h2>Top 10 Lifetime Scores</h2>
        <?php
        $lifetimeScores = getTopScoresLifetime(10);
        if(empty($lifetimeScores)) {
            echo "No lifetime scores to display";
        } else {
        ?>
            <table class="scoreboard-table">
                <tr>
                    <th>Username</th>
                    <th>Score</th>
                    <th>Timestamp</th>
                </tr>
                <?php foreach ($lifetimeScores as $score) { ?>
                    <tr>
                        <td><?php echo htmlentities($score['username']); ?></td>
                        <td><?php echo htmlentities($score['score']); ?></td>
                        <td><?php echo htmlentities($score['created']); ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php
        }
        ?>
    </div>
</div>


<?php
require(__DIR__ . "/../../partials/flash.php");
?>