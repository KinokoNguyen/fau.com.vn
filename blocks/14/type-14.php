<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-14.less', 'css/type-14.css');
        ?>

        <link href="css/type-14.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-14">
            <div class="background" style="background-image: url('images/type-14/bg-about.jpg');">
                <div class="container"  >
                    <div class="about">
                        <div class="row wrapper">
                            <div class="col-md-6 col-xs-12">
                                <div class="about-l">
                                    <img src="images/type-14/ing-feed.png" alt="Trang chủ (text)">
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <div class="about-r">
                                    <div class="d-about">Công ty FAU đã đưa ra sản phẩm có thương hiệu là AU FEED, đây là một bộ sản phẩm chất lượng cao, cung cấp đầy đủ, cân đối cho từng giai đoạn sinh trưởng và phát triển của gia súc...</div>
                                    <div>
                                        <a class="viewmore" href="#">Xem hết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </body>
</html>
