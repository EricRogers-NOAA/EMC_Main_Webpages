<?php
session_start();

 $creds = array(
    'user' => 'userModels00',
    'passwd' => 'mapsModels1'
);


if(empty($_POST['username'])){
    $username = null;
}
if(empty($_POST['password'])){
    $password = null;
}

if(isset($_POST['username'])){
    $username = $_POST['username'];
}

if(isset($_POST['password'])){ 
    $password = $_POST['password'];
}

if(isset($_POST['loginBtn'])){
    if($username === $creds['user'] && $password === $creds['passwd']){ 
            header('location: https://www.emc.ncep.noaa.gov/emc/pages/ncep_maps/p6/biasmaps/index.php');
    }else{
        header('location: https://www.emc.ncep.noaa.gov/emc/pages/ncep_maps/index.php');
    }
    

} 



