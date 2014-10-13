<!DOCTYPE HTML>
<html>
	<head>
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<style>
			body {
				background: #FFFFFF;
			}
			#inputContainer {
				background: #EDEDED;
				width: 70%;
				margin: auto;<!
				--margin-top: 50%;-->
				border-radius: 5px;
				max-width: 400px;;
			}
			#languageContainer {
				background: #CCCCCC;
				width: 65px;
				border-radius: 2px;
				padding-top: 2px;
				padding-bottom: 2px;
				text-align: center;
			}
			#languageSelectContainer {
				width: 140px;
				margin: auto;
			}
			h1 {
				color: #545454;
				text-align: center;
			}
			#textAreaContainer {
				padding: auto;
				text-align: center;
			}
			#translateButton {
				text-align: center;
				width: 140px;
				margin: auto;
				background: #008CFF;
				width: 75px;
				border-radius: 2px;
				padding-top: 2px;
				padding-bottom: 2px;
				color: #FFFFFF;
			}
			#translateButton:hover {
				background: #007DE3;
			}
		</style>
	</head>
	<body>
		<div id="inputContainer">
			<h1>Pig-Latin Translater</h1>
			<div id="languageSelectContainer">
				<div id="languageContainer" style="float: left;">
					<strong>Piglatin</strong>
				</div>
				<div id="languageContainer" style="float: right;">
					<strong>English</strong>
				</div>
			</div>
			<div id="textAreaContainer">
				<textarea id="toTranslate" ROWS=6></textarea>
				<textarea id="translated" ROWS=6></textarea>
			</div>
			<div id="translateButton">
				<strong>Translate</strong>
			</div>
			&nbsp;
		</div>

		<script>
			var wordCounter = 0;
			$('#translateButton').click(function() {
				var toTranslate = $('#toTranslate').val();
				var toTranslateArray = toTranslate.split(" ");
				var toTranslateFirstLetter = [];
				while (toTranslateArray.length > wordCounter) {
					toTranslateFirstLetter[wordCounter] = toTranslateArray[wordCounter].charAt(0);
					toTranslateArray[wordCounter] = toTranslateArray[wordCounter].substring(1, toTranslateArray[wordCounter].length);//
					toTranslateArray[wordCounter] = toTranslateArray[wordCounter].concat(toTranslateFirstLetter[wordCounter]);
					toTranslateArray[wordCounter] = toTranslateArray[wordCounter].concat('ay');
					toTranslateArray[wordCounter] = toTranslateArray[wordCounter].slice(0);
					//$("#translated").html(toTranslateArray[wordCounter]);
					//alert(toTranslateArray[wordCounter].concat(toTranslateFirstLetter[wordCounter]));
					wordCounter = wordCounter + 1;
				}
				
				$("#translated").html(toTranslateArray.join(' '));
				
				if (toTranslateArray.length == wordCounter) {
					wordCounter = 0;
				}

				//alert(toTranslate);
			});
		</script>
	</body>
</html>