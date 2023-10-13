<div class="row">
    <h4 class="title_cate">BIỂU ĐỒ THỐNG KÊ</h4>
</div>
<div id="myChart"></div>
<div class="row chart">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Set Data
            const data = google.visualization.arrayToDataTable([
                ['Danh mục sản phẩm', 'SL'],
                <?php foreach ($thongke as $tk) {
                    extract($tk);
                ?>
                ['<?= $name ?>', <?= $soluong ?>],
                <?php } ?>
            ]);

            // Set Options
            const options = {
                title: 'Số lượng sản phẩm theo danh mục',
                is3D: true
            };

            // Draw
            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
</div>