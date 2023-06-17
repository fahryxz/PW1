@extends('layout.main')

@section('content')

  @if ($errors->any())
  
  @endif
    <div class="col-xl">
      <div class="mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Dashboard</h5>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                  </div>
                </div>
                <span>Hewan</span>
                <h3 class="card-title mb-2">{{count($hewans)}}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                  </div>
                </div>
                <span>Ruangan</span>
                <h3 class="card-title text-nowrap mb-1">{{count($rooms)}}</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                  </div>
                  
                </div>
                <span>Staff</span>
                <h3 class="card-title text-nowrap mb-1">Belum</h3>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
                  </div>
                  
                </div>
                <span>Customer</span>
                <h3 class="card-title text-nowrap mb-1">{{count($customers)}}</h3>
                
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
          <div class="card">
            <div class="row row-bordered g-0"> 
              <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
            </div>
            {{-- grafik --}}
          <script src="https://code.highcharts.com/highcharts.js"></script>
          <script src="https://code.highcharts.com/modules/exporting.js"></script>
          <script src="https://code.highcharts.com/modules/export-data.js"></script>
          <script src="https://code.highcharts.com/modules/accessibility.js"></script>

          <figure class="highcharts-figure">
              <div id="container"></div>
              <p class="highcharts-description">
                  A basic column chart comparing emissions by pollutant.
                  Oil and gas extraction has the overall highest amount of
                  emissions, followed by manufacturing industries and mining.
                  The chart is making use of the axis crosshair feature, to highlight
                  years as they are hovered over.
              </p>
          </figure>

          {{-- css --}}
          <style>
              .highcharts-figure,
              .highcharts-data-table table {
                  min-width: 310px;
                  max-width: 800px;
                  margin: 1em auto;
              }

              #container {
                  height: 400px;
              }

              .highcharts-data-table table {
                  font-family: Verdana, sans-serif;
                  border-collapse: collapse;
                  border: 1px solid #ebebeb;
                  margin: 10px auto;
                  text-align: center;
                  width: 100%;
                  max-width: 500px;
              }

              .highcharts-data-table caption {
                  padding: 1em 0;
                  font-size: 1.2em;
                  color: #555;
              }

              .highcharts-data-table th {
                  font-weight: 600;
                  padding: 0.5em;
              }

              .highcharts-data-table td,
              .highcharts-data-table th,
              .highcharts-data-table caption {
                  padding: 0.5em;
              }

              .highcharts-data-table thead tr,
              .highcharts-data-table tr:nth-child(even) {
                  background: #f8f8f8;
              }

              .highcharts-data-table tr:hover {
                  background: #f1f7ff;
              }

          </style>

          {{-- js --}}

          <script>
              Highcharts.chart('container', {
              chart: {
                  type: 'column'
              },
              title: {
                  text: 'Monthly Average Rainfall'
              },
              subtitle: {
                  text: 'Source: WorldClimate.com'
              },
              xAxis: {
                  categories: [
                      'a', 'b' , 'c'
                  ],
                  crosshair: true
              },
              yAxis: {
                  min: 0,
                  title: {
                      text: 'Rainfall (mm)'
                  }
              },
              tooltip: {
                  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                  footerFormat: '</table>',
                  shared: true,
                  useHTML: true
              },
              plotOptions: {
                  column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                  }
              },
              series: [{
                  name: 'Mahasiswa',
                  data: [1,2,3]

              }]
          });
          </script>
          </div>
          
        </div>   
      </div>
      
    </div>

@endsection