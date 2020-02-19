<?php
function grid_build($result)
{
  if (isset($result)) {
    // Get Headers =========================================================
    $header = $result->list_fields();

    //open table
    echo'<table>';
    //Populate table header
    foreach ($header as $title) {
      echo "<th>
      $title
      </th>";
    }
  //display rows
    foreach ($result->result() as $row)
    {
      //print_r2($row);
      echo "<tr>";
      foreach ($row as $data) {
        echo "<td>
        $data
        </td> ";
      }
      echo "</tr>";
    }
  }
  //close table
  echo "</table>";
}
?>
