<?php
	/*
	*	Author : Harsh Sanghani
	* 	Website : www.angelinfotech.info
	*
	*	This demo is created for integration of Zoom-API, You have to change some relative code like API key, secret and etc to wroking this example.
	*
	*	Feel free to contact me in case of any query.
	*/

    require_once 'ZoomRESTAPIPHP.php';

    $type = $_GET['type'];
    $zoom = new ZoomAPI();

    if ($type == 'create')
    {
        $data['userEmail']  = 'sanghani.harsh@yahoo.com';
        $data['userType']   = '0';

        $result = $zoom->createAUser($data);
    }
    else if ($type == 'list')
    {
        $result = $zoom->listUsers();
    }
    $result = json_decode($result);
    $result = json_decode($result, true);

    echo '<pre>';
    print_r($result);die;
?>