@extends('layout.template')

@section('top_nav')
	<div id="mainwrapper" class="jumbotron">
      <div class="container text-center">
        <div class="spacer-x3">

          <h1 class="block-title text-light">TAAL-NET E-LIBRARY</h1>      
        </div>
        <div class="space-x1">
          
        </div>
      </div>
    </div>
@endsection()

@section('main_sec')

    <div id="hwWrapper">
      <div class="container">
        <div class="row p-5">
          <div class="col-md-2">&nbsp;</div>

          <div class="col-md-8">
            <div class="abc">

              {{-- //      Data Row --}}


              <div class="row br-1">
                <div class="col-md-4 align-center pt-4">
                  <i class="fa fa-graduation-cap large-icon"></i>
                </div>

                <div class="col-md-8">
                  <a href="#">
                    <table class="table">
                      <tr>
                        <td>
                          <strong>
                            Title:
                          </strong></td>
                        <td></td>
                      </tr>
  
                      <tr>
                        <td>
                          <strong>
                            Date:
                          </strong></td>
                        <td></td>
                      </tr>
  
                      <tr>
                        <td>
                          <strong>
                            Due Date:
                          </strong></td>
                        <td></td>
                      </tr>
  
                      <tr>
                        <td>
                          <strong>
                            Description:
                          </strong></td>
                        <td></td>
                      </tr>
                    </table>
                  </a>
                </div>
              </div>



            </div>
          </div>
          
          <div class="col-md-2">&nbsp;</div>
        </div>
      </div>
    </div>


@endsection