<?php
	
?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
<script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>
  

      

    <!-- <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js"></script> -->

  

    <script>
    	$(document).ready(function() {
          $("#exploremore").DataTable({
            aaSorting: [],
            responsive: true,

            columnDefs: [
              {
                responsivePriority: 1,
                targets: 0
              },
              {
                responsivePriority: 2,
                targets: -1
              }
            ]
          });

          $(".dataTables_filter input")
            .attr("placeholder", "Search here...")
            .css({
              width: "300px",
              display: "inline-block"
            });

          $('[data-toggle="tooltip"]').tooltip();
        });

    </script>
  </body>
</html>