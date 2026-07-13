
<?php 
//error_reporting(0);
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
// sesstion destroy or logout 
if(isset($_GET["logoutid"]))
{
$lg=$this->logout();
if($lg)
{
echo "<script>
alert('Your are logout successfully')
window.location='./'
</script>";   
}
}

//add category 
if(isset($_POST["add_cat"]))
{
$catname=$_POST["catname"];
$catdesc=$_POST["catdesc"];
$status=$_POST["status"];
$tmp_name=$_FILES["catimg"]["tmp_name"];
$path="uploads/categoryimage/".$_FILES["catimg"]["name"];
move_uploaded_file($tmp_name,$path);
$data=array("catname"=>$catname,"catdesc"=>$catdesc,"status"=>$status,"catimg"=>$path);
$chk=$this->insertAllData('tbl_addcategory',$data);
if($chk)
{
echo "<script>
alert('Your category added  successfully')
window.location='./add-category'
</script>";   
}
} 
// fetch all data or manage all category data in admin
$shwcat=$this->selectAllData('tbl_addcategory');
// delete category data from admin
if(isset($_GET["delcatid"]))
{
$deletcatid=$_GET["delcatid"];
$id=array("catid"=>$deletcatid);
$chk=$this->deleteData('tbl_addcategory',$id);
if($chk)
{
echo "<script>
alert('Your category deleted  successfully')
window.location='./manage-category'
</script>";      
}
}

// edit category data from admin
if(isset($_GET["editcatid"]))
{
$id=$_GET["editcatid"];
$editcategory=$this->editData('tbl_addcategory','catid',$id);

}

// update category in admin 
if(isset($_POST["upd_cat"]))
{
$editid=$_GET["editcatid"];
$id=array("catid"=>$editid);
$catname=$_POST["catname"];
$catdesc=$_POST["catdesc"];
$status=$_POST["status"];
$tmp_name=$_FILES["catimg"]["tmp_name"];
$path="uploads/categoryimage/".$_FILES["catimg"]["name"];
move_uploaded_file($tmp_name,$path);
$data=array("catname"=>$catname,"catdesc"=>$catdesc,"status"=>$status,"catimg"=>$path);
$chk=$this->updateData('tbl_addcategory',$data,$id);
if($chk)
{
echo "<script>
alert('Your category Updated  successfully')
window.location='./manage-category'
</script>";      
}
}

// add products in admin | manage products in admin | edit products in admin | update products in admin | delete products in admin  
if(isset($_POST["add_prod"]))
{
$catname=$_POST["catname"];
$pname=$_POST["productname"];
$oldprice=$_POST["oldprice"];
$offerprice=$_POST["offerprice"];
$qty=$_POST["qty"];
$pdesc=$_POST["productdesc"];
$status=$_POST["status"];
$tmp_name=$_FILES["productimg"]["tmp_name"];
$path="uploads/productimage/".$_FILES["productimg"]["name"];
move_uploaded_file($tmp_name,$path);

$data=array("catid"=>$catname,"pname"=>$pname,"oldprice"=>$oldprice,"offerprice"=>$offerprice,"qty"=>$qty,"pdesc"=>$pdesc,"status"=>$status,"pimage"=>$path);
$chk=$this->insertAllData('tbl_addproducts',$data);
if($chk)
{
echo "<script>
alert('Your product added  successfully')
window.location='./add-product'
</script>";   
}
} 
// fetch all data or manage all product data in admin
$shwprod=$this->selectAllData('tbl_addproducts');
// delete product data from admin
if(isset($_GET["delpid"]))
{
$deletprodid=$_GET["delpid"];
$id=array("pid"=>$deletprodid);
$chk=$this->deleteData('tbl_addproducts',$id);
if($chk)
{
echo "<script>
alert('Your product deleted  successfully')
window.location='./manage-product'
</script>";      
}
}

// edit product data from admin
if(isset($_GET["editpid"]))
{
$id=$_GET["editpid"];
$editproduct=$this->editData('tbl_addproducts','pid',$id);

}

// update product in admin 
if(isset($_POST["upd_prod"]))
{
$editid=$_GET["editpid"];
$id=array("pid"=>$editid);
$catname=$_POST["catname"];
$pname=$_POST["productname"];
$oldprice=$_POST["oldprice"];
$offerprice=$_POST["offerprice"];
$qty=$_POST["qty"];
$pdesc=$_POST["productdesc"];
$status=$_POST["status"];
$tmp_name=$_FILES["productimg"]["tmp_name"];
$path="uploads/productimage/".$_FILES["productimg"]["name"];
move_uploaded_file($tmp_name,$path);
$data=array("catid"=>$catname,"pname"=>$pname,"oldprice"=>$oldprice,"offerprice"=>$offerprice,"qty"=>$qty,"pdesc"=>$pdesc,"status"=>$status,"pimage"=>$path);
$chk=$this->updateData('tbl_addproducts',$data,$id);
if($chk)
{
echo "<script>
alert('Your product Updated  successfully')
window.location='./manage-product'
</script>";      
}
}


// update category in admin 
if(isset($_POST["upd_cat"]))
{
$editid=$_GET["editcatid"];
$id=array("catid"=>$editid);
$catname=$_POST["catname"];
$catdesc=$_POST["catdesc"];
$status=$_POST["status"];
$tmp_name=$_FILES["catimg"]["tmp_name"];
$path="uploads/categoryimage/".$_FILES["catimg"]["name"];
move_uploaded_file($tmp_name,$path);
$data=array("catname"=>$catname,"catdesc"=>$catdesc,"status"=>$status,"catimg"=>$path);
$chk=$this->updateData('tbl_addcategory',$data,$id);
if($chk)
{
echo "<script>
alert('Your category Updated  successfully')
window.location='./manage-category'
</script>";      
}
}


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

case '/add-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("addcategory.php");
require_once("footer.php");
break;
case '/manage-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("managecategory.php");
require_once("footer.php");
break;

case '/edit-category':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("editcategory.php");
require_once("footer.php");
break;


case '/add-product':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("addproducts.php");
require_once("footer.php");
break;
case '/manage-product':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("manageproducts.php");
require_once("footer.php");
break;

case '/edit-products':
require_once("index.php");
require_once("header.php");
require_once("sidebar.php");
require_once("editproducts.php");
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
