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
                ['Danh mục sản phẩm', 'Dollar US / $'],
                <?php foreach ($thongke as $tk) {
                    extract($tk);
                    foreach ($list_sanpham as $sp) {
                        if ($sp['price'] == $gia_min) {
                            $name_sp_min = $sp['name'];
                        }
                    }
                ?>['<?= $name_sp_min ?>', <?= $gia_min ?>],
                <?php } ?>
            ]);

            // Set Options
            const options = {
                title: 'Các sản phẩm có giá thấp nhất theo danh mục',
                is3D: true
            };

            // Draw
            const chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
        }
    </script>
</div>