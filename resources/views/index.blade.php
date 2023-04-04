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
	<div class="main_sec"> 
      <div class="container-fluid bg-3 text-center">    
        <h3>Grade 1 Study Materials</h3><br>
        <div class="row">
          <div class="col-sm-3">
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3"> 
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3"> 
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3">
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
        </div>
      </div><br>

      <div class="container-fluid bg-3 text-center">    
        <div class="row">
          <div class="col-sm-3">
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3"> 
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3"> 
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3">
            <p>Some text..</p>
            <img src="img/150x80.png" class="img-responsive" style="width:100%" alt="Image">
          </div>
        </div>
      </div><br><br>
    </div>
  </div>
@endsection