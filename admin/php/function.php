<?php 
function get_post_by_id($id) {
    global $con;
    $sql = "SELECT *FROM `tblproduct` WHERE `id`= '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
?>


