<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<html>
<head>  
        <!--POPup-->
		<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/css/style.css">
				<link rel="stylesheet" type="text/css" href="https://osboha180suggestion.000webhostapp.com/css/style2.css">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="description" content ="My website">
	<title>Suggestions</title>
	
</head>
<body>
<div class="banner">
	<img class="img1" src="https://osboha180suggestion.000webhostapp.com/css/logo.png">
</div>

<div class="timer">
		<table class="countdownContainer">
				<tr class="info">
				<td id="days"></td>
				<td id="hours"></td>
				<td id="minutes"></td>
				<td id="seconds"></td>
			</tr>
			</table>
		</div>

<div class="HP"><div class="HPinsider">
<br>	

<div> <?php if(isset($response)){echo $response	;} ?>	<br></div>
<div class="container">

  <form method='post' action='https://osboha180suggestion.000webhostapp.com/'>

    <table id="table2" width="400px" style="margin-top:50; mragin-left:20px; color:#FFF">
			<tr>
				<td valign="top">
					<label for="name">اسم السفير</label>
				</td>
				</tr>
				<tr>
				<td>
				<input type="text" id="username" name="username" required placeholder="ضع اسمك..." style="margin-bottom:10px"/>
				</td>
			</tr>
			<tr>
			<td>
				<label for="catagory">فئة الكتاب</label>
			</td>
			</tr>
			<tr>
			<td>
		<select id="catagory" name="catagory" required>
		<option value="" selected disabled hidden>  ..اختر فئة الكتاب.. </option>
		<option value="religous">كتاب علوم دينية</option>
		<option value="self-improve"> كتاب تنمية بشرية</option>
		<option value="Intellectual ">كتاب علوم فكرية</option>
		<option value="Social ">كتاب علوم اجتماعية</option>
		<option value="Educational">كتاب علوم تربوية</option>
		<option value="literature">كتاب في الأدب</option>
		<option value="Economy">كتاب في علم الاقتصاد</option>
		<option value="Military">كتاب في العلوم العسكرية</option>
		<option value="Political "> كتاب في العلوم السياسية </option>
		<option value="history">كتاب في التاريخ </option>
		<option value="Biography">كتب السير الذاتية</option>
		<option value="Foreigner">كتاب أجنبي</option>
		<option value="else"> غير مصنفة </option>
		</select>
		</td>
		</tr>
		<tr>
		<td>
	 <label for="book">اسم الكتاب</label>
		</td>
		<tr>
		<td>
    <input type="text" id="book" name="book" required placeholder="ضع اسم الكتاب..">
		</td>
		</tr>
		<tr>
		<td>
	<label for="publish">دار النشر</label>
		</td>
		</tr>
		<tr>
		<td>
	<input type="text" id="publish" name="publish" required placeholder="اسم دار النشر..">
		</td>
		</tr>
		<tr>
		<td>
    <label for="subject" dir="rtl">نبذة عن الكتاب (اكثر من 75 كلمة)</label>
		</td>
		</tr>
		<tr>
		<td>
	<textarea name="subject" id="subject"  placeholder="ضع النبذة هنا..." style="height:200px" required ></textarea><span style="color:black" id="wordcounter"></span>
		</td>
		</tr>
		<tr>
		<td>
	 <label for="link">رابط الكتاب </label>
		</td>
		</tr>
		<tr>
		<td>
	<input type="text" id="link" name="link" placeholder="رابط الكتاب ان وجد..">
		</td>
		</tr>
		<tr>
		<td>
    <input name="submit" id="submit" type="submit" value="Submit"/>
		</td>
		</tr>

  </form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script> jQuery(document).ready(function($) {
  
  $('#subject').keyup(function() {
    var currentWordCount = $("#subject").val().match(/\S+/g).length;

    if (currentWordCount >= 75) {
	  $('#wordcounter').html( 'جيد' + '<br>');
    } else {
      $('#wordcounter').html( 75 - currentWordCount + ' تبقى ' + '<br>');
    }
  });
});

$( "form" ).submit(function(event) {
	 var currentWordCount = $("#subject").val().match(/\S+/g).length;
	if(currentWordCount < 75){
		alert("ضع اكثر من 75 كلمة");
		event.preventDefault();
	}
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="https://osboha180suggestion.000webhostapp.com/js/timer.js"></script>

</body>
</html>
