<!DOCTYPE html>
<html>
<head>
	<title>Event Management</title>
	<link rel="stylesheet" type="text/css" href="../css/createevent.css">
</head>
<body>

<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="messenger.php">Messege</a></li>
	<li><a href="createevent.php">Create Event</a></li>
	<li><a href="allevent.php">All Event</a></li>
	<li><a href="allevent.php">Sign Out</a></li>

	<li class="about"><a href="aboutus.php">About Us</a></li>
</ul>

<div class="mainbody">
<h1>Create Event</h1>	

<form method="post" action="" name="createeventform" class="createeventform">
<table>
<tr>
	<td>Event Name: </td>
	<td><input type="text" name="eventName" required></td>	
</tr>
<tr>
	<td>Event Date: </label></td>
	<td><input type="date" name="eventdate" required></td>	
</tr>
<tr>
	<td>Location: </td>
	<td><input type="text" name="location" required></td>
</tr>
<tr>
	<td>Event Description: </td>
	<td><input type="text" name="description" required></td>	
</tr>
<tr>
	<td></td>
	<td><button type="submit" value="submit" name="Create Event">Create Event</button></td>	
</tr>

</table>
</form>



	</div>

<footer><?php echo "&copy" .date('Y')."All right reserved" ?></footer>
</body>
</html>
