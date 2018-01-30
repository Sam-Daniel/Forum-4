<?php
$host = "orion.csl.mtu.edu"; // Host name
$username = "grader"; // Mysql username
$password = "grader"; // Mysql password
$db_name = "apmitche"; // Database name
$tbl_name = "forum_question"; // Table name

$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result = mysql_query ( $sql );
?>
<div align="center">
	<img src="welcome.png"></img>
</div>
<br />
<br />
<br />
<table width="90%" border="0" align="center" cellpadding="3"
	cellspacing="1">
	<tr>
		<th width="6%" align="center" class="header"><strong>#</strong>
		
		</td>
		<th width="53%" align="center" class="header"><strong>Topic</strong>
		
		</td>
		<th width="15%" align="center" class="header"><strong>Views</strong>
		
		</td>
		<th width="13%" align="center" class="header"><strong>Replies</strong>
		
		</td>
		<th width="13%" align="center" class="header"><strong>Date/Time</strong>
		
		</td>
	</tr>

<?php

// Start looping table row
while ( $rows = mysql_fetch_array ( $result ) ) {
	?>
<tr>
		<td bgcolor="#FFFFFF"><? echo $rows['id']; ?></td>
		<td bgcolor="#FFFFFF"><a
			href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
		<td align="center" bgcolor="#FFFFFF"><? echo $rows['view']; ?></td>
		<td align="center" bgcolor="#FFFFFF"><? echo $rows['reply']; ?></td>
		<td align="center" bgcolor="#FFFFFF"><? echo $rows['datetime']; ?></td>
	</tr>

<?php
	// Exit looping and close connection
}
mysql_close ();
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="maincss.css">
</head>

<body>
	
	
	<tr>
		<td colspan="5" align="right" bgcolor="#E6E6E6"><a
			href="create_topic.php"><strong>Create New Topic</strong> </a></td>
	</tr>
</table>

</body>

</html>
