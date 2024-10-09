<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $arr = array(
        "message" => "ok"
    );
    echo json_encode($arr);
}
?>