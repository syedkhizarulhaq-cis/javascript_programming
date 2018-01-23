<!DOCTYPE html>
<html>
<head>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Paragraph changed.";
}

function myfunction2(){

	document.getElementById("demo").innerHTML="A Paragraph";
}
</script>
</head>

<body>

<h2>JavaScript in Head</h2>

<p id="demo">A Paragraph.</p>

<button type="button" onclick="myFunction()">Try it</button>
<button type="button" onclick="myfunction2()">Go back</button>
</body>
</html> 
