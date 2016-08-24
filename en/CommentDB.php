<?php

class CommentDB
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
        $sql="select * from tbl_comment";
        $this->query =mysql_query($sql);
    }
    
    function SearchcommentByEntryId($IdSearch)
    {
        $sql="select * from tbl_comment where entry_id=".$IdSearch;
        $this->query =mysql_query($sql);
    }
    
    function SearchcommentByCommentId($IdSearch)
    {
        $sql="select * from tbl_comment where comment_id=".$IdSearch;
        $this->query =mysql_query($sql);
    }
    
    function Insertcomment($EntryId, $Name, $Phone, $Email, $CommentContent)
    {
        $date = date("Y-m-d h:i:sa");
       
        
        $sql1="INSERT INTO tbl_comment (comment_username, comment_phoneno, comment_email, comment_content, comment_datetime, entry_id)VALUES ('".$Name."', '".$Phone."','".$Email."','".$CommentContent."','".$date."','".$EntryId."')";
        $this->query =mysql_query($sql1);
    }
    
    function Updatecomment($IdEdit, $NameEdit)
    {
        $sql2="UPDATE tbl_comment SET comment_name ='".$NameEdit."' WHERE comment_id=".$IdEdit;
        $this->query =mysql_query($sql2);
    }
    
    function Deletecomment($IdDelete)
    {
        $sql3="DELETE FROM tbl_comment WHERE comment_id=".$IdDelete;
        $this->query =mysql_query($sql3);
    }
    
    
}
?>