<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>
    @if(isset($title))
      {{ $title }} 
    @else
      911 Companion App
    @endIf
  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
 {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}
 {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}
 {{ HTML::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}
 {{ HTML::style('/css/AdminLTE.min.css') }}
 {{ HTML::style('/css/skins/_all-skins.min.css') }}
 {{ HTML::style('/plugins/sweetalert/sweetalert.css') }}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
        <center>
          <a href="#" class="navbar-brand"><b>911+ ph</b></a>          
          </center>
        </div>
    </nav>
  </header>
    <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <center>
      <section class="content-header">
        <h1 style='color:#cd4126'>
          
          <small></small>
        </h1>
      </section>
      </center>
      <!-- Main content -->
      <section class="content">
       <div class="row">
          <hr>
          
           <a href="">
             <div class="col-lg-3 col-xs-6">
               <div class="small-box bg-green">
                  <div class="inner">
                    <h3>Police</h3>
                    
                  </div>
                  <div class="icon">
                    <i class="fa fa-shield"></i>
                  </div>
                  <span class="small-box-footer">
                   info
                  </span>
                </div>
            </div>
           </a>    
      

         <a href="">
           <div class="col-lg-3 col-xs-6">
             <div class="small-box bg-red">
              <div class="inner">
                <h3>Fire</h3>
                
              </div>
              <div class="icon">
                <i class="fa fa-fire"></i>
              </div>
              <span class="small-box-footer">
               info
              </span>
            </div>
          </div>
        </a>
          
         <a href=""> 
           <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-blue">
              <div class="inner">
                <h3>Hospitals</h3>
                
              </div>
              <div class="icon">
                <i class="fa fa-ambulance"></i>
              </div>
              <span class="small-box-footer">
                info
              </span>
            </div>
           </div>
         </a>

         <a href="">
           <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>Rescue</h3>
                
              </div>
              <div class="icon">
                <i class="fa fa-life-ring"></i>
              </div>
              <span class="small-box-footer">
                info
              </span>
            </div>
          </div>
        </a>


       </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2016 <span style='color:#cd4126'>911+ Companion App </span>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->




{{ HTML::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js') }}
{{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}
<style type='text/css'>
.small-box .icon {
  display: block !important;
  font-size:48px;
  top: 12px;
  right: 4px;
}
.small-box h3 {
  font-size: 22px;
  font-weight: bold;
  margin: 0px 0 12px 0;
  white-space: nowrap;
  padding: 0;
  text-align: left;
}
</style>
<script type="text/javascript">
 $(document).ready(function(){
     
     var coords = {};

     function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position){
                coords = { latitude: position.coords.latitude,longitude: position.coords.longitude };
            },function(e){                
            },{enableHighAccuracy: true ,timeout:60000, maximumAge:600000});


        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
      }
      
      $("div.small-box .inner").click(function(e){
        getLocation();
        e.preventDefault();
        alert([coords.latitude,coords.longitude].join("--"))
      })


 });
</script>


</body>
</html>