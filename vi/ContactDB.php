<?php

class ContactDB
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
        $sql="select * from tbl_contact";
        $this->query =mysql_query($sql);
    }
    
    
    function DeleteContact($IdDelete)
    {
        $sql3="DELETE FROM tbl_contact WHERE contact_id=".$IdDelete;
        $this->query =mysql_query($sql3);
    }
    
    function InsertContact($Name, $Phone, $Email, $ContactContent)
    {
        $date = date("Y-m-d h:i:sa");
        $sql1="INSERT INTO tbl_contact (contact_name, contact_phoneno, contact_email, contact_content, contact_datetime)VALUES ('".$Name."', '".$Phone."','".$Email."','".$ContactContent."','".$date."')";
        $this->query =mysql_query($sql1);
    }
    
    
}
?>