$con = mysqli_connect('localhost', 'root', 'root',’db_OneStopService’);
$txtName = $_POST['fname'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phnumber'];
$txtMessage = $_POST['message'];
$sql = "INSERT INTO `Contact` ( `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ( '$fname', '$email', '$phnumber', '$message');"
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

?> 