<!DOCTYPE html>
<html lang="en" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
  <title>HackHive - Coder</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="codemirror-5.58.3/lib/codemirror.js"></script>
  <link rel="stylesheet" href="codemirror-5.58.3/lib/codemirror.css">
  <link rel="stylesheet" href="codemirror-5.58.3/theme/dracula.css">
  <script src="codemirror-5.58.3/mode/clike/clike.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/compile.js"></script>
      <script type="text/javascript" src="js/jquery.form.js"></script>
  <script src="codemirror-5.58.3/mode/python/python.js"></script>
  <script src="codemirror-5.58.3/mode/php/php.js"></script>
  <script src="codemirror-5.58.3/addon/edit/closebrackets.js"></script>
  <script src="codemirror-5.58.3/addon/edit/matchbrackets.js"></script>
</head>
<body>
	<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">Welcome To the Quiz</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="#" style="font-size: 20px;">Time Left: 10:20:00</a>
    </li>
  </ul>
</nav> -->
	<div class="Container" style="background-color: #EEEEEE; margin-top:50px;">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-1 col-sm-1"></div>
			<div class="col-xl-8 col-lg-8 col-md-10 col-sm-10 col-xs-12">
				<form action="compile.php" method="post" id="form">
        <label style="margin-top: 10px;">Code</label>
        <select class="form-control form-control-sm" onchange="edittype()" id="selecter" name="language">
          <option value="c">C</option>
          <option value="cpp">C++</option>
          <option value="python3.2">Python 3</option>
        </select>
        <label style="margin-top: 10px;">Code</label>
				<textarea id ="editor" name="code"></textarea>
        <span id="errorCode"></span>
        <label style="margin-top: 10px;">Insert Input (if Required)</label>
        <input class="form-control" type="text" name="input" id="input">
        <button type="submit" id="submit" class="btn btn-success" style="margin-top: 10px; padding: 4px 20px;">Run</button>
			</form>
      <label style="margin-top: 10px;">Output:</label>
      <span id="output"></span>
      
			</div>
			<div class="col-xl-2 col-lg-2 col-md-1 col-sm-1"></div>
		</div>
	</div>
  
</div>
</body>
<script type="text/javascript">
var editor = CodeMirror.fromTextArea(document.getElementById('editor'),{
    mode: "clike",
    theme: "dracula",
    autoCloseBrackets: true,
    matchBrackets: true,
    lineNumbers: true
  });
function edittype(){
  var a = document.getElementById("selecter").selectedIndex;
  if(a == 0){
    editor.setOption("mode", "clike");
  }else if(a == 1){
    editor.setOption("mode", "clike");
  }else if(a == 2){
    editor.setOption("mode", "python");
  }
}
//javascript
var code;

</script>