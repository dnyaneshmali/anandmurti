<footer>
          <div class="pull-right">
            Anand Murti Group Of Companies Developed And Designed By <a href="https://colorlib.com">Softinfology</a>
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/validator.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/jquery.dataTables.min.js"></script>
    <script src=".<?php echo base_url(); ?>/assets/js/tables/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/datatables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/vfs_fonts.js"></script>

<script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
