<?php
class EventDB
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
        $sql="select * from tbl_event";
        $this->query =mysql_query($sql);
    }
    function SearchEntryEvent()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select event_id, event_title, event_content, event_asbtract, event_img from tbl_event";
        $this->query =mysql_query($sql);
    }
    function SearchEventById($IdSearch)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select event_id, event_title, event_content, event_img from tbl_event where event_id=".$IdSearch;
        $this->query =mysql_query($sql);
    }
}
?>