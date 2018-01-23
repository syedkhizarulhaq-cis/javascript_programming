<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attributes.</p>

<p>In this case JavaScript changes the src (source) attribute of an image.</p>

<button onclick="document.getElementById('myImage').src='Running-tiger.jpg'">Make the tiger run</button>

<img id="myImage" src="images.jpg" style="width:500px">

<button onclick="document.getElementById('myImage').src='images.jpg'">Make the tiger sit</button>

</body>
</html>
