<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('grid');
$this->load->helper('print_r2');
?>
<!DOCTYPE html>

<html>
<header>
  <style type="text/css">
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    width: 100%;
  }
  th{
    background-color: lightgrey;
  }
  textarea{
    width: 100%;
    border: 2px solid black;
  }
  </style>
</header>
<body>
<?php
  echo form_open('SQL/submitQuery');
  echo form_submit('querySubmit','Execute');
  echo "<br />";
  if (isset($queryText)) {
    echo form_textarea('query', $queryText);
  }
  else {
    echo form_textarea('query');
  }

  echo form_close();
?>
<?php
if (isset($result)) {
  echo "Rows: ".$result->num_rows()." | Elapsed Time: ".$elapsed_time." sec";
  grid_build($result);
}
 ?>
</body>
</html>
