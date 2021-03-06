<!DOCTYPE html>
<html>
  <head>
    <title>Part 2 | Calendar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="calendar.css">
  </head>

  <body>
    <?php
      date_default_timezone_set("America/New_York");
      $hours_to_show = 12;
      $date_time = date('l, F j, Y g:i:s A');
      $hour = get_hour_string();

      function get_hour_string() {
        $x = date('g');
        return $x;
      }
    ?>
    <h1>FALL 2016 STUDENT SCHEDULE</h1>
    <div class="container">
      <?php
        echo $date_time;
      ?>
      <table id="event_table" align="center">
        <tbody>
          <tr class="table_header">
            <td>Time</td>
            <td>Manandhar</td>
            <td>Henry</td>
            <td>Durham</td>
          </tr>
          <?php
            for($i=0; $i<$hours_to_show; $i++) {
              $hour = date("$hour", strtotime("+{$i} hours"));
              if($i%2==0) {
                echo "<tr class=\"even_row\">
                    <td>".date("$hour:00 A")."</td>
                    <td>OFF</td>
                    <td>OFF</td>
                    <td>OFF</td>
                  </tr>";
              } elseif($i%2==1) {
                echo "<tr class=\"odd_row\">
                    <td>".date("$hour:00 A")."</td>
                    <td>OFF</td>
                    <td>OFF</td>
                    <td>OFF</td>
                  </tr>";
              }
            }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
