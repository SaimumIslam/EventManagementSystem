<h3>My events</h3>
      <p>
        <?php 
        require '../ConnectionDb/connection.php';

        $userid = $_SESSION['userid'];
        $sql = "SELECT * FROM event_creation where user_id = '$userid' order by(event_start_date) ASC";
        $result = mysqli_query($conn, $sql);
      echo "<table>";
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr><a href='details.php?id={$row['event_id']}'><p><b>{$row['event_title']}</b><small><i> ( organized by {$row['organized_by']} )</i></small></p></a><tr>";
      }
      echo "</table>";
         ?>
      </p>