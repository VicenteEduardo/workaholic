<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pesquisa de Qualidade - {{ date('d-m-Y') }}</title>
    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        #main-title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .table tr,
        th {
            padding: 2px;
        }

    </style>
</head>

<body style='height:auto; width:100%; background: url("site/img/about/.png") no-repeat center;'>

    <header class="col-12 mt-2 mb-5">

        <img src="site/img/logo/rema.png" alt="" width="200">

        <p>
        <h2 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" class="text-center">Pesquisa de
            Qualidade</h2>

        @if ($checkbox['origin'] != 'all')
            <b> Origem:</b> {{ $checkbox['origin'] }}<br>
        @endif


        <b>Data:</b> {{ date('d-m-Y') }}
        <br>
        <b>Total de Questionario Respondido:</b> {!! count($search) !!}
        <br>
        <br>

        @if ($checkbox['origin'] == 'all')
            <div class="row">
                <div  style="margin" class="col-lg-6 mb-lg-0 ">
                    <p class="mb-0">Total na Mediateca do Lubango:  {!! count($lubango) !!}</p>
                    <p class="mb-0">Total na Mediateca do Soyo: {!! count($soyo) !!}</p> 
                    <p class="mb-0">Total na Mediateca de Benguela: {!! count($benguela) !!}</p> 
                    <p class="mb-0">Total na Mediateca de Luanda 28 de Agosto: {!! count($luanda) !!}</p> 
                    <p class="mb-0">Total na Mediateca António Didalelwa: {!! count($didalewa) !!}</p> 
                </div>

                <div style="margin-left:500px; margin-top:-260px;" class="col-lg-6 mb-lg-0 ">
                    <p class="mb-0">Total na Mediateca Rei Ngola Kiluanji: {!! count($kiluanje) !!}</p> 
                    <p class="mb-0">Total na Mediateca Abel Abraão: {!! count($abel) !!}</p> 
                    <p class="mb-0">Total na Mediateca de Saurimo: {!! count($saurimo) !!}</p> 
                    <p class="mb-0">Total na Mediateca do Huambo: {!! count($huambo) !!}</p> 
                    <p class="mb-0">Total na Mediateca Zé Du:  {!! count($zedu) !!}</p>
                </div>
            </div>
        @endif
        </p>
    </header>

    <section class="col-12">
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    @isset($checkbox['mediaLibrarie'])
                        <th>Mediateca</th>
                    @endisset
                    @isset($checkbox['gender'])
                        <th>Sexo</th>
                    @endisset
                    @isset($checkbox['age'])
                        <th>Idade</th>
                    @endisset
                    @isset($checkbox['employeeService'])
                        <th>Atendimento</th>
                    @endisset
                    @isset($checkbox['communication'])
                        <th>Comunicação/ Divulgação</th>
                    @endisset
                    @isset($checkbox['educationalActivities'])
                        <th>Atividades culturais/ educativas</th>
                    @endisset
                    @isset($checkbox['collection'])
                        <th>Acervo </th>
                    @endisset
                    @isset($checkbox['connection'])
                        <th>Internet, conexão e computadores</th>
                    @endisset
                    @isset($checkbox['cleaning'])
                        <th>Limpeza</th>
                    @endisset
                    @isset($checkbox['safety'])
                        <th>Segurança</th>
                    @endisset
                </tr>
            </thead>
            <tbody>
                @foreach ($search as $item)
                    <tr class="text-center text-dark">
                        @isset($checkbox['mediaLibrarie'])
                            <td>{{ $item->mediaLibrarie }} </td>
                        @endisset
                        @isset($checkbox['gender'])
                            <td>{{ $item->gender }} </td>
                        @endisset
                        @isset($checkbox['age'])
                            <td>{{ $item->age }} </td>
                        @endisset
                        @isset($checkbox['employeeService'])
                            <td>{{ $item->employeeService }}</td>
                        @endisset
                        @isset($checkbox['communication'])
                            <td>{{ $item->communication }}</td>
                        @endisset
                        @isset($checkbox['educationalActivities'])
                            <td>{{ $item->educationalActivities }}</td>
                        @endisset
                        @isset($checkbox['collection'])
                            <td>{{ $item->collection }}</td>
                        @endisset
                        @isset($checkbox['connection'])
                            <td>{{ $item->connection }}</td>
                        @endisset
                        @isset($checkbox['cleaning'])
                            <td>{{ $item->cleaning }}</td>
                        @endisset
                        @isset($checkbox['safety'])
                            <td>{{ $item->safety }}</td>
                        @endisset
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>


    <footer class="col-12 mt-2" id="footer">
        <div class="text-left">
            <img src="site/img/logo/minttics.jpg" width="250">
        </div>
    </footer>
</body>

</html>
