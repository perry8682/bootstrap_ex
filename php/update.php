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
        
        // $sql ="INSERT INTO product_data(name,price,detail)VALUES('$p_name','$p_price','$p_detail')";
        $sql ="UPDATE product_data SET Name='aabba',price='8513',detail='454ddsa' WHERE ID=1";
        if(mysqli_query($conn,$sql)){

            echo "create ok!";
        }
        else{
            echo"NOMNO".mysqli_error($conn);

        }
       
      mysqli_close($conn);
    }
    
    else{
        echo"不能為空直";
    }
      
?>