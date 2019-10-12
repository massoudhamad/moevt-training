<?php
include("DBHelper.php");
$db=new DBHelper();
$districtID=$_POST['districtID'];
if($districtID)
{
    $shehia= $db->getRows('ddx_shehia',array('where'=>array('districtCode'=>$districtID),'order_by'=>'shehiaName ASC'));
    if(!empty($shehia))
    {
        echo"<option value=''>Select Shehia</option>";
        foreach($shehia as $gd)
        {
            $shehiaID=$gd['shehiaCode'];
            $shehiaName=$gd['shehiaName'];
            echo "<option value='$shehiaID'>$shehiaName</option>";
        }
        
    }
}

?>