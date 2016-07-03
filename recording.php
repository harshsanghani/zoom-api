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

    $type       = $_GET['type'];
    $zoom       = new ZoomAPI();
    $host_id    = '7Gwb6oo3HarsHvpMs5dHA'; // Change with your Host ID

    if ($type == 'list')
    {
        $data['host_id']    = $host_id;
        $result             = $zoom->listRecording($data);
    }

    $result = json_decode(json_decode($result), true);

    echo '<pre>';
    print_r($result);die;
?>