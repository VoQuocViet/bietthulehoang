<?php


class EntryDB 
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
    
    function SearchEntryEvent()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_entry where menu_id='6'";
        $this->query =mysql_query($sql);
    }
    
    function SearchEntryPromotion()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_entry where menu_id='7'";
        $this->query =mysql_query($sql);
    }
    function SearchEntryNews()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_entry where menu_id='8'";
        $this->query =mysql_query($sql);
    }
    function SearchEntryById($IdSearch)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_entry where entry_id=".$IdSearch;
        $this->query =mysql_query($sql);
    }
    
    function InsertEntryEvent($EntryName, $EntryContent, $EntryNameEn, $EntryContentEn, $EntryImg, $EntryStatus)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $date = date("Y-m-d h:i:sa");
        $sql1="INSERT INTO tbl_entry (entry_name, entry_content, entry_name_en, entry_content_en, entry_img, entry_datetime, menu_id, entry_status)VALUES ('".$EntryName."', '".$EntryContent."','".$EntryNameEn."','".$EntryContentEn."','".$EntryImg."','".$date."', '6', '".$EntryStatus."')";
        $this->query =mysql_query($sql1);
    }
    
    function InsertEntryPromotion($EntryName, $EntryContent, $EntryNameEn, $EntryContentEn, $EntryImg, $EntryStatus)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $date = date("Y-m-d h:i:sa");
        $sql1="INSERT INTO tbl_entry (entry_name, entry_content, entry_name_en, entry_content_en, entry_img, entry_datetime, menu_id, entry_status)VALUES ('".$EntryName."', '".$EntryContent."','".$EntryNameEn."','".$EntryContentEn."','".$EntryImg."','".$date."', '7', '".$EntryStatus."')";
        $this->query =mysql_query($sql1);
    }
    function InsertEntryNews($EntryName, $EntryContent, $EntryNameEn, $EntryContentEn, $EntryImg, $EntryStatus)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $date = date("Y-m-d h:i:sa");
        $sql1="INSERT INTO tbl_entry (entry_name, entry_content, entry_name_en, entry_content_en, entry_img, entry_datetime, menu_id, entry_status)VALUES ('".$EntryName."', '".$EntryContent."','".$EntryNameEn."','".$EntryContentEn."','".$EntryImg."','".$date."', '7', '".$EntryStatus."')";
        $this->query =mysql_query($sql1);
    }
    function UpdateEntry($IdEdit, $NameEdit, $ContentEdit, $NameEnEdit, $ContentEnEdit, $EntryImg, $EntryStatus )
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql2="UPDATE tbl_entry SET entry_name ='".$NameEdit."', entry_content='".$ContentEdit."', entry_name_en ='".$NameEnEdit."', entry_content_en='".$ContentEnEdit."', entry_img='".$EntryImg."', entry_status='".$EntryStatus."' WHERE entry_id=".$IdEdit;
        $this->query =mysql_query($sql2);
    }

    function DeleteEntry($IdDelete)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql3="DELETE FROM tbl_entry WHERE entry_id=".$IdDelete;
        $this->query =mysql_query($sql3);
    }
    
    function SearchForComment()
    {
        $sql="select entry_id, entry_name from tbl_entry";
        $this->query =mysql_query($sql);
    }
}
?>