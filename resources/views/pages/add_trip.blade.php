<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="pohodno društvo">
    <meta name="author" content="J.J">

    <title>Best Trips</title>


    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" media="screen">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Lets go!</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/crusades">Discover the wild</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container content">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 nuTrip_form">
            <h3>Fill out the form below!</h3>

            <form action="" method="POST">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="control-label">Hiking destination</label>
                        <input type="text" class="form-control" placeholder="Destination" id="name" name="name">

                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="control-label">Event starts</label>
                        <input type="text" class="form-control" placeholder="Start" id="datepicker" name="start">

                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="control-label">Event ends</label>
                        <input type="text" class="form-control" placeholder="Ends" id="datepicker" name="end">

                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label class="control-label">Event fee( € )</label>
                        <input type="number" class="form-control" placeholder="Fee" id="name" name="cost">

                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Description</label>
                        <textarea class="form-control" placeholder="Describe the event" id="body"
                                  name="description"></textarea>

                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <footer id="footerII">
            <div class="container">
                <p>© 2015 J.J, All Rights Reserved.</p>
            </div>
        </footer>

    </div>
</div>


</body>
</html>