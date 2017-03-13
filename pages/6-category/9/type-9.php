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
        $less->compileFile('less/type-9.less', 'css/type-9.css');
        ?>

        <link href="css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="css/type-9.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="type-9">
            

            
                <div class="container">
                    <div class="row">
                        <!--BEGIN ITEM GALLERY-->
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--END ITEM GALLERY-->
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <div class="list-gallery">
                                <div class="row-gallery ">
                                    <div class="item-gallery">
                                        <div class="i-thumbnail">
                                            <a href="#">
                                                <img src="images/type-9/(370x250)_crop_D30_2458.jpg">
                                            </a>
                                        </div>
                                        <div class="i-description">
                                            <a href="#">Tất Niên 2014</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           
        </div>

    </body>
</html>
