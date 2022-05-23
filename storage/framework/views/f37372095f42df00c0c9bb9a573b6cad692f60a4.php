<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo e('/js/main.min.js'); ?>"></script>
<script src="<?php echo e('/js/vivus.min.js'); ?>"></script>
<script src="<?php echo e('/js/script.js'); ?>"></script>
<script src="<?php echo e('/plugins/apex/apexcharts.min.js'); ?>"></script>
<script src="<?php echo e('/js/graphs-scripts.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>
  $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>


<script>
  $(function(){
        //get the pie chart canvas
        var cData = JSON.parse(`<?php echo $chart_data; ?>`);
        var ctx = $("#pie-chart");
        //pie chart data
        var data = {
          labels: cData.label,
          datasets: [
            {
              label: "Users Count",
              data: cData.data,
              backgroundColor: [
                "#DEB887",
                "#A9A9A9",
                "#DC143C",
                "#F4A460",
                "#2E8B57",
                "#1D7A46",
                "#CDA776",
              ],
              borderColor: [
                "#CDA776",
                "#989898",
                "#CB252B",
                "#E39371",
                "#1D7A46",
                "#F4A460",
                "#CDA776",
              ],
              borderWidth: [1, 1, 1, 1, 1,1,1]
            }
          ]
        };
   
        //options
        var options = {
          responsive: true,
          title: {
            display: true,
            position: "top",
            // text: "Chart Pie ",
            fontSize: 18,
            fontColor: "#111"
          },
          legend: {
            display: true,
            position: "bottom",
            labels: {
              fontColor: "#333",
              fontSize: 16
            }
          }
        };
   
        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
          type: "pie",
          data: data,
          options: options
        });
   
    });
</script>


<script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $platform; ?>`);
      var ctx = $("#pie-chart-platform");
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          // text: "Chart Pie ",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
 
  });
</script>


<script>
  $(function(){
      //get the pie chart canvas
      var cData = JSON.parse(`<?php echo $device; ?>`);
      var ctx = $("#pie-chart-device");
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          // text: "Chart Pie ",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
 
  });
</script><?php /**PATH C:\Users\NSR-PC016\Documents\Fhizyel Nazareta Karel\freelance-project\gue-muda\resources\views/admin/js-analytic.blade.php ENDPATH**/ ?>