@extends('layout.template')

@section('top_nav')
	<div id="mainwrapper" class="jumbotron">
      <div class="container text-center">
        <div class="spacer-x3">
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />

          <h1 class="block-title text-light">TAAL-NET E-LIBRARY</h1>      
          <p class="text-primary-dark text-light">The brand you can trust in education.</p>
        </div>
        <div class="space-x3">
          
            <form>
              <input class="form-control" type="" name="" /> <br />
              <button type="button" class="btn btn-outline-primary" onclick="window.location='subjects/1'">Search <i class="fa fa-search"></i> </button>
            </form>
        </div>
      </div>
    </div>
@endsection()

@section('main_sec')
	<div class="main_sec" id="indexPage"> 
      <div class="container bg-3 text-center">    
        <h3 style="color:rgba(3, 3, 47, 0.837); font-weight:bold">Taal-Net Group Of Schools E-library</h3><br>
        <div class="row">
          <div class="col-sm-3 ">
            <div class="card card-primary">
              <a href="https://shop.taalct.co.za">
                <img src="img/stationary.jpg" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Uniforms & Stationary</p>
              </a>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="card card-primary"> 
              <a href="https://shop.taalct.co.za">
                <img src="img/book.jpg" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Order Books Online</p>
              </a>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="card card-primary"> 
              <a href="https://www.taalct.co.za/banking-details/">
                <img src="img/banking.jpg" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Banking Details</p>
              </a>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="card card-primary">
              <a href="https://www.taalct.co.za/branches/">
                <img src="img/contact.jpg" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Contact Details</p>
              </a>
            </div>
          </div>
        </div>
      </div><br>

      <div class="container bg-3 text-center">    
        <div class="row">
          <div class="col-sm-3 ">
            <div class="card card-primary">
              <a href="cambridgePathway">
                <img src="img/cambridge.png" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Cambridge Pathway</p>
              </a>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="card card-primary"> 
              <a href="juneExams">
                <img src="img/cambridge.png" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>June 2023 exam series</p>
              </a>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="card card-primary"> 
              <a href="cambridgePrimary">
                <img src="img/cambridge.png" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Cambridge Primary</p>
              </a>
            </div>
          </div>
          <div class="col-sm-3 ">
            <div class="card card-primary">
              <a href="cambridgeHigh">
                <img src="img/cambridge.png" class="img-responsive" style="width:100%" alt="Image">
                <hr >
                <p>Cambridge Lower Secondary</p>
              </a>
            </div>
          </div>
        </div>
      </div><br><br>
    </div>
  </div>
@endsection