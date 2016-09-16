$(function() {

var scrollHeightOfChatBox = document.getElementById('chatArea').scrollHeight;

setInterval(function() {
	$('#chatArea').load('display_messages.php');
	$('#chatArea').scrollTop( scrollHeightOfChatBox );
}, 500);

});