$(function() {
  $.ajax({
    url: "https://11902804.pxl-ea-ict.be/Grafiek.php",
    type: "GET",
    success: function(data) {
      chartData = data;
      var chartProperties = {
        caption: "Temperatuur en lichtsensor",
        xAxisName: "Tijd",
        yAxisName: "Waarde",
        rotatevalues: "1",
        theme: "zune"
      };
      apiChart = new FusionCharts({
        type: "column2d",
        renderAt: "chart-container",
        width: "550",
        height: "350",
        dataFormat: "json",
        dataSource: {
          chart: chartProperties,
          data: chartData
        }
      });
      apiChart.render();
    }
  });
});
