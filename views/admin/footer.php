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
    <script src="<?php echo base_url(); ?>/assets/js/tables/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/tables/vfs_fonts.js"></script>
<script>
      $(document).ready(function() {
        //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
        var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

        //generate random number for charts
        randNum = function() {
          return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
        };

        var d1 = [];
        //var d2 = [];

        //here we generate data for chart
        for (var i = 0; i < 30; i++) {
          d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
          //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
        }

        var chartMinDate = d1[0][0]; //first day
        var chartMaxDate = d1[20][0]; //last day

        var tickSize = [1, "day"];
        var tformat = "%d/%m/%y";

        //graph options
        var options = {
          grid: {
            show: true,
            aboveData: true,
            color: "#3f3f3f",
            labelMargin: 10,
            axisMargin: 0,
            borderWidth: 0,
            borderColor: null,
            minBorderMargin: 5,
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 100
          },
          series: {
            lines: {
              show: true,
              fill: true,
              lineWidth: 2,
              steps: false
            },
            points: {
              show: true,
              radius: 4.5,
              symbol: "circle",
              lineWidth: 3.0
            }
          },
          legend: {
            position: "ne",
            margin: [0, -25],
            noColumns: 0,
            labelBoxBorderColor: null,
            labelFormatter: function(label, series) {
              // just add some space to labes
              return label + '&nbsp;&nbsp;';
            },
            width: 40,
            height: 1
          },
          colors: chartColours,
          shadowSize: 0,
          tooltip: true, //activate tooltip
          tooltipOpts: {
            content: "%s: %y.0",
            xDateFormat: "%d/%m",
            shifts: {
              x: -30,
              y: -50
            },
            defaultTheme: false
          },
          yaxis: {
            min: 0
          },
          xaxis: {
            mode: "time",
            minTickSize: tickSize,
            timeformat: tformat,
            min: chartMinDate,
            max: chartMaxDate
          }
        };
        var plot = $.plot($("#placeholder33x"), [{
          label: "Email Sent",
          data: d1,
          lines: {
            fillColor: "rgba(150, 202, 89, 0.12)"
          }, //#96CA59 rgba(150, 202, 89, 0.42)
          points: {
            fillColor: "#fff"
          }
        }], options);
      });
    </script>

    <script>
      $(document).ready(function() {
        $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
          type: 'bar',
          height: '125',
          barWidth: 13,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
          type: 'bar',
          height: '40',
          barWidth: 8,
          colorMap: {
            '7': '#a1a1a1'
          },
          barSpacing: 2,
          barColor: '#26B99A'
        });

        $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
          type: 'line',
          height: '40',
          width: '200',
          lineColor: '#26B99A',
          fillColor: '#ffffff',
          lineWidth: 3,
          spotColor: '#34495E',
          minSpotColor: '#34495E'
        });
      });
    </script>
    
      <script src="<?php echo base_url(); ?>/assets/js/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.flot.time.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/date.js"></script>


 