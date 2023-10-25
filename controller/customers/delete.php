<?php
    include "../../helper/App.php";

    $id = $_REQUEST['id'];
    $app = new App();
    $app->delete("customers","where customer_id=" . $id);
    echo "success";
?>
