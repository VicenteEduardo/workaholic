@extends('layouts.merge.dashboard')
@section('titulo', 'Portal Oficial do Workaholic SA')
@section('content')

<div class="containe">
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                Portal da Rede de Mediatecas de Angola - <b>ReMA</b> <br>
                <small>Painel Administrativo</small>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow bg-primary text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary-light">
                                <i class="fe fe-16 fe-rss text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0">Notícias</p>
                            <span class="h3 mb-0 text-white">{{ $count_news }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-image text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-dark mb-0">Galerias</p>
                            <span class="h3 mb-0 ">{{ $count_gallery }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary">
                                <i class="fe fe-16 fe-video text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-dark mb-0">Vídeos</p>
                            <span class="h3 mb-0">{{ $count_video }}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow bg-primary text-white">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <span class="circle circle-sm bg-primary-light">
                                <i class="fe fe-16 fe-users text-white mb-0"></i>
                            </span>
                        </div>
                        <div class="col pr-0">
                            <p class="small text-light mb-0">Utilizadores</p>
                            <span class="h3 mb-0 text-white">{{ $count_user }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="h5 page-title">
                        Registo de Actividades
                    </h2>

                    <div class="d-flex flex-column flex-lg-row">

                        <div class="ml-lg-auto" id="sales-statistics-legend"></div>
                    </div>
                    <canvas height="400" id="myChart1" style="height:10%; width:0cm "></canvas>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        var jan = JSON.parse('<?php echo $jan; ?>');

        var fev = JSON.parse('<?php echo $fev; ?>');
        var mar = JSON.parse('<?php echo $mar; ?>');
        var abr = JSON.parse('<?php echo $abr; ?>');
        var maio = JSON.parse('<?php echo $maio; ?>');
        var jun = JSON.parse('<?php echo $jun; ?>');
        var jul = JSON.parse('<?php echo $jul; ?>');
        var ago = JSON.parse('<?php echo $ago; ?>');
        var set = JSON.parse('<?php echo $set; ?>');
        var out = JSON.parse('<?php echo $out; ?>');
        var nov = JSON.parse('<?php echo $nov; ?>');
        var dez = JSON.parse('<?php echo $dez; ?>');
        const ctx = document.getElementById('myChart1').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',

            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'Acessos Mensais',
                    data: [jan, fev, mar, abr, maio, jun, jul, ago, set, out, nov, dez],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(254, 159, 64, 0.2)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>

@endsection
