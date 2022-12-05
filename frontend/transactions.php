<?php include "../dbinfo.inc"; ?>
<?php
  include_once 'header.php'
?>



    <table cellpadding="4" cellspacing="4" >
        <tr>
            <td>Enum</td>
            <td>Mnum</td>
            <td>DoC</td>
            <td>DoR</td>
            <td>MovieName</td>
            <td>ISBN</td>
            <td>MediaType</td>
        </tr>
        <?php
            $sql = "SELECT * FROM Checkout";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while($query_data = mysqli_fetch_row($result)){
                    echo "<tr>";
                    echo   "<td>",$query_data[0], "</td>",
                           "<td>",$query_data[1], "</td>",
                           "<td>",$query_data[2], "</td>",
                           "<td>",$query_data[3], "</td>",
                           "<td>",$query_data[4], "</td>",
                           "<td>",$query_data[5], "</td>",
                           "<td>",$query_data[6], "</td>";
                   echo "</tr>";
            }
            } else{
                echo "0 results";
            }
        ?>
  </body>
</htphp