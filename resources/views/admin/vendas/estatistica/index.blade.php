@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Produtos')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
         Estatística de Vendas
            </h2>
        </div>
    </div>

    <div class="card">
        <div class="card">
            <div class="card-header">
                <h3 class="page-title">Estatísticas de Pedidos do ano @if (isset($date))
                        {{ $date }}
                    @else
                        {{ date('Y') }}
                    @endif
                </h3><br><br>

                <div class="card-options">

                    <h6>Total Geral: {!! number_format($totalPayments, 2, ',', '.') . ' ' . 'KZ' !!}

                    </h6>

                </div>
            </div>
            <div class="form-group col-md-2">
                <form method="POST" action="">
                    @csrf
                    <label for="year">Pesquise por Ano</label>
                    <input type="search" class="form-control" placeholder="Digite o ano" id="year"
                        name="year" required autofocu />
                </form>
            </div>
            <div class="table-responsive m-2" style="height: 350px;  ">
                <canvas id="myChart1" style="height:10%; width:0cm "></canvas>
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
            type: 'bar',

            data: {
                labels: ['Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro',
                    'Outubro', 'Novembro', 'Dezembro'
                ],
                datasets: [{
                    label: 'números de Pedidos',
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
