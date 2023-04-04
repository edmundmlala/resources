@extends('layout.template')

@section('top_nav')
	<div id="mainwrapper" class="jumbotron">
      <div class="container text-center">
        <div class="spacer-x3">

          <h1 class="block-title text-light">TAAL-NET E-LIBRARY</h1>      
          <p class="text-primary-dark text-light">The brand you can trust in education.</p>
        </div>
        <div class="space-x3">
          
        </div>
      </div>
    </div>
@endsection()

@section('main_sec')
	<div class="main_sec"> 
      <div class="container-fluid bg-3 text-center">    
        <h3 style="font-weight: bolder">Grade {{$id}} Study Materials</h3><br>
        <div class="row text-left" id="gradeWrapper">
          <div class="col-sm-3">
            &nbsp;
          </div>

          <div class="col-sm-3 "> 
            <a href="/homework/{{ $id }}" class=" b1">
              <p>  <br /></p>
              <div class="col-md-4">
                <img src="../img/icons/s1.png" class="img-responsive" style="width:100%" alt="Image">
              </div>
              <div class="col-md-8 text-left text-left">
                <h3>Homework</h3>
              </div>
            </a>
          </div>

          <div class="col-sm-3 "> 
            <a href="/syllabus/{{ $id }}" class=" b1">
              <p>  <br /></p>
              <div class="col-md-4">
                <img src="../img/icons/s1.png" class="img-responsive" style="width:100%" alt="Image">
              </div>
              <div class="col-md-8 text-left text-left">
                <h3>Syllabus</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-3">
            &nbsp;
          </div>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-sm-3">
          &nbsp;
        </div>


        <div class="col-sm-3"> 
          <a href="/outline/{{ $id }}" class=" b1">
            <p>  <br /><br /></p>
            <div class="col-md-4">
              <img src="../img/icons/s1.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-md-8 text-left text-left">
              <h3>Study Outline</h3>
            </div>
          </a>
        </div>

        <div class="col-sm-3"> 
          <a href="/books/{{ $id }}" class=" b1">
            <p>  <br /><br /></p>
            <div class="col-md-4">
              <img src="../img/icons/s1.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-md-8 text-left text-left">
              <h3>Books</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-3">
          &nbsp;
        </div>
      </div>
    </div>
    <br>

    
    <br><br>
    </div>
  </div>
@endsection