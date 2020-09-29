<?php
    $p_name=$_POST["name"];
    $p_price=$_POST["price"];
    $p_detail=$_POST["detail"];

    if($p_name!=""&& $p_price!==""&& $p_detail!==""){


    
    $servername="localhost";
    $username="root";
    $password="123456789";
    $db_name="product";
    $conn=mysqli_connect($servername, $username,$password,$db_name);
    if(!$conn){
        // !是  否的意思
        die("connect_error".mysqli_connect_error());
        

    }
        // $sql = "SELECT * FROM product_data";//讀取
        $sql ="INSERT INTO product_data(name,price,detail)VALUES('$p_name','$p_price','$p_detail')";
        //$result=mysqli_query($conn,$sql);
        //$myData=Array();
        //while($row = mysqli_fetch_assoc($result)){
        
        // echo $row["ID"].$row["name"].$row["price"].$row["detail"];
        //$myData[]=$row;
            if(mysqli_query($conn,$sql)){

                echo "create ok!";
            }
            else{
                echo"NOMNO".mysqli_error($conn);

            }
           
        }
        else{
            echo"不得為空";

        }
   // } 
    //echo json_encode($myData);  
        mysqli_close($conn);
?>