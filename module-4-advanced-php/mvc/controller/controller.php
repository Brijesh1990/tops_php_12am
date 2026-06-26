
<?php 
require_once("model/model.php");
class controller extends model 
{
public function __construct()
{
parent:: __construct();
// create an logic for add data in contact 
if(isset($_POST["send"]))
{
date_default_timezone_set("Asia/Calcutta");
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$sub=$_POST["subject"];
$msg=$_POST["message"];
$added_date_time=date("d/m/Y H:i:s a");
$data=array("fullname"=>$fullname,"email"=>$email,"phone"=>$phone,"message"=>$msg,"added_date_time"=>$added_date_time,"subjectid"=>$sub);
$chk=$this->insertAllData('tbl_contactus',$data);
if($chk)
{
  
 echo "<div class='bg-green-800 text-white p-2 w-1/2 mx-auto absolute mt-65 ms-100 justify-center'>
 Thanks for contact with us we will contact with  you soon!
 </div>"; 
 header("refresh:2 ./contactus");

}

}

// fetch all subject inside of contact us form 
$subject=$this->selectAllData('tbl_subject');

// load a template or view or routing 
if(isset($_SERVER["PATH_INFO"]))
{
switch($_SERVER["PATH_INFO"])
{
case '/':
require_once("index.php");
require_once("header.php");
require_once("slider.php");
require_once("content.php");
require_once("footer.php");
require_once("login.php");
break;

case '/contactus':
require_once("index.php");
require_once("header.php");
require_once("contact.php");
require_once("footer.php");
require_once("login.php");
break;


case '/aboutus':
require_once("index.php");
require_once("header.php");
require_once("about.php");
require_once("footer.php");
require_once("login.php");
break;

case '/faq':
require_once("index.php");
require_once("header.php");
require_once("faq.php");
require_once("footer.php");
require_once("login.php");
break;

case '/products':
require_once("index.php");
require_once("header.php");
require_once("products.php");
require_once("footer.php");
require_once("login.php");
break;


case '/products-details':
require_once("index.php");
require_once("header.php");
require_once("products-details.php");
require_once("footer.php");
require_once("login.php");
break;

case '/cart':
require_once("index.php");
require_once("header.php");
require_once("cart.php");
require_once("footer.php");
require_once("login.php");
break;


case '/checkout':
require_once("index.php");
require_once("header.php");
require_once("checkout.php");
require_once("footer.php");
require_once("login.php");
break;

case '/orders':
require_once("index.php");
require_once("header.php");
require_once("orders.php");
require_once("footer.php");
require_once("login.php");
break;

case '/privacy':
require_once("index.php");
require_once("header.php");
require_once("privacy.php");
require_once("footer.php");
require_once("login.php");
break;

case '/terms':
require_once("index.php");
require_once("header.php");
require_once("terms.php");
require_once("footer.php");
require_once("login.php");
break;


case '/careers':
require_once("index.php");
require_once("header.php");
require_once("career.php");
require_once("footer.php");
require_once("login.php");
break;



case '/blogs':
require_once("index.php");
require_once("header.php");
require_once("blog.php");
require_once("footer.php");
require_once("login.php");
break;

default:
require_once("index.php");
require_once("header.php");
require_once("404.php");
require_once("footer.php");
break;
}
}

}

}
$obj=new controller;
?>
