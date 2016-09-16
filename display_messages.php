<?php
$cn = mysqli_connect('localhost','root','root');
if (!$cn) {
	echo 'Unable to connect to server';
}
if (!mysqli_select_db($cn, 'chat')) {
	echo 'Database not select';
}

$tenMinutesAgo = time() - 600;

$sql = "SELECT
	username, message, messageTime
		FROM
	chatHistory
		WHERE
	messageTime > " . $tenMinutesAgo . "
		ORDER BY
	messageTime";
$result = mysqli_query($cn, $sql) or 
	die(mysqli_error($cn));

while ($row = mysqli_fetch_assoc($result)) {
	$messageTime = date('g:ia', $row['messageTime']);

	echo '<p><strong>' . $row['username'] . '</strong>: <em>(' . $messageTime . ')</em> ' . $row['message'] . '</p>';
}














?>