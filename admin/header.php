<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X Shop</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="shortcut icon" href="../upload/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php if (isset($_SESSION['thongke'])) { ?>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {
                'packages': ['corechart']
            });

            google.charts.setOnLoadCallback(() => {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    <?php foreach ($thongke_dm as $dm) { 
                        extract($dm);
                        echo "['$name',$soluong],";
                    } ?>
                    ['Khó', 3],
                    ['Onions', 1],
                    ['Olives', 1],
                    ['Zucchini', 1],
                    ['Pepperoni', 2]
                ]);

                // Set chart options
                var options = {
                    'title': '',
                    'width': 600,
                    'height': 600,
                    is3D: true,
                };

                // Instantiate and draw our chart, passing in some options.
                var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            })
        </script>

    <?php } ?>
</head>

<body>
    <div class="boxcenter">
        <div class="row mb headeradmin">
            <img width="80px" src="../upload/logo.png" alt="">
            <h1 style="margin-left: 10px">Admin</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="../index.php">Trang chủ</a></li>
                <li><a href="index.php?act=listdm">Danh mục</a></li>
                <li><a href="index.php?act=listsp">Hàng hóa</a></li>
                <li><a href="index.php?act=listkh">Khách hàng</a></li>
                <li><a href="index.php?act=listbl">Bình luận</a></li>
                <li><a href="index.php?act=thongke">Thống kê</a></li>
            </ul>
        </div>