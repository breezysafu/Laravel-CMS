<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>Document</title>

    <style>
        #side-area-main {
            background-color: rgb(57,208,129);
            min-height:500px;
        }

        #side-list {
            list-style:none;
            color:#fff;
            font-size:20px;
        }
    </style>

</head>
<body>

<div class="container-fluid">
    <div class="row">

        <!-- Side Area -->
        <div id="side-area-main" class="col-md-2">
            Ipenywis
            <div id="side-area-container">
                <ul id="side-list">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Add New Post</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Area -->

    </div>
</div>

</body>
</html>