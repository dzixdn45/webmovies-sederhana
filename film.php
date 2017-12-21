<?php
require_once("koneksi.php");
function produk(){
    $numPerCol = 4;
    $query = mysql_query("SELECT * FROM film LIMIT 8");
    $numCols = ceil(mysql_num_rows($query) / $numPerCol);
    echo "<link rel='stylesheet' href='css/bootstrap.min.css'><script src='jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script><div class='row'><div class='container'><table table-bordered>";
    echo "<tr>";
    for($col = 1; $col <= $numCols; $col++) {
   	for($row = 0; $row < $numPerCol; $row++) {
            $resultRow = mysql_fetch_array($query);
            if($resultRow == false) {
               break;
            }
	    echo "<td width='10%'>";
            echo '<b>' . $resultRow['barang_nama'] . '</b>' . 
	    '<br><img width=100px height=100px src="' . $resultRow['video'] . '"><br/><br/>';?>
            <button onclick="window.open('detail_film.php?barang_id=<?php echo $resultRow['barang_id']; ?>')">Detail</button>
            <?php
            echo "</td>";		
         }
         echo "</tr>";
     }
     echo "</table></div></div>";
 }
?>
