<?php


class PhanHoiDB
{
    public $conn = "";
    public $query = "";
    
    function OpenConnection()
    {
        $this->conn =mysql_connect("localhost", "lehoangadm_dba", "12345") or die("can't connect server");
        mysql_query("set names 'utf8'");
        mysql_select_db("lehoangadm_dlvilla",$this->conn) or die("can't connect database");
    }
    
    function CloseConnection()
    {
        mysql_close($this->conn);
    }
    
    function Search()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_entry";
        $this->query =mysql_query($sql);
    }
    
    function SearchEntryComment()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select comment_username, comment_content, comment_datetime from tbl_comment where comment_status='1'";
        $this->query =mysql_query($sql);
    }
}
?>