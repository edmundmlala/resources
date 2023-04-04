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
                <h4><strong>Cambridge Pathway</strong></h4>
                <br />

                <div class="col-md-3 card-4">
                    <strong>CambridgePrimary
                    5 to 11 years old </strong> <br /><br /><br />

                    A broad and balanced curriculum: <br /><br />

                    <p class="spacer">
                        10 subjects (including English, Mathematics and Science)
                        Classroom and external assessments.
                    </p>
                </div>

                <div class="col-md-3 card-1">
                    <strong>CambridgeLower Secondary
                    11 to 14 years old </strong> <br /><br />

                    A broad and balanced curriculum: <br /><br />

                    <p class="spacer">
                        10 subjects (including English, Mathematics and Science)
                        Classroom and external assessments.
                    </p>
                </div>

                <div class="col-md-3 card-2">
                    <strong>CambridgeUpper Secondary
                    14 to 16 years old </strong> <br /><br />

                    A wide choice of subjects in: <br /><br />

                    <p class="spacer">
                        Cambridge IGCSE
                        Cambridge O Level
                        Cambridge ICE Certificate.
                    </p>
                </div>

                <div class="col-md-3 card-3">
                    <strong>CambridgeAdvanced
                    16 to 19 years old </strong> <br /><br /><br />

                    A wide choice of subjects in: <br /><br />

                    <p class="spacer">
                        Cambridge International AS & A Level
                        Cambridge Pre-U
                        Cambridge AICE Diploma Cambridge IPQ.
                    </p>
                </div>
              </div>




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