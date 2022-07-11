<?php
function checkValidate($object)
{
    $check = ['mail','tel','surname','name'];
    $sampleTel = preg_match("/^[8?\+7][0-9]{10}$/", $object['tel']);
    $error = true;

    foreach($object as $key => $value)
    {
        if(empty($object[$key]) && in_array($key, $check))
            $error = false;
    }
    if(!filter_var($object['mail'], FILTER_VALIDATE_EMAIL))
        $error = false;
    return $error;
}
$checkBool = checkValidate($_POST);
echo $checkBool;
if($checkBool === true){
    print_r($_POST);
    //mail($_POST['mail'], 'Данные', $_POST);
}