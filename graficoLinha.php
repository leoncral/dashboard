<html lang="pt-br">
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- insere o gráfico de Linha -->
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Mês', 'Quantidade'],

                <?php

                include 'conexao/conexao.php';

                $sql = "SELECT * FROM clientes";
                $busca = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_array($busca)) {
                    $mes = $dados['mes_cliente'];
                    $quantidade = $dados['quantidade'];

                ?>

                    ['<?php echo $mes ?>', <?php echo $quantidade ?>],
                <?php } ?>
            ]);

            var options = {
                title: '',
                curveType: '',
                legend: {position: 'bottom'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
    <!-- Fim do gráfico de Linha ---->
    <!------------------------------->
    <!-- Insere o gráfico de Pizza -->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php

                include 'conexao/conexao.php';

                $sql = "SELECT * FROM vendas";
                $busca = mysqli_query($conexao, $sql);

                while ($dados = mysqli_fetch_array($busca)) {
                $mes = $dados['mes_venda'];
                $quantidade = $dados['quantidade_venda'];

                ?>

                ['<?php echo $mes ?>', <?php echo $quantidade ?>],
                <?php } ?>
            ]);

            var options = {
                title: ''
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
    <!-- Fim do gráfico de Pizza -->
</head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h4 style="margin-top: 40px">Gráfico de clientes</h4>
                <div id="curve_chart"></div>
            </div>
            <div class="col-md-4">
                <h4 style="margin-top: 40px">Quantidade de vendas</h4>
                <div id="piechart"></div>
            </div>
        </div>
    </div>
    </body>
</html>