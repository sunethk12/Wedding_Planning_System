<?php
session_start();

include("includes/db.php");


class model extends db{
    function save($table,$arr){
        $res=mysqli_query($this->connect(),"insert into $table values('".implode("','",array_values($arr))."')");
    
        if($res){
            return true;
        }else{
            return false;
        }
    
    }

    function login($email,$password){
        $res=mysqli_query($this->connect(),"SELECT * FROM user WHERE email='$email' AND password='$password'");
        $res2=mysqli_query($this->connect(),"SELECT status FROM business_reg WHERE u_email='$email'");
        $b=false;

        while($row = mysqli_fetch_array($res)){
			$b = true;
			$ut = $row["user_type"];
			
			}

        while($row = mysqli_fetch_array($res2)){
            $status=$row["status"];
           
        }


            if($b){
				if ($ut=='admin') {
            //	header('location: admin_dash.php');
                return "admin";
                
               

        		}
        		elseif ($ut=='customer') {
            //	header('location: customer_dash.php');
                return "customer";
               
        		}
        		elseif ($ut=='vendor' and $status=='active'){
                  return "vendor";
                 
			//	header('location: vendor_dash.php');
               }elseif ($ut=='vendor' and $status=='pending' ) {
                   return "no";
            	// echo "not activated your account";
        		}

			}else{
                return "invalid";
            }


    }

    function view($table){
        $res=mysqli_query($this->connect(),"select * from $table");
        $arr=array();
        while($row=mysqli_fetch_array($res)){
            $arr[]=$row;
        }
        return $arr;  
    }



    function viewData($table,$col,$val){
        $res=mysqli_query($this->connect(),"select * from $table where $col='$val'");
        $arr=array();
        while($row=mysqli_fetch_array($res)){
            $arr[]=$row;
        }
        return $arr;  
    }


    function viewDT($table1,$table2,$col,$val){
        $res=mysqli_query($this->connect(),"select $table1.* from $table1,$table2 where $table2.$col='$val'");
        $arr=array();
        while($row=mysqli_fetch_array($res)){
            $arr[]=$row;
        }
        return $arr; 

    }



    function autoNumber($table){
        $res=mysqli_query($this->connect(),"select * from $table");
        $maxid=0;
        while($row=mysqli_fetch_array($res)){

            $newid=$row["reg_number"];
            $id=substr($newid,4);

            if($id>$maxid){
                $maxid=$id;
            }

       }

       
       
      $nextid=($maxid + 1);
      $pre="VEN";
      return $autoid=$pre."-".$nextid;


    }



    function userRegid($us){
        $res=mysqli_query($this->connect(),"select * from business_reg where u_email='$us'");

        while($row=mysqli_fetch_array($res)){
            $reg_num=$row["reg_number"];
        }

       return $reg_num;

    }



    








}

$obj=new model;



?>