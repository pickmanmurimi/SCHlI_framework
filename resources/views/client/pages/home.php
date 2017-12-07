<!DOCTYPE html>
<html>
<head>
  <title> SCHlI </title>
  <!-- Bootstrap -->
    <link href="<?php echo SCHlI_VENDOR; ?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">

<div class="panel panel-success">
  <div class="panel-heading">
    <h1 style="text-align: center;">WELCOME TO SCHlI </h1>
  </div>
  <div class="panel-body">
    
    <div style="text-align: center;" class="jumbotron"> 
    
      <h2> Hello there , <?=$name?> ,Thank you for trying out SCHlI.</h2>

      <p>The name for this project was set abtrary, therefore holds no real meaning in realation to this project.</p>
    </div>

  </div>
</div>



<div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3>A few things to note before we begin ... </h3>
    </div>

    <div class="panel-body">
      <p>Am sorry that this page looks ugly, ;) </p>

      <p>* The framework runs on core php and applies the mvc architecture</p>
      <p>* You may find some mvc rules violated ,pardon me for that-am still  learning- ,</p>

      <p>* In my implementation , every request runs through the index file,then
        to the router,controllers,models,then
         back to the view.</p>

      <p>* I have used other frameworks and libralies to help me achieve design and some other
        added functionality these are ,Bootstrap ,jquery ,symphony ,just to name a few. They
         are all under the vendor folder.</p>

        <p>For most of the frontend libralies, their files are placed in the resources/assets folder</p>

      <p>feel free to include your own libralies and frameworks to extend the framework</p>
      <p>A more detailed documentation will be added soon ... </p>
    </div>
    
  </div>
          
  <div class="panel panel-success">
    <div class="panel-heading"></div>
    <div class="panel-body">     

      <p>author : Pickman Murimi, </p>
      <p>Email  : pickmanmurimi@gmail.com</p>
      <p>GitHub /pickmanmurimi/</p>
      
    </div>
  </div>
</div>
</div>

<!-- jQuery -->
    <script src="<?php echo SCHlI_VENDOR; ?>jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo SCHlI_VENDOR; ?>bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>