@extends('home.template')
@section('content')

    <meta charset="utf-8">
    <title>dotiU™-Galería</title>
    
    <section class="container">
      <div class="row">

        <div class="col-md-7">
          <div class="galeria hvr-back-pulse">
              <h2>Galería</h2>
          </div>
          <div style="margin-top:20px;">

            <div class="col-xs-12 col-sm-6 col-md-6 descripcion  hover-effect">
               <img src="img/img-acoso.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso2.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso3.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso4.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso5.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso2.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 descripcion hover-effect">
               <img src="img/img-acoso3.jpeg" class="img-responsive">
               <p>Campaña contra el acoso callejero</p>
            </div>
            
          </div>
        </div>

     <div class="col-md-5 v-descripcion">
       
        <div class="galeria hvr-back-pulse">
            <h2>Videos</h2>
         </div>
         
        <div style="margin-top:20px;">
          <div class="video-responsive">
              <iframe src="https://www.youtube.com/embed/oOaCp59JDkU" frameborder="0" allowfullscreen></iframe>
          </div>
            <p>Campaña contra el acosos callejero</p>
       </div>
      </div>
      
    </section>
    
    
<div class="container">  
     
     <div class="galeria hvr-back-pulse">
              <h2>Campaña</h2>
          </div>

<div style="height:20px"></div>
          
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
			 <li data-target="#carousel-example-generic" data-slide-to="4"></li>
			 <li data-target="#carousel-example-generic" data-slide-to="5"></li>
			 <li data-target="#carousel-example-generic" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/img1.png" class="img-responsive" alt="Imagen responsive" width="100%">
      <div class="carousel-caption">

      </div>

	  </div>
    <div class="item">
      <img src="img/img2.png"class="img-responsive" alt="Imagen responsive" width="100%">
      <div class="carousel-caption">

      </div>
    </div>

    <div class="item">
      <img src="img/img3.png" class="img-responsive" alt="Imagen responsive" width="100%">
      <div class="carousel-caption">

      </div>
			</div>

			<div class="item">
				<img src="img/img4.png" class="img-responsive" alt="Imagen responsive" width="100%">
				<div class="carousel-caption">

				</div>
    </div>
		<div class="item">
			<img src="img/img5.png" class="img-responsive" alt="Imagen responsive" width="100%">
			<div class="carousel-caption">

			</div>
	</div>
	
	<div class="item">
			<img src="img/img6.png" class="img-responsive" alt="Imagen responsive" width="100%">
			<div class="carousel-caption">

			</div>
	</div>
	
	<div class="item">
			<img src="img/img7.png" class="img-responsive" alt="Imagen responsive" width="100%">
			<div class="carousel-caption">

			</div>
	</div>

</div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
@stop
