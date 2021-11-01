<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-info">Marque de casque Vr</h5>
                        <div class="card-body">

                            <div id="piechart" style="width: auto; height: 500px;"></div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-success">Magasin d’application</h5>
                        <div class="card-body">
                            <div id="piechart2" style="width: auto; height: 500px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <h5 class="card-header text-white bg-danger">Utilisations Bigscreen</h5>
                        <div class="card-body">
                            <div id="piechart3" style="width: auto; height: 500px;"></div>
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
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: [
                    'Eating',
                    'Drinking',
                    'Sleeping',
                    'Designing',
                    'Coding',
                    'Cycling',
                    'Running'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 90, 81, 56, 55, 40],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: 'My Second Dataset',
                    data: [28, 48, 40, 19, 96, 27, 100],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            }
        });
    </script>


</x-app-layout>
