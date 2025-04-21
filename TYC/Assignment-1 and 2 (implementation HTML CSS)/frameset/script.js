let btnRef = document.querySelectorAll(".button-option");
let popupRef = document.querySelector(".popup");
let newgameBtn = document.getElementById("new-game");
let restartBtn = document.getElementById("restart");
let msgRef = document.getElementById("message");

// Winning pattern array
let winningPattern = [
    [0, 1, 2],
    [0, 3, 6],
    [2, 5, 8],
    [6, 7, 8],
    [3, 4, 5],
    [1, 4, 7],
    [0, 4, 8],
    [2, 4, 6],
];

// Player 'X' plays first
let xTurn = true;
let count = 0;

// Disable all buttons
const disableButtons = () => {
    btnRef.forEach((element) => (element.disabled = true));
    // Enable popup
    popupRef.classList.remove("hide");
};

// Enable all buttons (for new game and restart)
const enableButtons = () => {
    btnRef.forEach((element) => {
        element.innerText = "";
        element.disabled = false;
    });
    // Hide popup
    popupRef.classList.add("hide");
};

// New game and restart functionality
newgameBtn.addEventListener("click", () => {
    count = 0;
    enableButtons();
});
restartBtn.addEventListener("click", () => {
    count = 0;
    enableButtons();
});

// This function is executed when a player wins
const winFunction = (letter) => {
    disableButtons();
    msgRef.innerText = `'${letter}' wins!`;
};

// Win logic
const winChecker = () => {
    // Loop through all win patterns
    for (let i of winningPattern) {
        let [element1, element2, element3] = [
            btnRef[i[0]].innerText,
            btnRef[i[1]].innerText,
            btnRef[i[2]].innerText,
        ];

        // Check if the elements are filled
        if (element1 !== "" && element2 !== "" && element3 !== "") {
            // If all 3 buttons have the same value, that player wins
            if (element1 === element2 && element2 === element3) {
                winFunction(element1);
                return;
            }
        }
    }

    // Check for a draw
    if (count === 9) {
        msgRef.innerText = "It's a draw!";
        disableButtons();
    }
};

// Display X/O on click
btnRef.forEach((element) => {
    element.addEventListener("click", () => {
        if (xTurn) {
            xTurn = false;
            element.innerText = "X";
        } else {
            xTurn = true;
            element.innerText = "O";
        }
        element.disabled = true;
        count += 1;
        winChecker();
    });
});
