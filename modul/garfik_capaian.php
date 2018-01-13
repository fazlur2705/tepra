<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
Highcharts.chart('container', {
  chart: {
      type: 'area'
  },
  title: {
      text: 'Grafik Pencapaian Penyerapan Anggaran Barang'
  },
  subtitle: {
      text: 'Source: acehjayakab.go.id'
  },
  xAxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei ', 'Jun ', 'Jul ','Agu','Okt','Nov','Des'],
      tickmarkPlacement: 'on',
      title: {
          enabled: false
      }
  },
  yAxis: {
      title: {
          text: 'Persen'
      },
      labels: {
          formatter: function () {
              return this.value / 1;
          }
      }
  },
  tooltip: {
      split: true,
      valueSuffix: ' '
  },
  plotOptions: {
      area: {
          stacking: 'normal',
          lineColor: '#666666',
          lineWidth: 1,
          marker: {
              lineWidth: 1,
              lineColor: '#666666'
          }
      }

  },
  series: [{
      name: 'Penyerapan Fisik (%)',
      data: [0, 0, 0, 0, 0, 0, 0,0,0,0,0,0]
  }, {
      name: 'Penyerapan Keuangan (%)',
      data: [0, 2, 0, 0, 0, 0, 0,0,0,0,0,0]
  }]
});
</script>
