<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--bắt đầu phần header-->
<div class="header">
<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Cuộc sống quanh ta</a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="image/pic.jpg" alt="Los Angeles" style="width:100%; height: 300px;">
            </div>

            <div class="item">
                <img src="image/pic6.jpg" alt="Chicago" style="width:100%;height: 300px;">
            </div>

            <div class="item">
                <img src="image/pic7.jpg" alt="New york" style="width:100%;height: 300px;">
            </div>
            <div class="item">
                <img src="image/pic3.jpg" alt="New york" style="width:100%;height: 300px;">
            </div>
            <div class="item">
                <img src="image/pic4.jpg" alt="New york" style="width:100%;height: 300px;">
            </div>
            <div class="item">
                <img src="image/pic5.jpg" alt="New york" style="width:100%;height: 300px;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
<!--Kết thúc phần header-->

<!--Bắt đầu phần nội dung-->
<div class="main_contain">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 fm1">
                <img class="rounded-circle" src="image/pic.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4 fm1">
                <img class="rounded-circle" src="image/pic3.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4 fm1">
                <img class="rounded-circle" src="image/pic4.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4 fm1">
                <img class="rounded-circle" src="image/pic5.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4 fm1">
                <img class="rounded-circle" src="image/pic6.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
            <div class="col-lg-4 fm1">
                <img class="rounded-circle" src="image/pic7.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>
        </div>
        <div style="margin: 10px; text-align: center">
            <button id="load-more" type="button" class="btn btn-sm btn-success" style="font-size: 15px">Load more</button>
        </div>
    </div>
</div>

<!--Kết thúc phần nội dung-->

<!--Bắt đầu phần footer-->
<div class="footer">

</div>
<!--Kết thúc lớp footer-->

<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#load-more').on('click', function(e) {
            /* alert('click');*/
            e.preventDefault();
            var params = {};
            params.current = 30;
            params.cat = 7;
            params.type = 'product';

            jQuery.ajax({
                url : 'http://localhost/ajax_by_me/ajax.php',
                data: params,
                type: 'POST',
                dataType: 'json',
                /* beforeSend: function() {
                     alert('beforeSend');
                 },*/
                success: function(data) {
                    alert('success');
                    console.log(data);
                    $('.album-list').append(data.html);
                },
                error: function (xhr) {
                    alert('error');
                },
                complete: function (xhr, status) {
                    alert('complete');
                }
            });


        });


    });
</script>
</body>
</html>
