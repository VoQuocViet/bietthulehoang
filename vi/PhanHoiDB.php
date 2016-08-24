<?php


class PhanHoiDB
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
        mysql_select_db("bietthuleh_db",$this->conn);
        $sql="select * from tbl_entry";
        $this->query =mysql_query($sql);
    }
    
    function SearchEntryComment()
    {
        mysql_select_db("bietthuleh_db",$this->conn);
        $sql="select * from tbl_comment where comment_status='Yes' ORDER BY comment_id DESC";
        $this->query =mysql_query($sql);
    }
}
?>