
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MAEC - Visualizer </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/theme/');?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/theme/');?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('assets/theme/');?>dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/sigma/');?>styles.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script> 
    var virdata = '<?php echo $virdata;?>'; 
    virdata = JSON.parse(virdata);
    //console.log(JSON.parse(virdata));   
    //return false;
    </script>
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
        <!--      <a href="<?php echo base_url('assets/theme/');?>index2.html" class="navbar-brand"><b>MAEC</b>&nbspVisualizer</a> -->
        <a href="#" class="navbar-brand"><b>MAEC</b>&nbspVisualizer</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
                
              <li <?php echo ($this->uri->segment(1)=='front')?'class="active"':'';?>>
                <a href="<?php echo base_url('front')?>">Home</a>
                
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Malware Hashs <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                  
                  
                    <!-- new -->

                    <!-- script -->

                    <li <?php echo ($this->uri->segment(1)=='c_600853e4e03ab0feda502b782a301b28')?'class="active"':'';?>><a href="<?php echo base_url('c_600853e4e03ab0feda502b782a301b28')?>">600853e4e03ab0feda502b782a301b28</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_441294194fece23d3febc3a7f3b48e6a')?'class="active"':'';?>><a href="<?php echo base_url('c_441294194fece23d3febc3a7f3b48e6a')?>">441294194fece23d3febc3a7f3b48e6a</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_a2b41f9a22bbab8cdb883eaaf6498ad9')?'class="active"':'';?>><a href="<?php echo base_url('c_a2b41f9a22bbab8cdb883eaaf6498ad9')?>">a2b41f9a22bbab8cdb883eaaf6498ad9</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_b7bcf6788f720a4ba65bd66a0db2a269')?'class="active"':'';?>><a href="<?php echo base_url('c_b7bcf6788f720a4ba65bd66a0db2a269')?>">b7bcf6788f720a4ba65bd66a0db2a269</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_b08c588f94109230634c04cbf359bc10')?'class="active"':'';?>><a href="<?php echo base_url('c_b08c588f94109230634c04cbf359bc10')?>">b08c588f94109230634c04cbf359bc10</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_b9a38ea85b30761a741573315930a1b0')?'class="active"':'';?>><a href="<?php echo base_url('c_b9a38ea85b30761a741573315930a1b0')?>">b9a38ea85b30761a741573315930a1b0</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_d8c3729765fbfa7bd5d86ea2384d227f')?'class="active"':'';?>><a href="<?php echo base_url('c_d8c3729765fbfa7bd5d86ea2384d227f')?>">d8c3729765fbfa7bd5d86ea2384d227f</a></li>

                    <li <?php echo ($this->uri->segment(1)=='c_3c8f1c1604fba9973216b165f56f58cf')?'class="active"':'';?>><a href="<?php echo base_url('c_3c8f1c1604fba9973216b165f56f58cf')?>">3c8f1c1604fba9973216b165f56f58cf</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_8b6d70f1b05037d3a0f8f5479e9a40ab')?'class="active"':'';?>><a href="<?php echo base_url('c_8b6d70f1b05037d3a0f8f5479e9a40ab')?>">8b6d70f1b05037d3a0f8f5479e9a40ab</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_22bfe2ded1d186f7c7b7e255efd439a9')?'class="active"':'';?>><a href="<?php echo base_url('c_22bfe2ded1d186f7c7b7e255efd439a9')?>">22bfe2ded1d186f7c7b7e255efd439a9</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_43d638012968e1c5ca8d5d6141aa3df1')?'class="active"':'';?>><a href="<?php echo base_url('c_43d638012968e1c5ca8d5d6141aa3df1')?>">43d638012968e1c5ca8d5d6141aa3df1</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_74615ad6d16fc380dd52099b603fe038')?'class="active"':'';?>><a href="<?php echo base_url('c_74615ad6d16fc380dd52099b603fe038')?>">74615ad6d16fc380dd52099b603fe038</a></li>

                    <li <?php echo ($this->uri->segment(1)=='c_ac7b0b4448677d4cd598b45d3bb42e74')?'class="active"':'';?>><a href="<?php echo base_url('c_ac7b0b4448677d4cd598b45d3bb42e74')?>">ac7b0b4448677d4cd598b45d3bb42e74</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_a9b3105c13508a3689b8bf5b72b93611')?'class="active"':'';?>><a href="<?php echo base_url('c_a9b3105c13508a3689b8bf5b72b93611')?>">a9b3105c13508a3689b8bf5b72b93611</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_1947b44cc6f64e565d8a4215bc655315')?'class="active"':'';?>><a href="<?php echo base_url('c_1947b44cc6f64e565d8a4215bc655315')?>">1947b44cc6f64e565d8a4215bc655315</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_0823e32f41655a975cf426751d0ac012')?'class="active"':'';?>><a href="<?php echo base_url('c_0823e32f41655a975cf426751d0ac012')?>">0823e32f41655a975cf426751d0ac012</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_92fc1cfcc077eba3e22c48245f1c4cb4')?'class="active"':'';?>><a href="<?php echo base_url('c_92fc1cfcc077eba3e22c48245f1c4cb4')?>">92fc1cfcc077eba3e22c48245f1c4cb4</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_6f7523d3019fa190499f327211e01fcb')?'class="active"':'';?>><a href="<?php echo base_url('c_6f7523d3019fa190499f327211e01fcb')?>">6f7523d3019fa190499f327211e01fcb</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_0d1772d87b869dd9a24a8bba8ce8eccb')?'class="active"':'';?>><a href="<?php echo base_url('c_0d1772d87b869dd9a24a8bba8ce8eccb')?>">0d1772d87b869dd9a24a8bba8ce8eccb</a></li>

                    <!-- exe -->
                    <li <?php echo ($this->uri->segment(1)=='c_b9bc755c4c916802d91351f7e841b954')?'class="active"':'';?>><a href="<?php echo base_url('c_b9bc755c4c916802d91351f7e841b954')?>">b9bc755c4c916802d91351f7e841b954</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_c721d08ee8a49f659c16ff573f9e10dd')?'class="active"':'';?>><a href="<?php echo base_url('c_c721d08ee8a49f659c16ff573f9e10dd')?>">c721d08ee8a49f659c16ff573f9e10dd</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_cc910328e735e933bd9e27d2ca0b1c64')?'class="active"':'';?>><a href="<?php echo base_url('c_cc910328e735e933bd9e27d2ca0b1c64')?>">cc910328e735e933bd9e27d2ca0b1c64</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_1d1822eb8967db7927e632b394017e3c')?'class="active"':'';?>><a href="<?php echo base_url('c_1d1822eb8967db7927e632b394017e3c')?>">1d1822eb8967db7927e632b394017e3c</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_b8e723011a32b134f9479e6c78b30d1c')?'class="active"':'';?>><a href="<?php echo base_url('c_b8e723011a32b134f9479e6c78b30d1c')?>">b8e723011a32b134f9479e6c78b30d1c</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_07a27a1e2e49b784a3f82e574144543d')?'class="active"':'';?>><a href="<?php echo base_url('c_07a27a1e2e49b784a3f82e574144543d')?>">07a27a1e2e49b784a3f82e574144543d</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_2d121569e955eb2022ee8eddf21c9975')?'class="active"':'';?>><a href="<?php echo base_url('c_2d121569e955eb2022ee8eddf21c9975')?>">2d121569e955eb2022ee8eddf21c9975</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_b9a5a99120370c91330588bcf14e06fa')?'class="active"':'';?>><a href="<?php echo base_url('c_b9a5a99120370c91330588bcf14e06fa')?>">b9a5a99120370c91330588bcf14e06fa</a></li>
                    <li <?php echo ($this->uri->segment(1)=='c_351819a157dd3fc83cdd99e51f8e3515')?'class="active"':'';?>><a href="<?php echo base_url('c_351819a157dd3fc83cdd99e51f8e3515')?>">351819a157dd3fc83cdd99e51f8e3515</a></li>

                    <!-- old -->
                    
                    <!-- 
                    <li><a href="<?php echo base_url('c_351819a157dd3fc83cdd99e51f8e3515')?>">351819a157dd3fc83cdd99e51f8e3515</a></li>
                    <li><a href="<?php echo base_url('c_26da4b0fc888c4c803d43986849c7c60')?>">26da4b0fc888c4c803d43986849c7c60</a></li>
                    <li><a href="<?php echo base_url('c_00d0809865a77112fead5fc33946ebf5')?>">00d0809865a77112fead5fc33946ebf5</a></li>
                    <li><a href="<?php echo base_url('c_2c33c21972b9c39a5f6002381e4bed3f')?>">2c33c21972b9c39a5f6002381e4bed3f</a></li>
                    <li><a href="<?php echo base_url('c_3a4459f3675a75247a849d6829ed8323')?>">3a4459f3675a75247a849d6829ed8323</a></li>
                    <li><a href="<?php echo base_url('c_3c877dfd0d60572be7c939c08c39866d')?>">3c877dfd0d60572be7c939c08c39866d</a></li>
                    <li><a href="<?php echo base_url('c_5ee36b1d45c11f3f59664d2bd02df9bd')?>">5ee36b1d45c11f3f59664d2bd02df9bd</a></li>
                     -->

                  </ul>
                </li>
              </ul>
              
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
             
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
         

          <!-- Main content -->
          <section class="content">
       
            <div class="box box-default">
              <div class="box-header with-border">
                <!-- <h3 class="box-title">Blank Box</h3> -->
              </div>

              <div class="box-body">

             <h1 style="text-align: center;"><?php echo $hashname; ?></h1>
                  
              <figure class="highcharts-figure">
                <div id="container"></div>
                <p class="highcharts-description">
                    <!-- This force directed graph shows an example of a network graph, where
                    the nodes represent languages and the language families they belong to.
                    The nodes can be dragged around and will be repositioned dynamically.
                    Network graphs are typically used to show relations in data. In this
                    case, we are showing a hierarchical structure. -->
                </p>
            </figure>

              </div><!-- /.box-body -->

            </div><!-- /.box -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/networkgraph.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="<?php echo base_url('assets/sigma/');?>jscript.js"></script>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('assets/theme/');?>plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('assets/theme/');?>bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url('assets/theme/');?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/theme/');?>plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/theme/');?>dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('assets/theme/');?>dist/js/demo.js"></script>

  </body>
</html>
