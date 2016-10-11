<?php
  include 'security/session.php';

  $username = $_SESSION['login_user'];

  $dateobj = date_create(); //Creating Date Object
  $timestamp = date_timestamp_get($dateobj); // Getting Timestamp
  $date = date("d/m/Y",$timestamp);
  $day = date("l",$timestamp);
  
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Timetable</title>
      <link rel="stylesheet" href="css/table.css">
      <link rel="stylesheet" href="css/nav.css">  
      <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> 
      <script type="text/javascript" src="js/book.js"></script> 
  </head>
  <body>


<!--navigation bar-->
    <h2>Welcome &nbsp;&nbsp;</h2><h1>&nbsp;&nbsp;<?php echo $username; ?></h1>
    <input id="burger" type="checkbox" />
    <label for="burger"> <span></span> <span></span> <span></span> </label>
    <nav>
      <ul>
        <li><a href="#">Seminar Hall</a></li>
        <li><a href="#">Projector</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav><br><br><br><br><br><br>

<!--navigation bar-->


    <!-- Booking Timetable -->
    <div class='tab' style="text-align: center;">
      <table border='1' cellpadding='0' cellspacing='0'>
        <tr class='days'>
          <th><font size="3">Schedule</font> </th>
          <th>1st Hour</th>
          <th>2nd Hour</th>
          <th>3rd Hour</th>
          <th>4th Hour</th>
          <th>5th Hour</th>
          <th>6th Hour</th>
          <th>7th Hour</th>
        </tr>
        <?php for ($i=0; $i <30; $i++) { 
		      $dbdate =  date("Y-m-d",$timestamp);
      		$select_sql = "SELECT * FROM booking WHERE bookdate = '$dbdate'";
          $select_result = mysqli_query($db,$select_sql);
          $query_result = mysqli_fetch_array($select_result);
        ?>
        <tr>
          <td class='time'><font size="3"><?php echo $date; ?></font><br><br><?php echo $day; ?></td>
          <!-- Hour 1 -->
          <?php if ($query_result['hour1'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','1')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour1'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','1')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour1']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>

          <!-- Hour 2 -->
          <?php if ($query_result['hour2'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','2')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour2'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','2')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour2']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>

          <!-- Hour 3 -->
          <?php if ($query_result['hour3'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','3')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour3'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','3')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour3']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>

          <!-- Hour 1 -->
          <?php if ($query_result['hour4'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','4')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour4'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','4')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour4']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>

          <!-- Hour 1 -->
          <?php if ($query_result['hour5'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','5')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour5'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','5')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour5']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>

          <!-- Hour 1 -->
          <?php if ($query_result['hour6'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','6')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour6'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','6')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour6']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>

          <!-- Hour 1 -->
          <?php if ($query_result['hour7'] == ''){ ?>
            <td class='green' data-tooltip='Available'><a href="javascript://" onClick="updateBookstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','7')">BOOK NOW</a></td>
          <?php }else { 
                    if ($query_result['hour7'] == $username){ ?>
                      <td class='orange' data-tooltip='Click to cancel'><a href="javascript://" onClick="updateCancelstatus('<?php echo $dbdate; ?>','<?php echo $day; ?>','7')">CANCEL BOOKING</a></td>
                      <?php } else { ?>
            <td class='red' data-tooltip='Booked by <?php echo $query_result['hour7']; ?>'>NOT AVAILABLE</td>
          <?php } } ?>
        </tr>
        <?php 
          $timestamp = $timestamp + 86400;
          $date = date("d/m/Y",+$timestamp);
          $day = date("l",+$timestamp);
          if ($day == "Sunday") {
            $timestamp = $timestamp + 86400;
            $date = date("d/m/Y",+$timestamp);
            $day = date("l",+$timestamp);
            $i=$i+1;
          }
        } ?>
      </table>
    </div>  
    <!-- / Booking Timetable -->
  </body>
</html>