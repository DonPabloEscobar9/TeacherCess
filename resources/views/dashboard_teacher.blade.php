@extends('layouts_teacher.user_type.auth')

@section('content')

  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Registered teachers</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$teachers}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Registered students</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$students}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">Registered head</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$heads}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-capitalize font-weight-bold">All users</p>
                <h5 class="font-weight-bolder mb-0">
                  {{$allusers}}
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </div>
  <div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load("current", {packages:["corechart"]});
                    google.charts.setOnLoadCallback(drawChart);
                       function drawChart() {
                         var data = google.visualization.arrayToDataTable([
                             ['Role', 'Number'],
                             ['Teacher',     {{$teachers}}],
                             ['Headmaster',    {{$heads}}],
                             ['Student',     {{$students}}],
                             ['Admin',      {{$admin}}],
                           ]);

                         var options = {
                         title: 'Pie chart for registered users',
                         is3D: true,
                        };

                         var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                         chart.draw(data, options);
                          }
                 </script>
  
  
                    <div id="piechart_3d" style="width: 700px; height: 500px;"></div>
  

               </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card h-100 p-3">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('../assets/img/ivancik.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
          <h5 class="text-white font-weight-bolder mb-4 pt-2">TeacherCess</h5>
            <p class="text-white">You are welcome to TeacherCess. TeacherCess is teachers assessment system which involve data analysis to analyse teachers performance within the academic year.</p>
            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
              YOU ARE WELCOME
              <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="card-body px-0 pb-2">
        <div class="table-responsive">
               <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
               <script type="text/javascript">
               google.charts.load('current', {'packages':['corechart']});
               google.charts.setOnLoadCallback(drawVisualization);

                function drawVisualization() {
        // Some raw data (not necessarily accurate)
               var data = google.visualization.arrayToDataTable([
                 ['Academic year', 'Good', 'Poor', 'Average', 'Very Good', 'Excellent'],
                 ['2023/2024',  68,   30,   50,   70,   98],   
                ]);

                 var options = {
                     title : 'ANALYSIS ON APPEARANCE ',
                     vAxis: {title: 'Frequency'},
                     hAxis: {title: 'Academic Year'},
                     seriesType: 'bars',
                     series: {5: {type: 'line'}}
                    };

                   var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                   chart.draw(data, options);
                  }
              </script>
  
              <div id="chart_div" style="width: 900px; height: 500px;"></div>
       </div>
  </div>

  <div class="card-body px-0 pb-2">
        <div class="table-responsive">
               <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
               <script type="text/javascript">
               google.charts.load('current', {'packages':['corechart']});
               google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
        // Some raw data (not necessarily accurate)
               var data = google.visualization.arrayToDataTable([
                 ['Academic year','Frequency'],
                 ['2023/2024',  80],
                 ['2022/2023',  40],
                 ['2021/2022',  60],
                  ]);

                 var options = {
                     title : 'ANALYSIS ON DISPOSITION ',
                     vAxis: {title: 'Frequency'},
                     hAxis: {title: 'Academic Year'},
                     seriesType: 'bars',
                     series: {5: {type: 'line'}}
                    };

                   var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
                   chart.draw(data, options);
                  }
              </script>
  
              <div id="chart_div2" style="width: 900px; height: 500px;"></div>
       </div>
  </div>


  <div class="card-body px-0 pb-2">
        <div class="table-responsive">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['ACADEMIC YEAR', 'Mostly Positive', 'Mostly Negative', 'Mostly Neutral','Somewhat Positive', 'Somewhat Negative', 'Somewhat Neutral'],
          ['2023/2024',   180,   150,   352,   300,   130,   200],
          ['2023/2024',   300,   100,   200,   100,   98,   400],
          ['2023/2024',   350,   90,   200,   155,   220,   170],
         ]);

        var options = {
          title: 'Comment on teachers performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  
  <div id="curve_chart" style="width: 900px; height: 500px"></div>
       </div>
  </div>

  @endsection
@push('dashboard')
  <script>
    window.onload = function() {
      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#fff",
            data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
            maxBarThickness: 6
          }, ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 15,
                font: {
                  size: 14,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
                color: "#fff"
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false
              },
              ticks: {
                display: false
              },
            },
          },
        },
      });


      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
      gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
      gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
      gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

      new Chart(ctx2, {
        type: "line",
        data: {
          labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
          datasets: [{
              label: "Mobile apps",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#cb0c9f",
              borderWidth: 3,
              backgroundColor: gradientStroke1,
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6

            },
            {
              label: "Websites",
              tension: 0.4,
              borderWidth: 0,
              pointRadius: 0,
              borderColor: "#3A416F",
              borderWidth: 3,
              backgroundColor: gradientStroke2,
              fill: true,
              data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
              maxBarThickness: 6
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            }
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#b2b9bf',
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
              },
              ticks: {
                display: true,
                color: '#b2b9bf',
                padding: 20,
                font: {
                  size: 11,
                  family: "Open Sans",
                  style: 'normal',
                  lineHeight: 2
                },
              }
            },
          },
        },
      });
    }
  </script>
@endpush

