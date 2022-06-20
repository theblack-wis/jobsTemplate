<html dir="ltr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8"> 
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport"> 
    <title>Wadifa.com</title>
    <link href="css/style.css" rel="stylesheet">
	<script src="js/jquery.js"></script> 
    <style>
		.navbar{background-position: 0 0; background-color: #0A559F; border: 0; border-bottom: 1px solid #133783; -webkit-box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .52); color: #ffffff; font-size: 12px; font-weight: 800;}.navbar-brand{color: #ffffff; margin-top: 3px; padding-top: 5px;}body{padding-top: 50px; background-color: #fffff;}.content{padding: 50px 15px; text-align: center;}
    </style>
    </head>
<body onclick="">
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header"><br><center></center><br><br></div>
</div>
</nav>
<div class="container">
<div class="content">
<div id="loading" style="display:none;"><img src="img/loading.gif" style="width: 30px; height: 30px;" alt="Loading">
<p class="lead"><span style="font-size: 24pt;">مقابلة العمل</span></p>
</div>
<div id="questionOne">
<p><span style="font-size: 24pt;">أجب على جميع الاسئلة لاجتياز مقابلة العمل</span></p>
<hr><br>
<p class="lead"></p>
<p class="lead">هل يتجاوزم عمرك 21 سنة ؟</p>
<p class="lead"></p>
<span style="font-size: 24pt;"><button class="btn btn-success btn-lg btn-block" onclick="displayQuestion('questionTwo', 'questionOne');" type="button"> <strong>نعم</strong></button> <button class="btn btn-success btn-lg btn-block" onclick="displayQuestion('questionTwo', 'questionOne');" type="button"> <strong>لا</strong></button></span></div>
<div id="questionTwo" style="display:none;"><br>
<p class="lead">بلد الإقامة ؟</p>
<p class="lead"></p>
<button class="btn btn-success btn-lg btn-block" onclick="displayQuestion('questionThree', 'questionTwo');" type="button"> <strong>الإمارات العربية المتحدة</strong></button> <button class="btn btn-success btn-lg btn-block" onclick="displayQuestion('questionThree', 'questionTwo');" type="button"> <strong>المملكة العربية السعودية</strong></button></div>
<div id="questionThree" style="display:none;"><br>
<p class="lead">هل ستشعر بالغيرة من زميلك في العمل إذا كان أداؤه أفضل منك؟</p>
<p class="lead"></p>
<span style="font-size: 24pt;"><button class="btn btn-success btn-lg btn-block" onclick="displayQuestion('questionFour', 'questionThree');" type="button"> <strong>نعم</strong></button> <button class="btn btn-success btn-lg btn-block" onclick="displayQuestion('questionFour', 'questionThree');" type="button"> <strong>لا</strong></button></span></div>
<div id="questionFour" style="display:none;">
<p class="lead"><img src="img/checkmark.png" class="img-responsive" style="margin: 0 auto;" alt=""></p>
<p class="lead"><br><span style="font-size: 18pt;"><strong>تم قبولك مبدئيا</strong> </span></p>
<br><span style="font-size: 36pt;"><a style="text-decoration: none;" id="calert" class="btn btn-success btn-lg btn-block" href="https://smrturl.co/5651c1e">سجل رقمك للتواصل معك</a></span></div>
</div>
</div>
<p>
<script type="text/javascript">
function displayQuestion(e,t){document.getElementById(t).style.display="none",document.getElementById("loading").style.display="block",setTimeout(function(){toggle(e)},1e3)}function toggle(e){document.getElementById("loading").style.display="none",document.getElementById(e).style.display="block"}
    </script>
</p>

<!-- This landing page has been Generated using purelander.com -->
</body></html>
