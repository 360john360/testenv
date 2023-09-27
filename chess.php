<!DOCTYPE html>
<html>
<head>
    <title>Chess Game</title>
    <style>
        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
            gap: 2px;
        }

        .square {
            width: 50px;
            height: 50px;
            background-color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .piece {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #333;
            cursor: pointer;
        }

        .white-piece {
            background-color: #f2f2f2;
        }

        .black-piece {
            background-color: #333;
        }

        .king::before { content: "♚"; }
        .queen::before { content: "♛"; }
        .rook::before { content: "♜"; }
        .bishop::before { content: "♝"; }
        .knight::before { content: "♞"; }
        .pawn::before { content: "♟"; }
    </style>
</head>
<body>
    <div class="chessboard">
        <!-- Chessboard squares and pieces will be generated dynamically with JavaScript -->
    </div>
    <script>
        const chessboard = document.querySelector('.chessboard');
        const isEven = (num) => num % 2 === 0;
        let currentPlayer = 'white';

        function createChessboard() {
            for (let row = 0; row < 8; row++) {
                for (let col = 0; col < 8; col++) {
                    const square = document.createElement('div');
                    square.className = `square ${isEven(row + col) ? 'white' : 'black'}`;
                    square.dataset.row = row;
                    square.dataset.col = col;

                    // Add pieces to the board (customize for your initial setup)
                    if (row === 0 || row === 7) {
                        square.innerHTML = getPieceInitial(row, col);
                    } else if (row === 1 || row === 6) {
                        square.innerHTML = '<div class="piece pawn"></div>';
                    }

                    square.addEventListener('click', handleSquareClick);
                    chessboard.appendChild(square);
                }
            }
        }

        function getPieceInitial(row, col) {
            const piecesOrder = ['rook', 'knight', 'bishop', 'queen', 'king', 'bishop', 'knight', 'rook'];
            const pieceClass = piecesOrder[col];
            const pieceColor = row === 0 ? 'white' : 'black';
            return `<div class="piece ${pieceClass} ${pieceColor}-piece"></div>`;
        }

        function handleSquareClick(event) {
            const clickedSquare = event.currentTarget;
            const clickedPiece = clickedSquare.querySelector('.piece');

            if (clickedPiece && clickedPiece.classList.contains(currentPlayer + '-piece')) {
                const legalMoves = getLegalMoves(clickedSquare);
                highlightLegalMoves(legalMoves);
            } else if (clickedSquare.dataset.legal === 'true') {
                movePiece(clickedSquare);
            }
        }

        function getLegalMoves(square) {
            const legalMoves = [];
            const row = parseInt(square.dataset.row);
            const col = parseInt(square.dataset.col);

            // Implement your chess rules for legal moves here
            // For simplicity, let's allow any move for demonstration
            for (let r = 0; r < 8; r++) {
                for (let c = 0; c < 8; c++) {
                    legalMoves.push({ row: r, col: c });
                }
            }

            return legalMoves;
        }

        function highlightLegalMoves(moves) {
            document.querySelectorAll('.square').forEach(square => square.dataset.legal = 'false');
            moves.forEach(move => {
                const targetSquare = document.querySelector(`.square[data-row="${move.row}"][data-col="${move.col}"]`);
                if (targetSquare) {
                    targetSquare.dataset.legal = 'true';
                }
            });
        }

        function movePiece(targetSquare) {
            const sourceSquare = document.querySelector('[data-legal="true"]');
            const piece = sourceSquare.querySelector('.piece');
            targetSquare.innerHTML = piece.outerHTML;
            sourceSquare.innerHTML = '';
            currentPlayer = currentPlayer === 'white' ? 'black' : 'white';
        }

        // Initialize the chessboard
        createChessboard();
    </script>
</body>
</html>
