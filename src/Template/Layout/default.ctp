<html>
    <head>
      <!-- Basic Page Needs
      ================================================== -->
      <meta charset="utf-8">
      <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
          <?='YuGiOh: '?>
          <?= $this->fetch('title') ?>
      </title>

      <?= $this->Html->meta('icon') ?>

      <!-- Bootstrap -->
      <?= $this->Html->css('mycss/bootstrap.css') ?>
      <?= $this->Html->css('mycss/font-awesome.css') ?>

      <!-- Stylesheet
      ================================================== -->
      <?= $this->Html->css('mycss/style.css') ?>
      <?= $this->Html->css('mycss/responsive.css') ?>

      <?= $this->Html->script('modernizr.custom.js');?>

      <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
  <body>
    <div>
        <div id="sticky-anchor"></div>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <?= $this->Html->link('YuGiOh', '/', ['class' => 'navbar-brand']);?>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <?php
                        if($this->request->Session()->read('Auth.User')) {
                        // user is logged in, show logout..user menu etc
                            echo '<li>'.$this->Html->link('Users', ['controller'=>'users', 'action'=>'home']).'</li>'.
                                 '<li>'.$this->Html->link('Cartas', ['controller'=>'cards', 'action'=>'index']).'</li>'.
                                 '<li style="padding: 15px 15px;">Utilizador: '.$this->request->Session()->read('Auth.User')['username'].'</li>'.
                                 '<li>'.$this->Html->link('Logout', ['controller'=>'users', 'action'=>'logout']).'</li>';
                        }
                        else
                        {
                            echo '<li>'.$this->Html->link('Login', ['controller'=>'users', 'action'=>'login']).'</li>'.
                              '<li>'.$this->Html->link('Registar', ['controller'=>'users', 'action'=>'register']).'</li>';
                        }
                    ?>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <?= $this->fetch('content') ?>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?= $this->Html->script('jquery.1.11.1.js');?>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?= $this->Html->script('bootstrap.js');?>

    <!-- Javascripts
    ================================================== -->
    <?= $this->Html->script('main.js');?>

  </body>
</html>
