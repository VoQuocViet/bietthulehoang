<?php


class MenuDB 
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
    
    function SearchMenu()
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_menu";
        $this->query =mysql_query($sql);
    }
    
    function SearchMenuById($IdSearch)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql="select * from tbl_menu where menu_id=".$IdSearch;
        $this->query =mysql_query($sql);
    }
    
    function InsertMenu($NameInsert, $MenuStatus)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql1="INSERT INTO tbl_menu (menu_name, menu_status)VALUES ('".$NameInsert."', '".$MenuStatus."')";
        $this->query =mysql_query($sql1);
    }
    
    function UpdateMenu($IdEdit, $NameEdit,$MenuStatus )
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql2="UPDATE tbl_menu SET menu_name ='".$NameEdit."', menu_status='".$MenuStatus."' WHERE menu_id=".$IdEdit;
        $this->query =mysql_query($sql2);
    }
    
    function DeleteMenu($IdDelete)
    {
        mysql_select_db("lehoangadm_dlvilla",$this->conn);
        $sql3="DELETE FROM tbl_menu WHERE menu_id=".$IdDelete;
        $this->query =mysql_query($sql3);
    }
    
    function ShowMenu()
    {
        if(mysql_num_rows($this->query) == 0)
        {
        	echo "Chua co du lieu";
        }
        else
        {
        	while($row=mysql_fetch_array($this->query))
        	{
        		echo "<a href='MenuEdit.php?IdMenu=".$row['IdMenu'] ."'>".$row['IdMenu']."</a> - ".$row['NameMenu']."<br />";
        	}
        }
    }
    
    function MenuManagement()
    {
        if(mysql_num_rows($this->query) == 0)
        {
        	echo "Chua co du lieu";
        }
        else
        {
            while($row=mysql_fetch_array($this->query))
            {
        	echo "<table border='0.5'><tr><td>".$row['IdMenu']."</td>";
            echo "<td>".$row['NameMenu']."</td>";
            echo "<td><a href='MenuEdit.php?IdMenu=".$row['IdMenu']."'>Edit</a></td>";
            echo "<td><a href='MenuManagement.php?IdMenu=".$row['IdMenu']."'>x</a></td></tr></table>";
            }
        }
    }
}
?>