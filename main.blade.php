<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- css -->
    <link href="main.css" rel="stylesheet">
    <title>new test!</title>


</head>
<body>
    <!-- 導覽列 -->
    <div class="navbar navbar-inverse ">
        <div class="container">
            <div class="navbar-header">

                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand ">New's Website</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#page1">page1</a></li>
                    <li><a href="#page2">page2</a></li>
                    <li><a href="#page3">page3</a></li>

                </ul>
            </div>

        </div>
    </div>
    <!-- 照片部分 -->
    <div class="container main">
    <!-- Indicators -->
        <div id="myCarousel" class="carousel slide " data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">   <!--active 畫面一開始第幾張-->
                    <img src="http://www.giftitpersonal.com/ny.jpg"  alt="Chania">
                    <div class="carousel-caption">
                        <h3>Header of Slide 1</h3>
                        <p>Details of Slide 1. Lorem Ipsum Blah Blah Blah....</p>
                    </div>
                </div>
                <div class="item ">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Moira_NY.JPG" alt="Chania">
                    <div class="carousel-caption">
                        <h3>Header of Slide 2</h3>
                        <p>Details of Slide 2. Lorem Ipsum Blah Blah Blah....</p>
                    </div>
                </div>
                <div class="item">
                    <img src="http://www.nimble-solution.com/images/slider/banner4.png" alt="Flower">
                    <div class="carousel-caption">
                        <h3>Header of Slide3</h3>
                        <p>Details of Slide 3. Lorem Ipsum Blah Blah Blah....</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
        </div>
    </div>
    
    <div class="QRcode">
        <p><span class="glyphicon glyphicon-qrcode">  Line</span></p>
        <img src="newqrcode.png" alt="QRcode">
    </div>




    <div class="footer" >
        <div class="container">
            <div class="row">
                <div class="col-md-4 ">
                    
                    <h4 class="fotop">地址:<a  href="https://www.google.com/maps/place/406%E4%B8%AD%E8%8F%AF%E6%B0%91%E5%9C%8B%E5%8F%B0%E4%B8%AD%E5%B8%82%E5%8C%97%E5%B1%AF%E5%8D%80%E5%8C%97%E5%B1%AF%E8%B7%AF461%E8%99%9F/@24.183681,120.702065,3a,76.9y,279.51h,87.13t/data=!3m4!1e1!3m2!1skABysCC9wgmQ6QH10eO_ng!2e0!4m2!3m1!1s0x3469178d95be34df:0x37a3e00215531a20!6m1!1e1?hl=zh-TW" target="_blank">台中市北屯區北屯路461號</a></h4>
                </div>
                <div class="col-md-4 ">
                    
                    <h4 class="fotop">服務專線:0988888888</h4>
                </div>
                <div class="col-md-4 ">
                    
                    <h4 class="fotop">Copyright © 2017 WeiH</h4>
                
                </div>
            </div>

        </div>
    </div>


<script>
    var windowheight=$(window).height();
    $(".main").css("height",$(window).height()-72);
    $(".main>#myCarousel img").css("height",windowheight*2/3);
   //var aa= $(window).height();
     //alert(aa);
</script>

    
</body>
</html>