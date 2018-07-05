<script>   
$(function () {

var resp = <?php echo $status ?>;
var barData = {
        labels: [],
        datasets: [
            {
                 label: "My Second dataset",
                fillColor: "rgba(26,179,148,0.5)",
                strokeColor: "rgba(26,179,148,0.8)",
                highlightFill: "rgba(26,179,148,0.75)",
                highlightStroke: "rgba(26,179,148,1)",
                data: []
            }

        ]

    };
    

    var barOptions = {
        scaleBeginAtZero: true,
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        barShowStroke: true,
        barStrokeWidth: 2,
        barValueSpacing: 5,
        barDatasetSpacing: 1,
        responsive: true,
    }
    for( var i=0 ; i < resp.length; i++)
      {
        barData.labels[i]=resp[i].status;
        barData.datasets[0].data[i]=resp[i].jumlah;
       }
    var ctx = document.getElementById("status").getContext("2d");
    var myNewChart = new Chart(ctx).Bar(barData, barOptions);
    
 });
</script>
