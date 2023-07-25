<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
?>

<h1>Rock Paper Scissors</h1>
<div class="game-cointainer">
    <button class='rock'>Rock</button>
    <button class='paper'>Paper</button>
    <button class='scissors'>Scissors</button>
</div>
<div class="result"></div>

<script>

const rockButton = document.querySelector('.rock')
const paperButton = document.querySelector('.paper')
const scissorsButton = document.querySelector('.scissors')
const resultDiv = document.querySelector('.result')

let playerWins = 0;

function getComputerChoice() {
    let choices = ['rock', 'paper', 'scissors']
    return choices[Math.floor(Math.random() * choices.length)]
}

function play(playerSelection, computerSelection)  {

    const p = document.createElement('p')

    if (playerSelection == 'rock' && computerSelection == 'scissors' 
        || playerSelection == 'paper' && computerSelection == 'rock' 
        || playerSelection == 'scissors' && computerSelection == 'paper')
    {
        playerWins++
        p.innerText = `You won! ${playerSelection} beats ${computerSelection}`
        resultDiv.appendChild(p)
    }
    else if (playerSelection == 'rock' && computerSelection == 'paper' 
        || playerSelection == 'scissors' && computerSelection == 'rock' 
        || playerSelection == 'paper' && computerSelection == 'scissors')
    {
        p.innerText = `You lost :( ${computerSelection} beats ${playerSelection}`
        resultDiv.appendChild(p)
    }   
    else if (playerSelection == computerSelection)
    {
        p.innerText = `You tied! You both picked ${playerSelection}`
        resultDiv.appendChild(p)
    }
}


rockButton.addEventListener('click', () => {
    resultDiv.innerHTML = ""
    const computerSelection = getComputerChoice()
    const playerSelection = 'rock'
    play(playerSelection, computerSelection)
})

paperButton.addEventListener('click', () => {
    resultDiv.innerHTML = ""
    const computerSelection = getComputerChoice()
    const playerSelection = 'paper'
    play(playerSelection, computerSelection)
})

scissorsButton.addEventListener('click', () => {
    resultDiv.innerHTML = ""
    const computerSelection = getComputerChoice()
    const playerSelection = 'scissors'
    play(playerSelection, computerSelection)
})

</script>