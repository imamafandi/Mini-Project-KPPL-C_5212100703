
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bubutan | Sistem Informasi Apotek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
		height: 100%;
        /* The html and body elements cannot have any padding or margin. */
		
		background: url(../../assets/img/bg.jpg) no-repeat;
		background-size: 300% 300%;
		background-position: center top;
	  }
	  
      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }
		
      /* Set the fixed height of the footer here */
      #push,
      #footer {
		  height: 30px;
      }
	  .logo{
		width : 290px;
		height : 290px;
	  }
	  .logo-navbar{
		width : 25px;
		height : 25px;
	  }
      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      #wrap > .container {
        padding-top: 60px;
      }
      .container .credit {
        margin: 20px 0;
		
      }

      code {
        font-size: 80%;
      }
	  
	  

    </style>
    <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
	
	 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.js"></script>
    <script src="../../assets/js/bootstrap-transition.js"></script>
    <script src="../../assets/js/bootstrap-alert.js"></script>
    <script src="../../assets/js/bootstrap-modal.js"></script>
    <script src="../../assets/js/bootstrap-dropdown.js"></script>
    <script src="../../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../../assets/js/bootstrap-tab.js"></script>
    <script src="../../assets/js/bootstrap-tooltip.js"></script>
    <script src="../../assets/js/bootstrap-popover.js"></script>
    <script src="../../assets/js/bootstrap-button.js"></script>
    <script src="../../assets/js/bootstrap-collapse.js"></script>
    <script src="../../assets/js/bootstrap-carousel.js"></script>
    <script src="../../assets/js/bootstrap-typeahead.js"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../../assets/ico/favicon-apotek.png">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
			
            <a class="brand" href="../../php/beranda.php"> <img src="../../assets/img/logo-apotek.png" width="25px" height="25px"/> SIAp</a>
					
            <div class="nav-collapse  navbar-responsive-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="../../php/home.php"><i class="icon-home"></i> Home</a></li>
                <li><a href="../../php/profil.php"> <i class="icon-user"></i> Profil</a></li>
                <li><a href="../../php/tentang.php"> <i class="icon-bookmark"> </i> About</a></li
              </ul>
			</div>
				
			<div class="nav-collapse collapse">
			<ul class="nav pull-right">
				
				<li>
					<form class="form-search nav">
						<div class=" navbar-search input-prepend">
						<button type="submit" class="btn"><i class="icon-search"></i></button>
						<input type="text" class="search-query span2" placeholder="Pencarian">
						</div>
					</form>
				</li>
				
	
				<li>
					<div class="btn-group">
					<a href="../../php/profil.php" class="btn btn-primary"><i class="icon-user icon-white"></i> Akun</a>
					<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="ubahdatapribadi.php"><i class="icon-pencil"></i> Mengubah Data</a></li>
						
						<li><a href="uploadfoto.php"><i class="icon-camera"></i> Upload Foto</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Pengaturan</li>
						
						<li><a href="ubahdatapribadi.php"><i class="icon-lock"></i> Mengubah Password</a></li>
						
						<li class="divider"></li>
						<li class="nav-header">Akun</li>
						
						<li><a href="#"><i class="icon-off"></i> Keluar</a></li>
					</ul>
					</div>
				</li>
			
			  </ul>
				
			</div><!--/.nav-collapse -->

        </div>
      </div>
	 </div>
<div class="container">

	<div class="row-fluid">
		<div class="span3">
			<ul class="nav nav-list">
					
				<li class="active">
					<a><h4>Kategori</h4></a>
				</li>
				<li>
					<a href="../../kategori/surabayapusat.php">Surabaya Pusat</a>
				</li>
				<li>
					<a href="../../kategori/surabayautara.php">Surabaya Utara</a>
				</li>
				<li>
					<a href="../../kategori/surabayatimur.php">Surabaya Timur</a>
				</li>
				<li>
					<a href="../../kategori/surabayaselatan.php">Surabaya Selatan</a>
				</li>
				<li>
					<a href="../../kategori/surabayabarat.php">Surabaya Barat</a>
				</li>
				
			</ul>
		</div>
		<div class="span9">
			<h3 class="text-info">
				Bubutan
			</h3>
			<ul class="thumbnails">
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/people" />
						<div class="caption">
							<h3>
								Apotek A
							</h3>
							<p>
								
							</p>
							<p>
								<a class="btn btn-primary" href="#">Lihat</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/city" />
						<div class="caption">
							<h3>
								Apotek B
							</h3>
							<p>
								
							</p>
							<p>
								<a class="btn btn-primary" href="#">Lihat</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</li>
				<li class="span4">
					<div class="thumbnail">
						<img alt="300x200" src="http://lorempixel.com/600/200/sports" />
						<div class="caption">
							<h3>
								Apotek C
							</h3>
							<p>
								
							</p>
							<p>
								<a class="btn btn-primary" href="#">Lihat</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
		
			
		
      <!-- Begin page content -->
      
    </div>

    <div id="footer">
      <div class="container">
        <br><br>
		<!--
		<p class="text-right"> <a href="http://www.facebook.com/himah.pusat" target="_blank"> <img src="../assets/img/logo-fb.png" width="30px" height="30px" class="img-rounded"> Himah Pusat &nbsp</a> 
		<a href="http://www.twitter.com/himahpusat" target="_blank"> <img src="../assets/img/logo-twitter.png" width="30px" height="30px" class="img-rounded"> @himahpusat </a> </p>
		-->
		<div class="span11">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; Konstruksi dan Perancanbgan Perangkat Lunak C | 5212100703</h5></center>
		</div>
		
		
      </div>
		
    </div>


  </body>
</html>
