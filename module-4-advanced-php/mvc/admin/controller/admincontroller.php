
<?php 
require_once("model/adminmodel.php");
class admincontroller extends adminmodel 
{
public function __construct()
{
parent:: __construct();
// admin login logic 
if(isset($_POST["admin_login"]))
{
$email=$_POST["email"];
$password=$_POST["password"];
$chk=$this->admin_login('tbl_admin',$email,$password);
if($chk)
{
echo "<script>
alert('You are Logged In as admin successfully')
window.location='./dashboard'
</script>";
}
else 
{

echo "<script>
alert('Your email and password are wrong try again')
window.location='./'
</script>";
}
}
// manage all contact us
$managecontact=$this->selectJoin1('tbl_contactus','tbl_subject','subjectname','subjectid');
// count all manage contact data in dashboard
$managecount=$this->selectCount('tbl_contactus','contactid');
// load a template or view or routing 
if(isset($_SERVER["PATH_INFO"]))
{
switch($_SERVER["PATH_INFO"])
{
case '/':
require_once("index.php");
require_once("login.php");
break;

case '/dashboard':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("dashboard.php");
require_once("footer.php");
break;


case '/managecontact':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("managecontact.php");
require_once("footer.php");
break;

default:
require_once("index.php");
require_once("404.php");
break;
}
}

}

}
$obj=new admincontroller;
?>
