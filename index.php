<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">

    <jdoc:include type="head"/>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/custom.css" rel="stylesheet">
 
     <!-- Jquery -->
   <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>

    <!-- Bootstrap core js -->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>

    
  </head>

  <body>

   <!-- Menu Module Position -->
   <jdoc:include type="modules" name="menu" style="none" />

   
    <main role="main">

      <!-- Showcase Module Position -->
    <?php if($this->countModules('showcase')) : ?>
   	<jdoc:include type="modules" name="showcase" style="none" />
    <?php endif; ?>



      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">

            <!-- Box1 Module Position -->

    <?php if($this->countModules('box1')) : ?>
   	<jdoc:include type="modules" name="box1" style="none" />
    <?php endif; ?>

          </div>
          <div class="col-md-4">

            <!-- Box2 Module Position -->

    <?php if($this->countModules('box2')) : ?>
   	<jdoc:include type="modules" name="box2" style="none" />
    <?php endif; ?>

    
          </div>
          <div class="col-md-4">

            <!-- Box3 Module Position -->

    <?php if($this->countModules('box3')) : ?>
   	<jdoc:include type="modules" name="box3" style="none" />
    <?php endif; ?>

          </div>
        </div>

       <!-- message -->
      <jdoc:include type="message" />
       <!-- main components -->
      <jdoc:include type="component" />
        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p><?php echo $this->params->get('copyright_text'); ?> </p>
    </footer>

  </body>
</html>

