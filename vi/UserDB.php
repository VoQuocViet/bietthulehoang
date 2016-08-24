<?php

class UserDB 
{
    public $conn = "";
    public $query = "";
    
    function OpenConnection()
    {
        $this->conn =mysql_connect("localhost", "bietthuleh_dba", "zxcVBN123") or die("can't connect server");
        mysql_query("set names 'utf8'");
        mysql_select_db("bietthuleh_db",$this->conn) or die("can't connect database");
    }
    
    function CloseConnection()
    {
        mysql_close($this->conn);
    }
    
    function Search()
    {
        $sql="select * from tbl_user";
        $this->query =mysql_query($sql);
    }
    
    function SearchUserById($IdSearch)
    {
        $sql="select * from tbl_user where user_id=".$IdSearch;
        $this->query =mysql_query($sql);
    }
    
    function SearchUserByUserName($NameSearch)
    {
        $sql="select * from tbl_user where user_name='".$NameSearch."'";
        $this->query =mysql_query($sql);
    }
    
    function InsertUser($NameInsert, $PasswordInsert, $UserStatus)
    {
        $sql1="INSERT INTO tbl_user (user_name, user_password, user_status)VALUES ('".$NameInsert."', '".$PasswordInsert."','".$UserStatus."')";
        $this->query =mysql_query($sql1);
    }
    
    function UpdateUser($IdEdit, $NameEdit, $PasswordEdit, $UserStatus)
    {
        $sql2="UPDATE tbl_user SET user_name ='".$NameEdit."', user_password ='".$PasswordEdit."', user_status ='".$UserStatus."' WHERE user_id=".$IdEdit;
        $this->query =mysql_query($sql2);
    }
    
    function DeleteUser($IdDelete)
    {
        $sql3="DELETE FROM tbl_user WHERE user_id=".$IdDelete;
        $this->query =mysql_query($sql3);
    }
}

?>