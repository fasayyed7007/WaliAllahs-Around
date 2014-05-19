<?PHP
$mysql_host = "mysql.hostinger.in";
$mysql_database = "u306529980_wa";
$mysql_user = "u306529980_wa";
$mysql_password = "Allahu7007";
$dbcnx = @mysql_connect($mysql_host, $mysql_user, $mysql_password);
if (!$dbcnx) 	{ exit('<p>Unable to connect to the ' . 'database server at this time.</p>'); 	}// Select the clist database
if (!@mysql_select_db($mysql_database)) 
	{ 	exit('<p>Unable to locate ' . 'database at this time.</p>'); }
	
$Name = $_POST['Name'];
$Address = $_POST['Address'];
$Chain = $_POST['Chain'];
$City = $_POST['City'];
$State = $_POST['State'];
$Country = $_POST['Country'];
$Longitude = $_POST['Longitude'];
$Latitude = $_POST['Latitude'];
$ursdate = $_POST['ursdate'];
$ursmonth = $_POST['ursmonth'];
$sname = $_POST['sname'];
$scontact = $_POST['scontact'];
$semail = $_POST['semail']  ;

// $query = "select * from wa where Inc='$Inc' "; // and Shift='$Shift' ";
// $result = mysql_query($query);
// if (!mysql_num_rows($result)) // result 0 means not exists then Insert.
// {
 //echo "Insert";
 $sql = " INSERT INTO wa (Name,Address,Chain,City,State,Country,Longitude,Latitude,ursdate,ursmonth,sname,scontact,semail) VALUES('$Name','$Address', '$Chain', '$City', '$State', '$Country', '$Longitude', '$Latitude','$ursdate','$ursmonth','$sname','$scontact','$semail') ";
 if (@mysql_query($sql))
 {	
	echo "<center><br><br><br> <h1> <font style='font-size: 16pt; font-weight: 700; text-decoration: underline' face='Cambria' color='#0000FF'> ADDED </font></h1>"; 
	echo "<br> <font style='font-size: 16pt; font-weight: 700' face='Cambria' color='#0000FF'> Thanks For Sparing Your Precious Time To Update The Information. </font></br></br>";
	echo "<form action=Index.html method=post>";
	echo "<input type=submit value=BACK style='font-family: Cambria; font-size: 14pt; color: #0000FF; letter-spacing: 2pt; font-weight:bold'>";
	echo "</form> ";
	exit();	 
 }
 else 
 {	
	echo '<p>Error Saving To DB : ' . mysql_error() . '</p>'; 
 }
// else // result not equal to 0 means exists then Update.
// {
 //echo "Update";
 // $sql = "UPDATE sd2adm SET Application='$Application' , Reason='$Reason' , Owner='$Owner', Lead='$Lead' , Escalated='$Escalated',  EscTo='$EscTo', Date='$Date' where Inc='$Inc' ";
 // if (@mysql_query($sql))
 // {	
    // echo "<center><br><br><br><h1> <p align='center'> <font style='font-size: 16pt; font-weight: 700; text-decoration: underline' face='Cambria' color='#0000FF'> UPDATED </font></p> </h1>"; 
// echo "<form action=add.php method=post> <input type=submit value=BACK style='font-family: Cambria; font-size: 14pt; color: #0000FF; letter-spacing: 2pt; font-weight:bold'> </form> ";
    // header("Location:Index.php");	
    // exit(); 
 // }
 // else 
 // {	echo '<p>Error Saving DB : ' . mysql_error() . '</p>'; }
// }
mysql_close($dbcnx);
?>
