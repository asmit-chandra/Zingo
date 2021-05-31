<!DOCTYPE html>
<html lang="en">

<head>
<script language="javascript" type="text/javascript">
    function buttonClick(){
    var url = document.getElementById("inputURL").value;
    window.location = 'https://zingo-s.herokuapp.com/' + url;
    }
    function buttonClick2(){
    window.location = 'https://zingo-s.herokuapp.com/';
    }
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZINGO - Sessions</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-container w3-card-4">
<a href="home.php">< Back</a>
<h2 class="w3-text-blue">Zingo - Sessions</h2>
<p>
<label class="w3-text-blue"><b>Session ID</b></label>
<input class="w3-input w3-border" name="first" type="text" id="inputURL"></p>
<p>
<input type="button" value="Join" class="w3-btn w3-blue" OnClick="buttonClick()"><div><button class="w3-btn w3-blue" OnClick="buttonClick2()">Create meeting</button></p></div>

</body>

</html>