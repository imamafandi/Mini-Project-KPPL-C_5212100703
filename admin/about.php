
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>About | Sistem Informasi Apotek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
		background: url(../assets/img/bg.jpg) no-repeat;
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
        height: 60px;
      }
	  .logo{
		width : 290px;
		height : 290px;
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
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
	
	 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon-apotek.png">
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
            <a class="brand" href="home.php"> <img src="../assets/img/logo-apotek.png" width="25px" height="25px"/> SIAp</a>
            <div class="nav-collapse  navbar-responsive-collapse collapse">
              <ul class="nav">
                <li><a href="home.php"><i class="icon-home"></i> Home</a></li>
                <li><a href="account.php"><i class="icon-user"></i> Account</a></li>
                <li class="active"><a href="about.php"> <i class="icon-bookmark icon-white"> </i> About</a></li
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
					<div class="nav-collapse  navbar-responsive-collapse collapse" >
              <ul class="nav">
                
				<li><a href="logout.php"> <i class="icon-off"> </i> Logout</a></li>
         
              </ul>
			</div>
				</li>
							
			  </ul>
				
			</div><!--/.nav-collapse -->
        </div>
      </div>
	 </div>
	 
      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <center>
		  <h3>Sistem Informasi Apotek</h3>
		  <h3> (SIAp) </h3>
		  
			<a><img class="logo" src="../assets/img/apotek.png"> </a>
		  </center>
        </div>
			<div class="row-fluid">
			<div class="span6">
			<center><h3>Tentang Kami</h3></center>
			<p><h5>Sistem Informasi Apotek (SIAp)</h5> adalah sebuah sistem informasi berbasis web yang menampilkan informasi tentang apotek yang berada di wilayah Surabaya.</p>

			<p> Dibuat dengan tujuan untuk membantu setiap orang yang membutuhkan informasi tentang apotek yang berada di wilayah Surabaya, mulai dari jam operasional, produk, lokasi, dan gambar. </p>
			
			</div>
			<div class="span6">
			<center><h3>Hubungi Kami</h3></center>
				<table>
                  <tbody style=" font-size:14px">
                      
					  <!--Alamat-->
					  <tr>
                          <td style="width: 200px;"><i class="icon-map-marker"></i> Alamat</td>
                          <td>:</td>
                          <td style="width: 450px;">Jalan Keputih Tegal Bakti II No.3 Sukolilo, Surabaya</td>
                      </tr>
                      
					  <!--No. HP-->
					  <tr>
                          <td style="width: 200px;"><i class="icon-bookmark"></i> No HP</td>
                          <td>:</td>
                          <td style="width: 450px;">+628989603351</td>
                      </tr>
					  
					  <!--Email-->
					  <tr>
                          <td style="width: 200px;"><i class="icon-envelope"></i> Email</td>
                          <td>:</td>
                          <td style="width: 450px;">imamafandi95@gmail.com</td>
                      </tr>
					  
                  </tbody>                 
              </table>
				<br>
				  <a target = '_blank' href="http://www.facebook.com/imamsilvex" data-toggle="tooltip" title="Imam Afandi Ahmad"><img src="../assets/img/logo-fb.png" width="70px" height="70px"></a>
                  
				  <a target = '_blank' href="http://www.twitter.com/imamafandiahmad" data-toggle="tooltip" title="@imamafandiahmad"><img src="../assets/img/logo-twitter.png" width="70px" height="70px"></a>
                  
				  <a target = '_blank' href="http://imamafandi95.wordpress.com" data-toggle="tooltip" title="imamafandi95.wordpress.com"><img src="../assets/img/logo-blog.png" width="70px" height="70px"></a>
                  
				  <a target = '_blank' href="imamafandi95@gmail.com" data-toggle="tooltip" title="imamafandi95@gmail.com"><img src="../assets/img/logo-email.png" width="70px" height="70px"></a>        

			</div>	
		</div>
	</div>

    </div>

    <div id="footer">
      <div class="container">
		<br><br><br>
		<div class="span11">
			<center><h5 style="background-color: #e3e3e3">Copyright &copy; Konstruksi dan Perancanbgan Perangkat Lunak C | 5212100703</h5></center>
		</div>
      </div>
    </div>



   
  </body>
</html>
