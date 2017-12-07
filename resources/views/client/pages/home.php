<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="UTF-8">
    <!--    bootsrap-->
    <link rel="stylesheet" href="/shule_i/resources/assets/style/css/bootstrap.min.css">
    <!--     JQUERY-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/js/jquery.js"></script>
    <!--     BOOTSRAP JS-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/js/bootstrap.min.js"></script>
    <!--     jQuery form plugin-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/plugins/jquery.form.js"></script>
    <!--     jQuery tooltip plugin-->
    <script type="text/javascript" src="/shule_i/resources/assets/style/plugins/tooltip.js"></script>

</head>

<body>
      <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" href="#">{4:Navbar}</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
        </ul>
        <form class="form-inline navbar-form pull-right">
          <input class="form-control" type="text" placeholder="Search">
          <button class="btn btn-success-outline" type="submit">Search</button>
        </form>
      </nav>

 <?php if ( $parameters['parameters'] == NULL){ ?>
    <h3>No parameters have been passed!</h3>
    <p>You could begin by telling us your name , simply add this to the url,
     <b>pages/index/<i>_yourname_</i></b></p> , then reload the page. <a href="/shule_i/pages/index"> reload</a>
    <?php } else{  ?>

        <div class="jumbotron">
          <h1 class="display-3"> Hello there , <?php echo $parameters['parameters'][0]; ?> ,Thank you for trying out SCHlI.</h1>
          <p class="lead">The name for this project was set abtrary, therefore holds no real meaning in realation to this project.</p>
          <hr class="m-y-md">

      <h3>A few things to note before we begin ... </h3>

      <p>Am sorry that this page looks ugly, ;) </p>

      <p>* The framework runs on core php and applies the mvc architecture</p>
      <p>* You may find some mvc rules violated ,pardon me for that-am still  learning- ,</p>

      <p>* In my implementation , every request runs through the index file,then
   to the router,controllers,models,then
   back to the view.</p>

      <p>* I have used other frameworks and libralies to help me archeve design and some other
   added functionality these are</p>
            <ul class="list-group">
              <li class="list-group-item">-Bootstrap</li>
              <li class="list-group-item">-jquery</li>
              <li class="list-group-item"></li>
            </ul>
        <p>These come preloaded to the framework and placed under the resourses/assets folders</p>

      <p>feel free to include your own libralies and frameworks to extend the framework</p>
      <p>A more detailed documentation will be added soon ... </p>


      <p>author : Pickman Murimi, </p>
      <p>Email  : pickmanmurimi@gmail.com</p>
      <p>GitHub /pickmanmurimi/</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="./" role="button">Reload</a>
          </p>
        </div>
  <?php } ?>
</body>
</html>