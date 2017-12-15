<?php
require ("../sql_connect.php");
include ("../Header.php");

$displaycalendar_query = "SELECT * FROM organization_event";
$displaycalendar_data = mysqli_query($sql, $displaycalendar_query);
if(!$displaycalendar_data){
	echo "ERROR IN QUERY!";
	exit();
	
}
?>
<html>
	<head>
		<link rel='stylesheet' href='../fullcalendar/fullcalendar.min.css'/>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
		
	</head>
	<body>
		<div id='calendar'></div>
	</body>
</html>
<script src='../fullcalendar/lib/jquery.min.js'></script>
<script src='../fullcalendar/lib/moment.min.js'></script>
<script src='../fullcalendar/fullcalendar.min.js'></script>
<script>
$(document).ready(function(){
	
	$("#calendar").fullCalendar({
		header: {
	        left: 'prev,next todayZZ',
	        center: 'title',
			title: 'sample'
	   	},

			
		editable: false,
		dropabble: false,
		selectable: true,
		selectHelper: false,
		eventLimit: true,
		
		<!-- DISPLAY EVENTS FROM DB -->
		events:[
			{
				start: '2017-12-13',
				end: '2017-12-16',
				title: 'sample'
				
			}
		]
	
			
	});
});
</script>