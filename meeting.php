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

    if ($type == 'create')
    {
        $data['host_id']    = $host_id; 
        $data['topic']      = 'Introduction'; 
        $data['type']       = '2'; 
        $data['start_time'] = gmdate("Y-m-d\TH:i:s\Z", strtotime('+ 3 hours'));
        $data['duration']   = '2';
        $data['timezone']   = date_default_timezone_get();
        
        $result             = $zoom->createAMeeting($data);
    }
    else if ($type == 'list')
    {
        $data['host_id']    = $host_id;
        $result             = $zoom->listMeetings($data);
    }
    else if ($type == 'end')
    {
        sleep(40);

        $data['id']         = $_GET['meetingId'];
        $data['host_id']    = $host_id;
        $result             = $zoom->endAMeeting($data);
    }

    $result = json_decode(json_decode($result), true);

    echo json_encode($result);
?>