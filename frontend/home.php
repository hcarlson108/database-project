<?php
include_once 'header.php'
?>
<!-- main -->
<div class="homecontent">
  <div>
    <h2>Welcome!</h2>
    <p>Search for a Book or Movie below!</p>
  </div>
  <br />
  <form action="home.php" name="result" method="post">
    <input name="srchresult" type="text" />
    <input action="home.php" class="login" value="submit" type="submit">
  </form>
</div>


<div class="result-container">
  <div class="results">
    <table cellpadding="8" cellspacing="8">
      <tr>
        <th>Title</th>
        <th>genre</th>
        <th>Author</th>
      </tr>

      <?php
      $searching = $_POST["srchresult"];
      $sql = "SELECT * FROM Book WHERE BookName = \"" . $searching . "\";";
      $objecto = mysqli_query($conn, $sql);

      while ($results = mysqli_fetch_assoc($objecto)) {
        echo "<tr>";
        echo "<td>";
        echo $results["BookName"] . "<br>";
        echo "</td>";
        // $results->data_seek(0);
        echo "<td>";
        echo $results["Genre"];
        echo "</td>";
        // $results->data_seek(0);
        echo "<td>";
        echo $results["Author"];
        echo "</td>";

        echo "<td>";
        echo $results["ISBN"];
        echo "</td>";
        echo "</tr>";
      }
      ?>
    </table>
  </div>
</div>


</body>

</html>