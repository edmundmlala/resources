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
	<div class="main_sec" id="subjects"> 
      <div class="container-fluid bg-3 text-center">    
        <h3 style="font-weight: bolder">Grade {{$id}} Subjects</h3><br>
        
    

      <div class="container bg-3 text-center">    





        <div class="row">
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-envira "></i>
                  <br>
                  <strong>Art & Design </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
          
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-desktop"></i>
                  <br>
                  <strong>Computing </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
          
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-university"></i>
                  <br>
                  <strong>Digital Literacy </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
        </div>






        <div class="row">
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-graduation-cap"></i>
                  <br>
                  <strong>English </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
          
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-smile-o"></i>
                  <br>
                  <strong>English as a Second Language </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>

          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-calculator"></i>
                  <br>
                  <strong>Mathematics </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
        </div>







        <div class="row">
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-play-circle-o"></i>
                  <br />
                  <strong>Music </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
          
          
          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
              <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-steam-square"></i>
                  <br />
                  <strong>Physical Education </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>


          <div class="col-sm-4">
            <a href="/grade/{{ $id }}">
                
                 <br />
              <div class="m-2">
                <h5>
                  <i class="fa fa-flask"></i>
                  <br />
                  <strong>Science </strong>
                </h5>

                <p>
                  ssdjdsfhkdsjfhskjd
                </p>
                &nbsp;
              </div>
            </a>
          </div>
        </div>



      </div>
      <br><br>
    </div>
  </div>
</div>
<br>
@endsection