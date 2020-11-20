<?php 
//database connection class
class DatabaseConfig{
    //members variable
    public $dbcon;//database connection handler

    //members function
    public function __construct(){
        //connect connection ny instantiating MySQLi class
        $this->dbcon=new mysqli("localhost","root","","pharmacy");
        //check connection
        if($this->dbcon->connect_errno){
            die('connection fail'.$this->dbcon->connect_error);
        }else{
          //  echo "connection successful";
        }
    }
}

class Authenticate{
		//member variables
        public $pharm; //database handler
        public $pharmacy_name;
        public $username;
        public $email;
        public $password;
        public $phone;


        //member methods
        public function __construct(){
            //create object of database
            $this->pharm = new DatabaseConfig;
        }

 public function register($pharmacy_name,$username,$email,$password,$phone){
     $pwd=md5($password);
     $sql="INSERT INTO users SET pharmacy_name='$pharmacy_name',username='$username',email='$email',password='$pwd',phone='$phone'";
   
     if ($this->pharm->dbcon->query($sql) === true){         
      $result = "{
				'status': 'success',
				'message': 'New Pharmacies was successfully created!',
				'data': [],

			}";
        }  else {
          //we specify the statement that would show us the query error
          $queryerror = $this->pharm->error;
          # creating our json template
          $result = "{
            'status': 'Failed',
            'message': 'Oops, something happened!'.$queryerror,
            'data': [],
          }";
        } 
       return $result;
  
 }



public function login($email,$password){
    $pwd=md5($password);
  $sql="SELECT users.*,roles.rolename FROM users LEFT JOIN roles ON users.roles_id = roles.roles_id WHERE users.email='$email' AND users.password = '$pwd' LIMIT 1";
  $result=$this->pharm->dbcon->query($sql);

  if($this->pharm->dbcon->affected_rows == 1){
    $output = $result->fetch_assoc();
//create SESSION
       $_SESSION['usersid']==$output['users_id'];
       $_SESSION['username']==$output['username'];
       $_SESSION['roles']==$output['rolename'];
       $_SESSION['useremail']==$output['email'];
       $_SESSION['rolesid']==$output['roles_id'];

  // var_dump($pwd);
  // exit();
    header("Location: http://localhost/pharmacy/admin/pharmacydash.php");   
  }else{
    $result ="<div class='alert alert-danger'>Invalid Email Address or password</div>";
  }
 return $result;
}

   
}

class Drug{
  //member variable;
  public $drugs_type;
  public $drugs_name;
  public $pharm;//handler;

  //member methods
  public function __construct(){
    //create object of database
    $this->pharm = new DatabaseConfig;
}
  

public function adddrug($drugs_type,$drugsname){
          $sql="INSERT INTO drugs SET drugs_type='$drugs_type', drugsname='$drugsname' ";

          if ($this->pharm->dbcon->query($sql) === true){         
            $result = "{
              'status': 'success',
              'message': 'New drug category was successfully created!',
              'data': [],
        
            }";
              }  else {
                //we speci
                $queryerror = $this->pharm->dbcon->error;
                # creating our json template
                $result = "{
                  'status': 'Failed',
                  'message': 'Oops, something happened!'.$queryerror,
                  'data': [],
                }";
              } 
             return $result;

}


public function getdrugs(){
$sql= "SELECT * FROM drugs LIMIT 10 ";

if($result= $this->pharm->dbcon->query($sql)){
  $output = $result->fetch_all(MYSQLI_ASSOC);
  $jsondata = json_encode($output) ;
  $result="{
      'status' : 'success',
      'message' : 'list of drugs',
       'data':    $jsondata;

  
  } ";
}else{
  $myerror=$this->pharm->dbcon->error;
  $result="{
    'status':'failed',
    'mesage':'oops, something happened!'.$myerror,
    'data':[];
          
    
  }";
}
return $output;


}




public function alldrugs(){

  $sql="SELECT * FROM drugs ";
  
    if($result= $this->pharm->dbcon->query($sql)){
        
      $output = $result->fetch_all(MYSQLI_ASSOC);
     }else{
         echo "error: ".$this->pharm->dbcon->error;
     }
       return $output;
  
  } 

}



class Category{
  //member variable
public $cat;
public $pharm;

public function __construct(){
  //create object of database
  $this->pharm = new DatabaseConfig;
}


//
public function addcat($drugcategory){

  $sql="INSERT INTO category SET cat_name='$drugcategory'";

  if ($this->pharm->dbcon->query($sql) === true){         
    $result = "{
      'status': 'success',
      'message': 'New drug category was successfully created!',
      'data': [],

    }";
      }  else {
        //we speci
        $queryerror = $this->pharm->dbcon->error;
        # creating our json template
        $result = "{
          'status': 'Failed',
          'message': 'Oops, something happened!'.$queryerror,
          'data': [],
        }";
      } 
     return $result;
}

public function allcategory(){

$sql="SELECT * FROM category ";

  if($result= $this->pharm->dbcon->query($sql)){

   $output = $result->fetch_all(MYSQLI_ASSOC);
   $jsondata=json_encode($output,true);
   $result="{
   'status': 'sucess',
   'message':'list of landlord',
   'data':$jsondata
   }";
 }else{
   $myerror =$this->pharm->dbcon->error;
   $result="{
  'status':'failed',
  'mesage':'oops, something happened!'.$myerror,
  'data':[];
 
   }";
 }
     return $output;

}

        public function getcat(){
          $query="SELECT * FROM category LIMIT 10 ";
          //+++die($query);
          if($result = $this->pharm->dbcon->query($query)){
            $output = $result->fetch_all(MYSQLI_ASSOC);
            $jsondata=json_encode($output);
            $result="{
            'status': 'sucess',
            'message':'list of category',
            'data':$jsondata
            }";
          }else{
            $myerror =$this->pharm->dbcon->error;
            $result="{
           'status':'failed',
           'mesage':'oops, something happened!'.$myerror,
           'data':[];
          
            }";
          }
              return $output;
       
        }

        public function updatecate($cat_id,$cat_name){
        $sql= "UPDATE category SET cat_name='$cat_name' where cat_id='$cat_id' ";
         if($this->pharm->dbcon->query($sql)){
             $msg = "<div class='alert alert-danger'> category updated</div>";
             header("Location: http://localhost/pharmacy/admin/pharmacydash.php?msg=$msg");
         }else{ 
         die($this->pharm->dbcon->error);
         }
         
        }
        public function getcate($cat_id,$cat_name){
          $query="SELECT category.cat_name='$cat_name' FROM category WHERE $cat_id='$cat_id' ";
          if($result=$this->pharm->dbcon->query($query)){
            $output=$result->fetch_assoc();
            $jsondata=json_encode($output);
            $result="{
            'status': 'sucess',
            'message':'list of category',
            'data':$jsondata
            }";
          }else{
            $myerror =$this->pharm->dbcon->error;
            $result="{
           'status':'failed',
           'mesage':'oops, something happened!'.$myerror,
           'data':[];
          
            }";
          }
          return $result;        
        }
        
}
class Pharmacy{
//member variables
public $pharm; //database handler
public $pharmacy_name;
public $username;
public $email;
public $password;
public $phone;

     //member methods
     public function __construct(){
      //create object of database
      $this->pharm = new DatabaseConfig;
  }
 //get allpharmacies
 public function users(){
  $sql="SELECT * FROM users LIMIT 15";
  if($result=$this->pharm->dbcon->query($sql)){
   $output=$result->fetch_all(MYSQLI_ASSOC);
   $jsondata=json_encode($output);
   $result="{
   'status': 'sucess',
   'message':'list of all pharmacy',
   'data':$jsondata
   }";
 }else{
   $myerror =$this->pharm->dbcon->error;
   $result="{
  'status':'failed',
  'mesage':'oops, something happened!'.$myerror,
  'data':[];
 
   }";
 }
 return $output;
 }
  
  
  public function getpharm($users_id){
    $query="SELECT * FROM users where users_id='$users_id' LIMIT 1";
    //+++die($query);
    $result=$this->pharm->dbcon->query($query);
    if($result->num_rows>0){
      return $result->fetch_assoc();
    }else{
      return false;
    }
  }


 //get one pharmacy
 public function user($users_id){
  $sql="SELECT roles.*,users.pharmacy_name,users.username,users.email,users.phone FROM users LEFT JOIN roles on roles.roles_id=users.roles_id WHERE users.users_id=$users_id";
  if($result=$this->pharm->dbcon->query($sql)){
   $output=$result->fetch_assoc();
   $jsondata=json_encode($output);
   $result="{
   'status': 'sucess',
   'message':'',
   'data':$jsondata
   }";
 }else{
   $myerror =$this->pharm->dbcon->error;
   $result="{
  'status':'failed',
  'mesage':'oops, something happened!'.$myerror,
  'data':[];
 
   }";
 }
 return $result;
 }
  
} 



?>