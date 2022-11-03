
<html>
	<head>
		<title>Black Market || Ticket information</title>
		<style>
		.container {
			width:100%;
			margin:auto;
		}		 
		.table {
		    width: 100%;
		    margin-bottom: 20px;
		}	
		.table-striped tbody > tr:nth-child(odd) > td,
		.table-striped tbody > tr:nth-child(odd) > th {
		    background-color: #f9f9f9;
		}		
		@media print{
		#print {
		display:none;
		}
		}
		#print {
			width: 90px;
		    height: 30px;
		    font-size: 18px;
		    background: white;
		    border-radius: 4px;
			margin-left:28px;
			cursor:hand;
		}
	</style>		
	<script>
		function printPage() {
		    window.print();
		}
	</script>
	</head>
	<body>
		<div class = "container">
			<div id = "header">
				<br>
				<center><p style = "margin-left:30px; margin-top:5px; margin-bottom: 0px;font-size:14pt; font-style: italic; ">Black Market &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></center>
				<center><p style = "margin-left:30px; margin-top:5px; margin-bottom: 0px;font-size:14pt; font-style: italic; ">Ticket Managment System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></center>
				<center><p style = "margin-left:30px; margin-top:5px; margin-bottom: 0px;font-size:14pt; font-style: italic; ">Ticket Information &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></center>
				<br><br>
			</div>
			<hr style="border: solid black 1px">
			<hr style="border: solid black 1px"><br/>
									<table border="1" class="table table-bordered">
										<tr align="center">
					                      	<h3 colspan="12" style="font-size:20px;color:blue;text-align: center;" >Ticket Information</h3> 
					                    </tr>

									    <tr>
										    <th scope>Ticket Title</th>
										    <td>{{ $tickets->ticket_title }}</td>
										    <th scope>Event</th>
										    <td>{{ $tickets['event']['event_title'] }}</td>
									  	</tr>
									  	<tr>
										    <th scope>Ticket Price</th>
										    <td>{{ $tickets->ticket_price}}</td>
										    <th>Details</th>
										    <td>{{ $tickets->ticket_description }}</td>
									  	</tr>
									    <tr>
										    <th>Date</th>
										    <td>{{ $tickets->ticket_date }}</td>
										    <th>Time</th>
										    <td>{{ $tickets->ticket_time}}</td>
									  	</tr>
									  	<tr>
										    <th>Seat Number</th>
										    <td>{{ $tickets->ticket_seatnumber }}</td>
										    <th>Address</th>
										    <td>{{ $tickets->ticket_address }}</td>
									  	</tr>
									  	<tr>
										    <th>Country</th>
										    <td>{{ $tickets->ticket_country }}</td>
										    <th>Duration</th>
										    <td>{{ $tickets->ticket_duration }} h</td>
									  	</tr>
									  	<tr>
										    <th>Image</th>
										    <td><img src="{{ asset($tickets->ticket_image) }}"></td>
										    <th>Barcode Image</th>
										    <td>{!! DNS2D::getBarcodeHTML($tickets->final, 'QRCODE') !!}</td>
									  	</tr>
									</table><br/>
									
									
			<br />
			<br />
			<hr style="border: solid black 1px">
			<hr style="border: solid black 1px"><br/>
			<!--<button type="submit" id="print" onclick="printPage()">Print</button>-->
	        <div align="right">
				<b style="color:blue;">Date Prepared:</b>
				<?php //include('currentdate.php');
				echo date("l,d-m-Y"); ?>
	        </div>
			<h2><span style="font-size: 15px" class="glyphicon glyphicon-user"></span></h2>
		</div>
	</body>
</html>