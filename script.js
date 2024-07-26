const COLORS_ARRAY = [
    'blue',
    'cyan',
    'grey',
    'green',
    'magenta',
    'orange',
    'red',
    'white',
    'yellow',
    'black',
    'lightgreen',
    'navyblue',
    'lightyellow',
];

let correctColor;

function startGame() {
    // Show the game elements
    document.getElementById('gameTitle').classList.add('hidden');
    document.getElementById('startGameButton').classList.add('hidden');
    document.getElementById('colorInfo').classList.remove('hidden');
    document.getElementById('colorBox').classList.remove('hidden');
    document.getElementById('colorInput').classList.remove('hidden');
    document.getElementById('submitColorButton').classList.remove('hidden');
    document.getElementById('resultMessage').classList.remove('hidden');
    document.getElementById('newGameButton').classList.remove('hidden');
    document.getElementById('x').classList.remove('hidden');
    // Display available colors
    document.getElementById('availableColors').textContent = COLORS_ARRAY.join(', ');

    // Start the game logic
    correctColor = getRandomColor();
    document.getElementById('colorBox').style.backgroundColor = correctColor;
    document.getElementById('resultMessage').textContent = '';
    document.getElementById('colorInput').value = '';
}

function checkGuess() {
    const userGuess = document.getElementById('colorInput').value.toLowerCase();
    if (userGuess === correctColor) {
        document.getElementById('resultMessage').textContent = 'Hurray! You got the correct answer.';
    } else {
        document.getElementById('resultMessage').textContent = `Wrong guess! Hint: ${getHint(userGuess)}`;
    }
}

function getHint(userGuess) {
    if (!COLORS_ARRAY.includes(userGuess)) {
        return "Sorry, I don't recognize your color.";
    } else if (userGuess < correctColor) {
        return 'Hint: Your color is alphabetically higher than mine.';
    } else {
        return 'Hint: Your color is alphabetically lower than mine.';
    }
}

function getRandomColor() {
    const randomIndex = Math.floor(Math.random() * COLORS_ARRAY.length);
    return COLORS_ARRAY[randomIndex];
}
