<?php 
if (is_single()) {
    $veiws = get_field("veiws"); 
    $veiws_update = $veiws+=1;
    update_field("veiws",$veiws_update,get_the_ID());
}
?>