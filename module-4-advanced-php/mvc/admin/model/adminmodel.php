<?php 
class adminmodel 
{
  public $conn="";  
  public function __construct()
  {
    session_start();
    try 
    {
     $this->conn=mysqli_connect("localhost","root","admin","mvcdbapp");
    //  echo "connection successfully";
    }
    catch(Exception $e)
    {
        die(mysqli_error($e));
    }
  }
  // create a member function for admin login
  public function admin_login($table,$email,$password)
  {
    $select="select * from $table where email='$email' and password='$password'";
    $query=mysqli_query($this->conn,$select);
    $fetch=mysqli_fetch_array($query);
    $num_rows=mysqli_num_rows($query);
    if($num_rows==1)
      {
        $_SESSION["adminid"]=$fetch["adminid"];
        $_SESSION["email"]=$fetch["email"];
        return true;
      }
      else 
        {
          return false;
        }
  }

  // // create a member function for insert all data
  // public function insertAllData($table,$data)
  // {
  //   // convert $data array as key 
  //   $column=array_keys($data);
  //   $column1=implode(",",$column);
  //   // convert $data array as values
  //   $value=array_values($data);
  //   $value1=implode("','",$value);
    
  //   $insert="insert into $table($column1) values('$value1')";
  //   $query=mysqli_query($this->conn,$insert);
  //   return $query;
  // }

  // create a member function for select all data and join tables
  public function selectJoin1($table,$table1,$column,$id)
  {
    $select="select * from $table join $table1 on $table.$id=$table1.$id";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
      {
        $arr[]=$fetch;
      }
      return $arr;
    
  } 

  // create a member function for count
    public function selectCount($table,$column)
  {
    $select="select count($column) as total from $table";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
      {
        $arr[]=$fetch;
      }
      return $arr;
    
  } 
}
?>