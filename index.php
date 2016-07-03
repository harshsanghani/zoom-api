<?php 
	/*
	*	Author : Harsh Sanghani
	* 	Website : www.angelinfotech.info
	*
	*	This demo is created for integration of Zoom-API, You have to change some relative code like API key, secret and etc to wroking this example.
	*
	*	Feel free to contact me in case of any query.
	*/
?>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $.ajax({
                        url: "meeting.php?type=create", 
                        success: function(result){
                            var data = jQuery.parseJSON(result);
                            window.open(data.start_url, '_blank');
                            //endMeeting(data.id);
                        }
                    });
                });
            });

            function endMeeting(meetingId)
            {
                $.ajax({
                    url: "meeting.php?type=end&meetingId="+meetingId, 
                    success: function(result){
                        var data = jQuery.parseJSON(result);
                        console.log("End Meeting");
                        console.log(data);
                        alert("Meeting Completed.");
                    }
                });
            }
        </script>
    </head>
    <body>
        <button >Start Meeting</button>
    </body>
</html>