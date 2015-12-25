<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>
  
  <link rel="stylesheet" href="css/chessboard-0.3.0.min.css" />
  
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/chessboard-0.3.0.min.js"></script>
  <script src="js/json3.min.js"></script>
  <script src="js/chess.min.js"></script>

</head>

<body>
<h1>Sample Chess Project</h1>
<h2>Working framework</h2>


<div id="board" style="width: 400px"></div>


<script>
var init = function() {
    var cfg = {
    draggable: true,
    position: 'start'
    };
    var board = ChessBoard('board', cfg);
    }; 
$(document).ready(init);
</script>


</body>
</html>
