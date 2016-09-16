<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='./css/reset.css'>
<link rel='stylesheet' type='text/css' href='./css/global.css'>

<script src='./js/jquery-1.12.3.min.js'></script>
<script src='./js/sign_in_out.js'></script>
<script src='./js/send_message.js'></script>
<script src='./js/display_chat.js'></script>

<title>Chatbox</title>
</head>
<body>
<div id='chatBox'>
	<section id='signInArea'>
		<form name='signIn' action='' onsubmit='return false'>
			<span id='invalidUsername'>Invalid Username</span>
			<input type='text' size='13px' name='username' id='username' text-align='left' placeholder='Enter Username' />
			<img src="https://d13yacurqjgara.cloudfront.net/users/185824/screenshots/2106331/message.gif" width="70px" height="70px">
			<input type='submit' id='userSignIn' value='SIGN IN' />
		</form>
	</section>
	<section id='chatArea'>

	</section>
	<section id='messageTypingArea'>
		<div id='signInToChat'>
			<button id='signInButton' type='button'>Sign In To Enter Chat</button>
		</div>
		<div id='chatEnabled'>
			<form name='newMessage' class='newMessage' action='' onsubmit='return false'>
				<section class='left'>
					<textarea name='newMessageContent' id='newMessageContent' placeholder='Enter your message here'></textarea>
				</section>
				<section class='right'>
					<input type='submit' id='newMessageSend' value='Send' />
				</section>
			</form>
		</div>
	</section>
</div>
</body>
</html>