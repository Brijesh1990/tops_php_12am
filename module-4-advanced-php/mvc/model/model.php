<?php 
class model 
{
  public $conn="";  
  public function __construct()
  {
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
  // create a member function for insert all data
  public function insertAllData($table,$data)
  {
    // convert $data array as key 
    $column=array_keys($data);
    $column1=implode(",",$column);
    // convert $data array as values
    $value=array_values($data);
    $value1=implode("','",$value);
    
    $insert="insert into $table($column1) values('$value1')";
    $query=mysqli_query($this->conn,$insert);
    return $query;
  }
  // create a member function for select all data 
  public function selectAllData($table)
  {
    $select="select * from $table";
    $query=mysqli_query($this->conn,$select);
    while($fetch=mysqli_fetch_array($query))
      {
        $arr[]=$fetch;
      }
      return $arr;
    
  } 
}
?>