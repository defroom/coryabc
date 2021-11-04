<?php
$conn=mysql_connect("127.0.0.1","root","123");
if ($conn) {
        echo "success";
}else{
        echo "fail";
}
mysql_close($conn);
?>
###
