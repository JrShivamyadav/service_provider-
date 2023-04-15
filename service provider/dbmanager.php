<?php 
class DBManager{
    function insertUpdateOrDelete($query)
    {
        $conn=mysqli_connect("localhost","root","","servicedb");
        if($conn==false){
            die("Connection is failed".mysqli_connect_error());
        }
        $x=mysqli_query($conn,$query);
        if($x>0){
            return true;
        }
        else
        return false;

    }
}
?>