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

<a href="rps.php">Play Rock Paper Scissors</a>

<h2>Top 10 Daily Scores</h2>
<?php

$dailyScores = getTopDailyScores();

if(empty($dailyScores)) {
    echo "No daily scores to display";
} else {
    echo '<table>';
    echo '<tr><th>Username</th><th>Score</th></tr>';
    foreach ($dailyScores as $score) {
        echo '<tr>';
        echo '<td>' . htmlentities($score['username']) . '</td>';
        echo '<td>' . htmlentities($score['score']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>

<h2>Top 10 Weekly Scores</h2>
<?php

$weeklyScores = getTopWeeklyScores(10);

if(empty($weeklyScores)) {
    echo "No weekly scores to display";
} else {
    echo '<table>';
    echo '<tr><th>Username</th><th>Score</th></tr>';
    foreach ($weeklyScores as $score) {
        echo '<tr>';
        echo '<td>' . htmlentities($score['username']) . '</td>';
        echo '<td>' . htmlentities($score['score']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';   
}
?>

<h2>Top 10 Monthly Scores</h2>
<?php

$monthlyScores = getTopMonthlyScores(10);

if(empty($monthlyScores)) {
    echo "No monthly scores to display";
} else {
    echo '<table>';
    echo '<tr><th>Username</th><th>Score</th></tr>';
    foreach ($monthlyScores as $score) {
        echo '<tr>';
        echo '<td>' . htmlentities($score['username']) . '</td>';
        echo '<td>' . htmlentities($score['score']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>

<h2>Top 10 Lifetime Scores</h2>
<?php

$lifetimeScores = getTopScoresLifetime(10);

if(empty($lifetimeScores)) {
    echo "No lifetime scores to display";
} else {
    echo '<table>';
    echo '<tr><th>Username</th><th>Score</th></tr>';
    foreach ($lifetimeScores as $score) {
        echo '<tr>';
        echo '<td>' . htmlentities($score['username']) . '</td>';
        echo '<td>' . htmlentities($score['score']) . '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
?>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>