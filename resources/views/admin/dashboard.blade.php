<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            statistiques du sondage
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-info">Marque de casque Vr</h5>
                        <div class="card-body">

                            <div id="piechart" style="height: 563px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-success">Magasin d’application</h5>
                        <div class="card-body">
                            <div id="piechart2" style="height: 563px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-danger">Utilisations Bigscreen</h5>
                        <div class="card-body">
                            <div id="piechart3" style="height: 563px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-primary">résultats qualité</h5>
                        <div class="card-body">
                            <canvas height: 500px; id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

                <?php echo $chartData ?>
            ]);

            var data2 = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

                <?php echo $chartData2 ?>
            ]);

            var data3 = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],

                <?php echo $chartDataU ?>
            ]);

            var options = {
                title: 'Reponse du sondage:',
                is3D: true,
            };

            var options2 = {
                title: 'Reponse du sondage:',
                is3D: true,
            };

            var options3 = {
                title: 'Reponse du sondage:',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

            var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));

            chart.draw(data, options);

            chart2.draw(data2, options2);

            chart3.draw(data3, options3);
        }
    </script>

    <script>
        var conf = JSON.parse('{!! json_encode($confort) !!}');
        var conf2 = JSON.parse('{!! json_encode($qualite) !!}');
        var conf3 = JSON.parse('{!! json_encode($connection) !!}');
        var conf4 = JSON.parse('{!! json_encode($qualite_graph) !!}');
        var conf5 = JSON.parse('{!! json_encode($qualiteAudio) !!}');
        re = [];
        re2 = [];
        re3 = [];
        re4 = [];
        re5 = [];
        ref=[];
        r=[];
        conf.forEach(el => {
            re.push(el.confort)
       });
       conf2.forEach(e => {
        re2.push(e.qualite)
       });
       conf3.forEach(k => {
        re3.push(k.connection)
       });
       conf4.forEach(l => {
        re4.push(l.qualite_graph)
       });
       conf5.forEach(o => {
        re5.push(o.qualiteAudio)
       });
    //    ref.push(re,re2,re3,re4,re5);

    //    ref.forEach(z=>{
    //         r = z
    //    })
       console.log(r);
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: [
                    'Qualite',
                    'Confort',
                    'Conection',
                    'Qualite graph',
                    'Qualite audio',
                ],
                datasets: [{
                    label: 'confort',
                    data: re,
                    fill: true,

                    borderColor: 'rgb(25, 199, 232)',
                    pointBackgroundColor: 'rgb(25, 199, 232)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'qualite',
                    data: re2,
                    fill: true,

                    borderColor: 'rgb(5, 2, 235)',
                    pointBackgroundColor: 'rgb(5, 2, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }, {
                    label: 'connection',
                    data: re3,
                    fill: true,
                    borderColor: 'rgb(189,183,107)',
                    pointBackgroundColor: 'rgb(189,183,107)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(189,183,107)'
                },
                {
                    label: 'qualite graph',
                    data: re4,
                    fill: true,
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(153,50,204)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(153,50,204)'
                },
                {
                    label: 'qualite audio',
                    data: re5,
                    fill: true,
                    borderColor: 'rgb(128,0,0)',
                    pointBackgroundColor: 'rgb(128,0,0)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(128,0,0)'
                }
            ]
            }
        });
    </script>


</x-app-layout>
