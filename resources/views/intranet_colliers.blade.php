
<!-- saved from url=(0041)https://www.colliers.id/intranet/home.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Colliers Intranet - Home</title>
	<link rel="stylesheet" type="text/css" href="https://www.colliers.id/intranet/css/newstyle.css">
	<link rel="shortcut icon" href="https://www.colliers.id/intranet/images/favicon.ico" type="image/x-icon">
	<style>
		.head3 { font-family:Verdana; font-size:11pt; font-weight:bold; }
	</style>
    <script src="https://www.colliers.id/intranet/lib/tab/jquery-1.1.3.1.pack.js.download" type="text/javascript"></script>
    <script src="https://www.colliers.id/intranet/lib/tab/jquery.history_remote.pack.js.download" type="text/javascript"></script>
    <script src="https://www.colliers.id/intranet/lib/tab/jquery.tabs.pack.js.download" type="text/javascript"></script>

	<link rel="stylesheet" href="https://www.colliers.id/intranet/lib/tab/jquery.tabs.css" type="text/css" media="print, projection, screen">
    <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="https://www.colliers.id/intranet/lib/tab/jquery.tabs-ie.css" type="text/css" media="projection, screen">
    <![endif]-->
	
	<!-- CHATBOX CIIA START -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chatbox {
            position: fixed;
            bottom: 0;
            right: 5px;
            width: 515px;
            height: 555px;
            /* background-color: #fff; */
            font-family: 'Lato', sans-serif;

            -webkit-transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
            transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
            z-index: 999;
            display: -webkit-flex;
            display: flex;

            -webkit-flex-direction: column;
            flex-direction: column;
        }

        .chatbox--tray {
            bottom: -520px;
        }

        /* .chatbox--closed {
            bottom: -450px;
        } */

        .chatbox .form-control:focus {
            border-color: #1f2836;
        }

        .chatbox__title,
        .chatbox__body {
            border-bottom: none;
        }

        .chatbox__title {
            min-height: 35px;
            padding-right: 10px;
            background-color: #1657A7;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            cursor: pointer;

            display: -webkit-flex;
            display: flex;

            -webkit-align-items: center;
            align-items: center;
        }

        .chatbox__title h6 {
            height: 35px;
            margin: 0 0 0 15px;
            line-height: 35px;
            position: relative;
            padding-left: 20px;

            -webkit-flex-grow: 1;
            flex-grow: 1;
        }

        .chatbox__title h6 a {
            color: #fff;
            max-width: 195px;
            display: inline-block;
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* .chatbox__title h6:before {
            content: '';
            display: block;
            position: absolute;
            top: 50%;
            left: 0;
            width: 12px;
            height: 12px;
            background: #4CAF50;
            border-radius: 6px;

            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        } */

        .chatbox__title__close {
			font-size:24px;
            border: none;
            background-color: transparent;
			color: white;
            /* outline: 0; */
            /* opacity: 0.5; */
            /* cursor: pointer; */

            /* -webkit-transition: opacity 200ms; */
            /* transition: opacity 200ms; */
        }

        .chatbox__body,
        .chatbox__credentials {
            border-top: 0;
            background-color: #DCDCDC;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;

            -webkit-flex-grow: 1;
            flex-grow: 1;
        }

        .chatbox__credentials {
            display: none;
        }

        .chatbox__credentials .form-control {
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .chatbox__body {
            overflow-y: auto;
        }

        .chatbox__body__message {
            position: relative;
        }

        .chatbox__body__message p {
            padding: 15px;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            -webkit-box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
            box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
        }

        .chatbox__body__message img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #fcfcfc;
            position: absolute;
            top: 15px;
        }

        .chatbox__body__message--left p {
            margin-left: 15px;
            padding-left: 30px;
            text-align: left;
            padding-top: 25px;
        }

        .chatbox__body__message--left img {
            left: -5px;
        }

        .chatbox__body__message--right p {
            margin-right: 15px;
            padding-right: 30px;
            text-align: right;
        }

        .chatbox__body__message--right img {
            right: -5px;
        }

        .chatbox__message {
            padding: 15px;
            min-height: 50px;
            outline: 0;
            resize: none;
            border: none;
            font-size: 12px;
            border: 1px solid #ddd;
            border-bottom: none;
            background-color: #fefefe;
        }

        .chatbox--empty {
            height: 262px;
        }

        .chatbox--empty.chatbox--tray {
            bottom: -212px;
        }

        .chatbox--empty.chatbox--closed {
            bottom: -262px;
        }

        .chatbox--empty .chatbox__body,
        .chatbox--empty .chatbox__message {
            display: none;
        }

        .chatbox--empty .chatbox__credentials {
            display: block;
        }

        .chatbox_timing {
            position: absolute;
            right: 10px;
            font-size: 12px;
            top: 2px;
        }

        .chatbox_timing ul {
            padding: 0;
            margin: 0
        }

        .chatbox_timing ul li {
            list-style: none;
            display: inline-block;
            margin-left: 3px;
            margin-right: 3px;
        }

        .chatbox_timing ul li a {
            display: block;
            color: #747474
        }

        .ul_msg {
            padding: 10px !important;
        }

        .chatbox__body__message--right .ul_section_full {
            margin-right: 15px;
            padding-right: 30px;
            text-align: right;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            -webkit-box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
            box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
            margin-bottom: 15px;
            padding-bottom: 5px;
            padding-top: 15px;
        }

        .chatbox__body__message--left .ul_section_full {

            margin-left: 15px;
            padding-left: 15px;
            text-align: left;
            padding-top: 15px;
            padding-bottom: 5px;
            margin-bottom: 15px;
            border-radius: 4px;
            font-size: 14px;
            background-color: #fff;
            -webkit-box-shadow: 1px 1px rgba(100, 100, 100, 0.1);
            box-shadow: 1px 1px rgba(100, 100, 100, 0.1);

        }

        .ul_msg {
            padding: 0;
            margin: 0px
        }

        .ul_msg li {
            list-style: none;
            display: block
        }

        .ul_msg2 {
            padding: 0;
            margin: 0px;
            text-align: right;
        }

        .ul_msg2 li {
            list-style: none;
            display: inline-block;
            margin-right: 15px;
        }

        .chatbox__body__message--right .chatbox_timing {
            position: absolute;
            left: 10px;
            font-size: 12px;
            top: 2px;
        }

        .chatbox__body__message--right .ul_msg2 {
            text-align: left
        }

        .chatbox__body__message--right .ul_msg2 li {
            list-style: none;
            display: inline-block;
            margin-left: 15px;
            margin-right: 0px
        }

        .chat_set_height {
            height: 40px;
            margin-top: 1px;
        }

        .chatbox22 .form-control:focus {
            border-color: #DCDCDC;
        }

        .width50 {
            width: 50%;
            float: left;
            background: #ECECEC;
        }

        /*======================Chat Box Ends=====================================================*/
        /*======================Message=====================================================*/
        .message_check {
            padding-top: 10px;
        }

        .messsade_date {
            text-align: left;
            padding-top: 9px;
        }

        .messsade_date a {
            color: #000;
        }

        .padleftright0 {
            padding-left: 0px;
            padding-right: 0px;
        }

        .message_box_area {
            color: #000;
            cursor: pointer;
        }

        .create_m {
            border: 1px solid #ccc !important;
        }

        .fileinput-button {
            float: left;
            margin-right: 4px;
            overflow: hidden;
            position: relative;
        }

        .fileinput-button {
            background: none repeat scroll 0 0 #eeeeee;
            border: 1px solid #e6e6e6;
            margin-top: 15px;
        }

        .fileinput-button {
            float: left;
            margin-right: 4px;
            overflow: hidden;
            position: relative;
        }

        .fileinput-button input {
            cursor: pointer;
            direction: ltr;
            font-size: 23px;
            margin: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform: translate(-300px, 0px) scale(4);
        }

        .fileupload-buttonbar .btn,
        .fileupload-buttonbar .toggle {
            margin-bottom: 5px;
        }

        .create_m:focus {
            border-color: #66afe9 !important;
            outline: 0 !important;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6) !important;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6) !important;
        }

        .col-lg-3.control-label {
            text-align: left;
        }
    </style>
    <!-- CHATBOX CIIA END -->
	


</head>
	<body bgcolor="#dddddd">

	<script type="text/javascript">
        $(function() {
			$("#trip").tabs({ fxFade: true, fxSpeed: "fast" });
			$("#leave").tabs({ fxFade: true, fxSpeed: "fast" });
			$("#bday").tabs({ fxFade: true, fxSpeed: "fast" });
			$("#reserv").tabs({ fxFade: true, fxSpeed: "fast" });

			$(".linkofficedb").click(function() {
				$("#frmOfficeDB").submit();
			});

			$(".linkhomedb").click(function() {
				$("#frmHomeDB").submit();
			});

		});
    </script>
	
			<table style="background-color:#05428C !important;background-image:url(https://www.colliers.id/intranet/images//bg_new.jpg) !important;border:0px !important;cellpadding:0px !important;cellspacing:0px !important;" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody>
					<tr>
						<td height="60" valign="middle" class="headerBzG" style="padding-top:12px;background-color:#1657A7 !important;background-image:none !important;padding-bottom:10px;text-align:center;width:200px !important;">
							<a href="https://www.colliers.id/intranet/">
								<img alt="Colliers International" src="https://www.colliers.id/intranet/images/ColliersLogoRGB.gif" border="0" height="60">
							</a>
						</td>
						<td height="60" valign="middle" class="headerdBG" width="auto">
							<img src="https://www.colliers.id/intranet/lib/tab/spacer_002.gif" alt="" border="0" height="1" width="15">
							<font size="5" color="#ffffff">Colliers Intranet</font>
						</td>
						<td height="60" valign="top" class="headesrBG">
						</td>
					</tr>
				</tbody>
			</table>
				<table cellpadding="0" cellspacing="0" width="100%">
				<tbody>
					<tr bgcolor="#bbbbbb" height="20">
						<td>
							<table cellpadding="1" cellspacing="1" height="100%" width="100%">
							<tbody>
								<tr>
			
          			<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
						<a href="#" class="MainNav">&nbsp;&nbsp;Home&nbsp;&nbsp;
						</a></nobr></td>
          			<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
						<a href="#" class="MainNav">&nbsp;&nbsp;Profile&nbsp;&nbsp;
						</a></nobr></td>
          			<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
						<a href="https://www.colliers.id/intranet/companyHoliday.php" class="MainNav">&nbsp;&nbsp;Company Holiday Schedule&nbsp;&nbsp;
						</a></nobr></td>
        			<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
						<a target="_blank" href="https://www.colliers.id/yiintranet/index.php/hr/employeedb/employee/contactlist" class="MainNav">&nbsp;&nbsp;Employee Contact List&nbsp;&nbsp;
						</a></nobr></td>
					<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
						<a href="https://www.colliers.id/yiintranet/index.php/hr/employeedb/employee/birthdaylist" class="MainNav">&nbsp;&nbsp;Employee Birthday &nbsp;&nbsp;
						</a></nobr></td>
					<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
						<a href="https://www.colliers.id/yiintranet/index.php/user/changePassword" class="MainNav">&nbsp;&nbsp;Change Password&nbsp;&nbsp;
						</a></nobr></td>
					<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
                        <a href="#" class="MainNav">&nbsp;&nbsp;Switch Account&nbsp;&nbsp;
                        </a></nobr></td>
      				<td class="MainNavBG" onmouseover="this.className=&#39;MainNavOverBG&#39;" onmouseout="this.className=&#39;MainNavBG&#39;"><nobr>
        				<a href="#" class="MainNav">&nbsp;&nbsp;Logout&nbsp;&nbsp;
						</a></nobr></td>
				
							<td width="45%"> </td>
							<td width="45%"> </td>
						</tr>
					</tbody>
					</table>
				</td>
			</tr>
			</tbody>
			</table>
			
	<table bgcolor="#FFFFFF" border="0" cellpadding="10" cellspacing="0" width="100%">
	<tbody>
  	<tr>
  		<td valign="top" width="180" bgcolor="#EBECED">
			<table class="moduletable" border="0" cellpadding="0" cellspacing="0">
			<tbody>
   	  				<tr>
      					<td><b>Didit Priyono</b><br><b>Senior Manager - Applications</b><br><b>Information &amp; Technology</b><br><b>PT. Colliers International Indonesia</b><br>		
             	  </td>
      				</tr>
				<tr>
					<th valign="top"><br><br><b>Applications</b></th>
				</tr>
				<tr>
					<td>
						<br><a href="https://www.colliers.id/selfass/index.php/attdBooking" target="blank" style="color:red;font-weight:bold;">Desk Booking</a>
						<br><br><a href="https://www.colliers.id/yiintranet/index.php/it/ticket/default/request" target="blank" style="color:red;font-weight:bold;">Submit IT Ticket</a>
					</td>
				</tr>
				<tr>
					<td style="width:200px !important;">
					
						<br><p><font style="font-weight: bold;font-size:12px;color:#336699;">Line of Business</font></p>
						
						<b>Advisory</b>

						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/vdo">Valuation System</a></td>
							</tr>
						</tbody></table>
						<br>
						
						<b>Transaction</b>

						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/intranet/apps/commission/">Commission/Fee Request</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/12mrc/">Commission/Fee Performance</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/newcontactdb">Contact Database</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/dealtracking">Deal Tracking System</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/industrialdb/">Industrial Property Database</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/newcontactdb/mylease_expiry.php">My Prospects</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/officedb/">Office Property Database</a></td>
							</tr><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/transaction/referral/">Referral Fee Approval</a></td>
							</tr>
							<tr>
								<td>
									<form style="margin:0px;" id="frmHomeDB" method="post" action="https://www.colliers.id/homedb/members/search.php?m=1">
										<input id="flogin" type="hidden" value="" maxlength="20" size="20" name="UserName">
										<input type="hidden" maxlength="20" size="20" name="Password" value="">
									</form>
									
									<a class="linkhomedb" href="javascript::void(0);">Residential Property Database</a>
								</td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/retaildb/">Retail Property Database</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/newcontactdb/potential-client-new.php">Potential Leads</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/researchdb/index.php/site/login/key/RW5jb2RlIHRvIEJhc2U2NCBmb3JtYXQgQ09sbGllcnMgSW5kb25lc2lhIDIwMjM1OQ==/id/ZHByaXlvbm8=">Research Database</a></td>
							</tr>
						</tbody></table>
            
						<br><b>Management</b>
  				  
						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://cfm-system.com/" target="_new">CFM System</a></td>
							</tr>
							<tr>
								<td><a href="https://billing.crems.id/" target="_new">CREMS Billing System</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/coe">COE Ticketing</a></td>
							</tr>
						</tbody></table>
						
						<br><p><font style="font-weight: bold;font-size:12px;color:#336699;">Support Services</font></p>
						
						<b>Finance &amp; Accounting</b>
  				  
						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/finance/araging">AR Aging</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/finance/ap">AP Aging</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/cashadvance">Cash Advance</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/finance/invoice">Colliers Invoice</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/expense">Expense Report</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/payment">Payment Received</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/finance/workingcapital/workingCapital/list">Payment Request</a></td>
							</tr>	
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/pettycash">Petty Cash</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/reference/default/finance">Policies</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/finance/profitability" style="color:#F00;">Profitability</a></td>
							</tr><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/finance/invoice/default/writeoff">Write Off</a></td>
							</tr>		
						</tbody></table>
						
						<br><b>General Admin</b>
						
						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/acovertime">AC Overtime Request</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/agreement">Agreement List</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/disposal/">Asset Disposal</a></td>
							</tr>	
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/attendance/attendance">Attendance</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/boardingpass/">Boarding Pass</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/book">Colliers Library</a></td>
							</tr>							
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/drvovertime/driver-overtime.php">Driver Overtime</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/excom">Excom Schedules</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/internet">Internet Report System</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/meetingreservation">Meeting Reservation</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/purchase">Purchase Request/Order</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/phone">Telephone Report System</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/purchase/purchase-request-travel.php?modul=trv">Travel Request/Order</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/lease">Vehicle List</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/vendor">Vendor Management</a></td>
							</tr>
						</tbody></table>
						
						<br><b>Marketing &amp; Communications</b>
  				  
						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/marcomm/business">BD Project Request Form</a></td>
							</tr>		
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/marcomm/project">MarCom Project Request Form</a></td>
							</tr>		
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/marcomm/pitchlog">Pitch Log List &amp; Report</a></td>
							</tr>	
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/reference/default/marcomm">Procedure / Flow Chart</a></td>
							</tr>	
						</tbody></table>
						
						<br><b>People &amp; Performance</b>
						
						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/survey/default/attendanceBooking">Attendance Booking</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/bpjs/">BPJS Form</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/regulation/regulation.php">Company Regulation</a></td>
							</tr>
							<tr>
								<td>
								<script language="javascript" type="text/javascript">
									function popupwindow(url, title, w, h) {
										var left = (screen.width/2)-(w/2);
										var top = (screen.height/2)-(h/2);
										return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
									} 
								</script>
								<a href="https://www.colliers.id/intranet/home.php#" onclick="popupwindow(&#39;https://www.colliers.id/yiintranet/index.php/it/reference/default/compensation&#39;, &#39;Compensation Standards&#39;, &#39;1024&#39;, &#39;500&#39;);">Compensation Standards</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/employeedb/employee/">Employee Database</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/gift">Gift / Gratuity Form</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/hrins/benefits.php">Health Insurance</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/survey/default/listsurvey">Health Survey</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/reference/default/hr">HR References</a></td>
							</tr>						
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/kpi">Key Performance Indicator</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/intranet/apps/leave">Leave/Overtime Management System</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/medical/reimbursement/form">Medical Reimbursement System</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/membership">Membership</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/employeedb/employee/chart">Organization Chart</a></td>
							</tr>							
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/training">Training</a></td>
							</tr>
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/hr/rhc/recruitment/create">Recruitment/Hiring/ Employment Change Request</a></td>
							</tr>
							              
						</tbody></table>
				
						<br><b>Information &amp; Technology</b>
						
						<table width="100%" border="0" cellspacing="3" cellpadding="0">
							<tbody><tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/inventory">Inventory System</a></td>
							</tr>        
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/reference">IT References</a></td>
							</tr>	  
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/it/ticket">IT Ticket</a></td>
							</tr>	  
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/sms/group/mobileGroup/sendMessage">SMS Gateway</a></td>
							</tr>              
							<tr>
								<td><a href="https://www.colliers.id/yiintranet/index.php/ga/inventory/default/supplies">Supplies Status</a></td>
							</tr>              
							
						</tbody></table>
					</td>
				</tr>
				<tr>
					<th valign="top"><br><br><b>Colliers Offices</b></th>
				</tr>
				<tr>
					<td>
						<br><strong>Colliers International Indonesia</strong><br>
						<b>Head Office</b><br>
						World Trade Center, 14F<br>
						Jl. Jend. Sudirman Kav. 29-31<br>
						Jakarta, 12920<br>
						Indonesia<br>
						Phone&nbsp;&nbsp;&nbsp; : 62(21) 3043-6888<br>
					</td>
				</tr>
			</tbody>
			</table></td>
  		<td valign="top">
        <h2>Welcome to Colliers Intranet!</h2>
        <h3>Thursday, 25-Jan-2024</h3>
        <table width="100%" border="0" cellspacing="1" cellpadding="1">
          <tbody><tr>
            <td valign="top">
            <p class="head2">Sick Leave</p>
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr>
                <td width="1%">  </td>
                <td>
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr bgcolor="#CCCCCC">
                <td width="25%"><b>Employee Name</b></td>
                <td width="25%"><b>Title</b></td>
                <td width="20%"><b>Division</b></td>
                <td width="30%"><b>Location / Project</b></td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td>Gina Okawati Puspasari</td>
                <td>Officer - Facility Administration</td>
                <td>Facilities Management</td>
                <td>WTC</td>
              </tr>
              <tr bgcolor="#EEEEEE">
                <td>Nofyta Dermawan</td>
                <td>Associate Director</td>
                <td>Residential Services</td>
                <td>WTC</td>
              </tr>
              <tr bgcolor="#FFFFFF">
                <td>Thia Nopiana Putri</td>
                <td>Senior Officer - Tenant Relation</td>
                <td>Real Estate Management Services</td>
                <td>Bank Indonesia (C,D)</td>
              </tr>

            </tbody></table>
            </td>
            </tr>
            </tbody></table><p class="head2">Business Trip / Training / Conference </p>

            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr>
                <td width="1%">  </td>
                <td id="leavetravel">

                  <div id="trip">
					<ul class="tabs-nav"><li class="tabs-selected"><a href="https://www.colliers.id/intranet/home.php#trip-1"><span>Today</span></a></li><li class=""><a href="https://www.colliers.id/intranet/home.php#trip-2"><span>Tomorrow</span></a></li></ul>
            <div id="trip-1" class="tabs-container">
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr bgcolor="#CCCCCC">
                <td width="25%"><b>Employee Name</b></td>
                <td width="25%"><b>Title</b></td>
                <td width="20%"><b>Division</b></td>
                <td width="20%"><b>Location / Project</b></td>
                <td width="10%"><b>Time</b></td>
              </tr>
            </tbody></table>
            </div>
            <div id="trip-2" class="tabs-container tabs-hide">
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr bgcolor="#CCCCCC">
                <td width="25%"><b>Employee Name</b></td>
                <td width="25%"><b>Title</b></td>
                <td width="20%"><b>Division</b></td>
                <td width="20%"><b>Location / Project</b></td>
                <td width="10%"><b>Time</b></td>
              </tr>
            </tbody></table>
            </div>
            </div></td></tr></tbody></table>
            
            <p class="head2">On Leave (Other)</p>
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr>
                <td width="1%">  </td>
                <td id="leaveother">

                <div id="leave">
					<ul class="tabs-nav"><li class="tabs-selected"><a href="https://www.colliers.id/intranet/home.php#leave-1"><span>Today</span></a></li><li class=""><a href="https://www.colliers.id/intranet/home.php#leave-2"><span>Tomorrow</span></a></li></ul>
				<div id="leave-1" class="tabs-container">
				<table width="100%" border="0" cellspacing="1" cellpadding="1">
				  <tbody><tr bgcolor="#CCCCCC">
					<td width="25%"><b>Employee Name</b></td>
					<td width="25%"><b>Title</b></td>
					<td width="20%"><b>Division</b></td>
					<td width="20%"><b>Location / Project</b></td>
					<td width="10%"><b>Time</b></td>
				  </tr>
						<tr bgcolor="#FFFFFF">
							<td>Evan Vincent Karta</td>
							<td>Senior Officer - Operations</td>
							<td>Facilities Management</td>
							<td>WTC</td>
							<td>08:30 - 17:30</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td>Iskandar Dinata </td>
							<td>Manager - Quality Control</td>
							<td>Facilities Management</td>
							<td>WTC</td>
							<td>08:30 - 17:00</td>
						</tr>
						<tr bgcolor="#FFFFFF">
							<td>Maria Karmelinda Asten</td>
							<td>Senior Account Executive</td>
							<td>Residential Services</td>
							<td>WTC</td>
							<td>08:30 - 17:30</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td>Maryono</td>
							<td>Driver</td>
							<td>Operations</td>
							<td>WTC</td>
							<td>08:30 - 17:30</td>
						</tr>
						<tr bgcolor="#FFFFFF">
							<td>Wita Zakiah</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>Menara Batavia</td>
							<td>08:30 - 17:30</td>
						</tr>
				</tbody></table>
				</div><div id="leave-2" class="tabs-container tabs-hide">
				<table width="100%" border="0" cellspacing="1" cellpadding="1">
				  <tbody><tr bgcolor="#CCCCCC">
					<td width="25%"><b>Employee Name</b></td>
					<td width="25%"><b>Title</b></td>
					<td width="20%"><b>Division</b></td>
					<td width="20%"><b>Location / Project</b></td>
					<td width="10%"><b>Time</b></td>
				  </tr>
						  <tr bgcolor="#FFFFFF">
							<td>Aziz Mardi</td>
							<td>Manager - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#EEEEEE">
							<td>Fiqri Nurul Pajriyah</td>
							<td>Secretary/Admin Assistant</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#FFFFFF">
							<td>Hilman Amir</td>
							<td>Manager - Project Management</td>
							<td>Project Management</td>
							<td>Danamon - 50 branch Transformation</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#EEEEEE">
							<td>Maria Karmelinda Asten</td>
							<td>Senior Account Executive</td>
							<td>Residential Services</td>
							<td>WTC</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#FFFFFF">
							<td>Maria Margaretha Wirasetya</td>
							<td>Officer - Operations</td>
							<td>Facilities Management</td>
							<td>Bank UOB Indonesia</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#EEEEEE">
							<td>Maryono</td>
							<td>Driver</td>
							<td>Operations</td>
							<td>WTC</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#FFFFFF">
							<td>Muhammad Ansharullah</td>
							<td>Assistant Manager - Safety</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#EEEEEE">
							<td>Sahlani</td>
							<td>Electrical Technical Support</td>
							<td>Real Estate Management Services</td>
							<td>Sentul Tower Apartment</td>
							<td>08:30 - 17:30</td>
						  </tr>
						  <tr bgcolor="#FFFFFF">
							<td>Wita Zakiah</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>Menara Batavia</td>
							<td>08:30 - 17:30</td>
						  </tr></tbody></table>
            </div>
            </div></td></tr></tbody></table>
            
					<p class="head2">Unexplained/Unapproved Absence</p>
						<table width="100%" border="0" cellspacing="1" cellpadding="1">
						  <tbody><tr>
							<td width="1%">  </td>
							<td>
					<table width="100%" border="0" cellspacing="1" cellpadding="1">
					  <tbody><tr bgcolor="#CCCCCC">
						<td width="25%" "=""><b>Employee Name</b></td>
						<td width="25%"><b>Title</b></td>
						<td width="20%"><b>Division</b></td>
						<td width="30%"><b>Location / Project</b></td>
					  </tr><tr bgcolor="#EEEEEE">
							<td>Adrian Bayuardi Adenan</td>
							<td>Senior Officer - Civil</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Andi Setiawan</td>
							<td>Manager - HSE</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Arif Suprihatno</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>Citra Living</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Auliya Atika Fadhilah</td>
							<td>Assistant Manager</td>
							<td>Facilities Management</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Bayu Kurniawan</td>
							<td>Assistant Manager - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Bobby Anugrah Firdaus</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Bryan Skylar Kaiya Putra</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>Marigold</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Budiono Mangunsaponco</td>
							<td>Senior Accountant</td>
							<td>Finance</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Buntaran</td>
							<td>Senior Officer - Civil</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Cindy Angelina</td>
							<td>Senior Officer - Project Management</td>
							<td>Project Management</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Devent Ginting </td>
							<td>Senior Officer - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Fadlie Azamy Djamal</td>
							<td>Senior Officer - HSE</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Farid Maulid Hakim</td>
							<td>Assistant Manager - Civil</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Feri Dwi Sukma</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>The 18 Office Park - Kalma Propertindo Jaya, PT.</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Gary Kenneth Lovett</td>
							<td>Senior Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>District 8</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Gathot Susanto</td>
							<td>Technician</td>
							<td>Facilities Management</td>
							<td>Danamon, Bank Danamon Indonesia Tbk., PT</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Hariyanto</td>
							<td>Senior Officer - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Hilman Amir</td>
							<td>Manager - Project Management</td>
							<td>Project Management</td>
							<td>Danamon - 50 branch Transformation</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>I Kadek Rai Novembri Tenaya</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Kasworo</td>
							<td>Manager - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Malik Sahroni</td>
							<td>Assistant Manager - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Mochammad Yunus</td>
							<td>Senior Officer - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Moehamad Djuni Duwijanto</td>
							<td>Portfolio Manager</td>
							<td>Real Estate Management Services</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Mona Yulinda</td>
							<td>Senior Officer - HSE</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Muarifin Umar Shodiq</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>South Hills</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Muhammad Ansharullah</td>
							<td>Assistant Manager - Safety</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Oky Ryanda</td>
							<td>Senior Officer - Finance Support</td>
							<td>Real Estate Management Services</td>
							<td>Botanica Apartment</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Pitho Aldo Gunawan</td>
							<td>Officer - Safety</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Prisko Galaxy</td>
							<td>Manager - Project Management</td>
							<td>Project Management</td>
							<td>Novo Nordisk D&amp;B new office</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>R. Ardi Wibowo</td>
							<td>Officer - Operations</td>
							<td>Facilities Management</td>
							<td>UNTAR</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>R. Djoko Setyawan</td>
							<td>Senior Building Manger</td>
							<td>Real Estate Management Services</td>
							<td>The Manhattan Square - Sumber Mesin Raya, PT</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Rahmat Daresa Alam</td>
							<td>Associate Director - Project Management</td>
							<td>Project Management</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Rb. Arian Dwi Cahyo</td>
							<td>Senior Officer -  Operations</td>
							<td>Facilities Management</td>
							<td>Bank UOB Indonesia</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Riswanto</td>
							<td>Technician</td>
							<td>Facilities Management</td>
							<td>Embassy of the Republic of Singapore</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Ruhul Meka</td>
							<td>Associate Director</td>
							<td>Office Services</td>
							<td>The Manhattan Square - Sumber Mesin Raya, PT</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Sandra Novita</td>
							<td>Assistant Manager - Marketing &amp; Communications</td>
							<td>Marketing &amp; Communications</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Shintia Irawati</td>
							<td>Building Manager</td>
							<td>Real Estate Management Services</td>
							<td>Generali Tower</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Sofyan Hadi</td>
							<td>Senior Officer - HSE</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Stella Belinda Kartika Putri</td>
							<td>Officer - Business Development</td>
							<td>Real Estate Management Services</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Subhan Akbar Adinata</td>
							<td>Senior Officer - Engineer</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Tia Sri Widyaningsih</td>
							<td>Senior Officer - Housekeeping</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia (C,D)</td>
						  </tr><tr bgcolor="#FFFFFF">
							<td>Vendi Andreas</td>
							<td>Senior Manager - A</td>
							<td>Advisory Services</td>
							<td>WTC</td>
						  </tr><tr bgcolor="#EEEEEE">
							<td>Widagdha Rijalullah</td>
							<td>Senior Officer - HSE</td>
							<td>Real Estate Management Services</td>
							<td>Bank Indonesia Tipikal Arsek</td>
						  </tr>
						</tbody></table>
						</td>
						</tr>
						</tbody></table>

            <p class="head2">Birthdays</p>
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody><tr>
                <td width="1%">  </td>
                <td>
                <div id="bday">
					<ul class="tabs-nav">
						<li class="tabs-selected"><a href="https://www.colliers.id/intranet/home.php#bday-1"><span>Today</span></a></li>
						<li class=""><a href="https://www.colliers.id/intranet/home.php#bday-2"><span>Tomorrow</span></a></li>
					</ul>
                  <div id="bday-1" class="tabs-container">

                  <table width="100%" border="0" cellspacing="1" cellpadding="1">
                    <tbody><tr bgcolor="#CCCCCC">
                      <td width="25%"><b>Employee Name</b></td>
                      <td width="25%"><b>Title</b></td>
                      <td width="50%"><b>Division</b></td>
                    </tr><tr><td colspan="3">No employee birthday.</td></tr>
				</tbody></table>
				</div>
				<div id="bday-2" class="tabs-container tabs-hide">
					<table width="100%" border="0" cellspacing="1" cellpadding="1">
                    <tbody><tr bgcolor="#CCCCCC">
                      <td width="25%"><b>Employee Name</b></td>
                      <td width="25%"><b>Title</b></td>
                      <td width="50%"><b>Division</b></td>
                    </tr>
                    <tr bgcolor="#FFFFFF">
                      <td>Ignasius Adinugroho</td>
                      <td>Building Manager</td>
                      <td>Real Estate Management Services</td>
                    </tr>
                  </tbody></table>
                  </div>
                </div></td>
              </tr>
            </tbody></table>
            
            <p class="head2">Reservation</p>
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
				<tbody><tr>
					<td width="1%">  </td>
					<td>
					<div id="reserv">
						<ul class="tabs-nav">
							<li class="tabs-selected"><a href="https://www.colliers.id/intranet/home.php#reserv-1"><span>Today</span></a></li>
							<li class=""><a href="https://www.colliers.id/intranet/home.php#reserv-2"><span>Tomorrow</span></a></li>
						</ul><div id="reserv-1" class="tabs-container">


<table class="items span-24" border="0" cellpadding="2" cellspacing="0" style="width:100%;">
	<tbody><tr style="background-color:#cccccc;">
		<th rowspan="3" style="border-right:1px solid #FFFFFF !important;">Name</th>
		<th colspan="40" style="border-bottom:1px solid #FFFFFF !important;">Hour</th>
	</tr>
	<tr style="background-color:#cccccc;">
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">08.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">09.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">09.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">10.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">10.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">11.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">11.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">12.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">12.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">13.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">13.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">14.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">14.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">15.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">15.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">16.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">16.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">17.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">17.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">18.00
	</td></tr>
	<tr style="background-color:#cccccc;">
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
	</tr>
	<tr>
		<td style="background-color:#E7F4FA" colspan="42"><b>Meeting Room</b></td>
	</tr>
	
			
		<tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Ambon Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="7" class="tooltips" colspan="4" bgcolor="#D6B9D0" title="Putri - CFM (09:00-10:00)">Putri - CF...</td>
									<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="9" class="tooltips" colspan="2" bgcolor="#b64242" title="Ruby-Jane - Discussion Jakarta After IKN - Office (10:00-10:30)">Rub...</td>
								<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Denpasar Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="11" class="tooltips" colspan="8" bgcolor="#944D88" title="Angel - CDB Meeting (09:00-11:00)">Angel - CD...</td>
								<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Jabodetabek Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="11" class="tooltips" colspan="4" bgcolor="#944D88" title="Suryo - Menara Thamrin (10:00-11:00)">Suryo - Me...</td>
								<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="23" class="tooltips" colspan="2" bgcolor="#b64242" title="Ruby-Jane - Shoot BU Promotion - Hospitality (13:30-14:00)">Rub...</td>
									<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="27" class="tooltips" colspan="4" bgcolor="#b64242" title="Ruby-Jane - Shoot BU Promotion - Hospitality (14:00-15:00)">Ruby-Jane ...</td>
								<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Jakarta Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="11" class="tooltips" colspan="8" bgcolor="#fa891f" title="Daisy - Office &amp; Marcom (09:00-11:00)">Daisy - Of...</td>
								<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Manado Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="23" class="tooltips" colspan="22" bgcolor="#d25cff" title="Andhini - On-boarding New Joiner - PM (08:30-14:00)">Andhini - On-boardin...</td>
								<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Medan Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Semarang Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="7" class="tooltips" colspan="4" bgcolor="#597e10" title="Alia - Damara Village Discussion (09:00-10:00)">Alia - Dam...</td>
								<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="33" class="tooltips" colspan="6" bgcolor="#999999" title="Lulu - Concall (15:00-16:30)">Lulu - Con...</td>
								<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Surabaya Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="15" class="tooltips" colspan="8" bgcolor="#1EFFDB" title="Christin - Christina Ng (10:00-12:00)">Christin -...</td>
								<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Yogyakarta Training Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;border-right:1px solid #FFFFFF !important;" nowrap="" id="39" class="tooltips" colspan="14" bgcolor="#d25cff" title="Lina - Peserta Training BMEP (14:30-18:30)">Lina - Peserta ...</td>
								<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
					    </tr>
    
    <tr>
		<td style="background-color:#E7F4FA;border-top:2px solid #666666;" colspan="44"><b>Phone Booth</b></td>
	</tr>
			
		<tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 1</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;" nowrap="" id="" class="tooltips" colspan="14" bgcolor="#738AAD" title="Vega - Google Indonesia (12:30-16:00)">Vega - Goo...</td>
								<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 2</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 3</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
										<td style="color:#000000;border-bottom:1px solid #FFFFFF !important;" nowrap="" id="" class="tooltips" colspan="4" bgcolor="#944D88" title="Tasha - Fit Hub Agreement (13:00-14:00)">Tasha - Fi...</td>
								<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 4</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
					    </tr>
    
    <!--
    <tr>
		<td style='background-color:#E7F4FA;border-top:2px solid #666666;' colspan='42'><b>Projector</b></td>
	</tr>
			
		<tr bgcolor='#FFFFFF' style='border-bottom:1px solid #FFFFFF !important;'>
			<td nowrap style='border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;'>Projector A (Panasonic PT-LB3EA)</td>
							<td id="0" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="1" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="2" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="3" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="4" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="5" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="6" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="7" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="8" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="9" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="10" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="11" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="12" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="13" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="14" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="15" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="16" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="17" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="18" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="19" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="20" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="21" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="22" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="23" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="24" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="25" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="26" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="27" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="28" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="29" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="30" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="31" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="32" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="33" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="34" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="35" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="36" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="37" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="38" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="39" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
							
		<tr bgcolor='#dadada' style='border-bottom:1px solid #FFFFFF !important;'>
			<td nowrap style='border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;'>Projector B (Panasonic PT-LB3EA)</td>
							<td id="0" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="1" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="2" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="3" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="4" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="5" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="6" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="7" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="8" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="9" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="10" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="11" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="12" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="13" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="14" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="15" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="16" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="17" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="18" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="19" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="20" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="21" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="22" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="23" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="24" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="25" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="26" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="27" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="28" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="29" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="30" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="31" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="32" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="33" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="34" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="35" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="36" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="37" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="38" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="39" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
					    </tr>
    <tr>
		<td style='background-color:#E7F4FA;border-top:2px solid #666666;' colspan='42'><b>Presentation Laptop</b></td>
	</tr>
			
		<tr bgcolor='#FFFFFF' style='border-bottom:1px solid #FFFFFF !important;'>
			<td nowrap style='border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;'>Presentation Laptop A</td>
							<td id="0" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="1" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="2" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="3" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="4" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="5" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="6" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="7" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="8" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="9" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="10" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="11" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="12" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="13" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="14" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="15" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="16" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="17" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="18" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="19" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="20" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="21" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="22" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="23" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="24" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="25" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="26" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="27" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="28" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="29" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="30" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="31" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="32" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="33" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="34" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="35" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="36" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="37" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="38" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="39" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
							
		<tr bgcolor='#dadada' style='border-bottom:1px solid #FFFFFF !important;'>
			<td nowrap style='border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;'>Presentation Laptop B</td>
							<td id="0" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="1" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="2" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="3" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="4" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="5" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="6" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="7" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="8" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="9" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="10" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="11" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="12" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="13" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="14" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="15" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="16" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="17" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="18" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="19" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="20" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="21" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="22" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="23" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="24" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="25" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="26" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="27" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="28" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="29" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="30" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="31" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="32" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="33" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="34" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="35" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="36" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="37" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="38" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
									<td id="39" nowrap style='border-bottom:1px solid #FFFFFF !important;'>&nbsp;</td>
					    </tr>
    
    -->
    </tbody></table>
</div><div id="reserv-2" class="tabs-container tabs-hide">


<table class="items span-24" border="0" cellpadding="2" cellspacing="0" style="width:100%;">
	<tbody><tr style="background-color:#cccccc;">
		<th rowspan="3" style="border-right:1px solid #FFFFFF !important;">Name</th>
		<th colspan="40" style="border-bottom:1px solid #FFFFFF !important;">Hour</th>
	</tr>
	<tr style="background-color:#cccccc;">
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">08.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">09.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">09.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">10.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">10.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">11.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">11.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">12.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">12.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">13.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">13.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">14.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">14.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">15.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">15.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">16.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">16.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">17.00</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">17.30</td>
		<td colspan="2" style="border-bottom:1px solid #FFFFFF !important;">18.00
	</td></tr>
	<tr style="background-color:#cccccc;">
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
		<th style="border-right:1px solid #FFFFFF !important;">&nbsp;</th>
		<th></th>
	</tr>
	<tr>
		<td style="background-color:#E7F4FA" colspan="42"><b>Meeting Room</b></td>
	</tr>
	
			
		<tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Ambon Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Denpasar Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Jabodetabek Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Jakarta Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Manado Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Medan Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Semarang Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Surabaya Meeting Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Yogyakarta Training Room</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
					    </tr>
    
    <tr>
		<td style="background-color:#E7F4FA;border-top:2px solid #666666;" colspan="44"><b>Phone Booth</b></td>
	</tr>
			
		<tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 1</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 2</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#FFFFFF" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 3</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
							
		</tr><tr bgcolor="#dadada" style="border-bottom:1px solid #FFFFFF !important;">
			<td nowrap="" style="border-right:1px solid #FFFFFF !important;border-bottom:1px solid #FFFFFF !important;">Phone Booth 4</td>
							<td id="0" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="1" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="2" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="3" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="4" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="5" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="6" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="7" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="8" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="9" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="10" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="11" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="12" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="13" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="14" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="15" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="16" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="17" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="18" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="19" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="20" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="21" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="22" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="23" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="24" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="25" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="26" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="27" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="28" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="29" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="30" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="31" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="32" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="33" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="34" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="35" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="36" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="37" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="38" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
									<td id="39" nowrap="" style="border-bottom:1px solid #FFFFFF !important;">&nbsp;</td>
					    </tr>
    </tbody></table>
    


</div></div></td></tr></tbody></table></td>
				</tr>
			</tbody></table>
		</td>
  	</tr>
	</tbody>
	</table>
			<table bgcolor="#D3D3D3" border="0" cellpadding="0" cellspacing="0" width="100%">
				<tbody><tr>
					<td bgcolor="#E6F4FA" style="padding:20px">
						Copyright &copy; 2024 Colliers International&nbsp;&nbsp; <a href="http://www.colliers.com/en-us/privacypolicy">Privacy Policy</a>&nbsp;&nbsp;<a href="http://www.colliers.com/en-us/termsofuse">Terms of Use</a><br> 
					</td>
				</tr>
			</tbody></table>
	

			<!-- CHATBOX CIIA START -->
			<div class="row">
				<div class="chatbox chatbox22 chatbox--tray">
					<div class="chatbox__title" style="text-align: center;">
						<h6 style="margin: 0px;padding-left:0px;"><a href="javascript:;">Colliers Intranet AI</a></h6>
						<span class="chatbox__title__close">
							<i class="fa fa-angle-up" id="minimize-icon"></i>
						</span>
					</div>
					<div class="chatbox__body">
						<iframe src="https://laravel-ai.test/iframe/chat?o=&p=" style="width:100%; height:100%;" frameBorder="0">
		
						</iframe>
					</div>
				</div>
			</div>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					var $chatbox = $('.chatbox');
					var $chatboxTitle = $('.chatbox__title');
					var $chatboxTitleClose = $('.chatbox__title__close');
					var $chatboxCredentials = $('.chatbox__credentials');
					$chatboxTitle.on('click', function() {
						$chatbox.toggleClass('chatbox--tray');
						if($(".chatbox__title__close #minimize-icon").attr('class') == 'fa fa-angle-up'){
							$(".chatbox__title__close #minimize-icon").attr('class', 'fa fa-angle-down');
						}else{
							$(".chatbox__title__close #minimize-icon").attr('class', 'fa fa-angle-up');
						}						
					});
					$chatbox.on('transitionend', function() {
						if ($chatbox.hasClass('chatbox--closed')) $chatbox.remove();
					});
				});
			</script>
			<!-- CHATBOX CIIA END -->

	</body></html>