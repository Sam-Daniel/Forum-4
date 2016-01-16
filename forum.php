<?php
//Connect to DB..
$dbhost = "orion.csl.mtu.edu";
$dbuser = 'grader';
$dbpass = 'grader';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('apmitche');

$tbl_name = "forum_question"; // Table name
$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";

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

// Fill out the info for the tables
while ( $rows = mysql_fetch_array ( $result ) ) {
	?>
<tr>
		<td><? echo $rows['id']; ?></td>
		<td><a
			href="view_topic.php?id=<? echo $rows['id']; ?>"><? echo $rows['topic']; ?></a><BR></td>
		<td align="center"><? echo $rows['view']; ?></td>
		<td align="center"><? echo $rows['reply']; ?></td>
		<td align="center"><? echo $rows['datetime']; ?></td>
	</tr>

<?php
	// Exit looping and close connection
}
mysql_close ($conn);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="maincss.css">
</head>

<body>
	
	
	<tr>
		<td colspan="5" align="right"><a
			href="create_topic.php"><strong>Create New Topic</strong> </a></td>
	</tr>
</table>

</body>

</html>
