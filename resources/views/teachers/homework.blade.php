@extends('layout.authtemplate')

@section('main_sec')




{{-- starts here --}}
<div class="main_sec" id="subjects"> 
    <div class="container-fluid bg-3 text-center">
        <br /><br />    
        <center>
            <img src="../img/logo.png" alt="logo" width="80px" />
        </center>

        {{-- Welcome : {{ Auth::user()->name }} --}}

        <div class="container bg-3 text-center"> 
            <div class="row">
                <div class="col-sm-4">
                <a href="/grade/">
                    
                    <br />
                    <div class="m-2">
                    <h5>
                        <i class="fa fa-graduation-cap "></i>
                        <br>
                        <strong>Student Homework </strong>
                    </h5>

                    <p>
                        {{-- &nbsp; --}}
                    </p>
                    &nbsp;
                    </div>
                </a>
                </div>
                
                <div class="col-sm-4">
                <a href="/grade/">
                    
                    <br />
                    <div class="m-2">
                    <h5>
                        <i class="fa fa-file"></i>
                        <br>
                        <strong>Syllabus Corner </strong>
                    </h5>

                    <p>
                        {{-- &nbsp; --}}
                    </p>
                    &nbsp;
                    </div>
                </a>
                </div>
                
                <div class="col-sm-4">
                <a href="/grade/">
                    
                    <br />
                    <div class="m-2">
                    <h5>
                        <i class="fa fa fa-file-pdf-o"></i>
                        <br>
                        <strong>View Handouts </strong>
                    </h5>

                    <p>
                        {{-- &nbsp; --}}
                    </p>
                    &nbsp;
                    </div>
                </a>
                </div>
            </div>






            <div class="row">
                <div class="col-sm-4">
                <a href="/grade/">
                    
                    <br />
                    <div class="m-2">
                    <h5>
                        <i class="fa fa-book"></i>
                        <br>
                        <strong>Books & Literature   </strong>
                    </h5>

                    <p>
                        {{-- &nbsp; --}}
                    </p>
                    &nbsp;
                    </div>
                </a>
                </div>
                
                <div class="col-sm-4">
                <a href="/grade/">
                    
                    <br />
                    <div class="m-2">
                    <h5>
                        <i class="fa fa-smile-o"></i>
                        <br>
                        <strong>Student Recommendations </strong>
                    </h5>

                    <p>
                        {{-- &nbsp; --}}
                    </p>
                    &nbsp;
                    </div>
                </a>
                </div>

                <div class="col-sm-4">
                <a href="/grade/">
                    
                    <br />
                    <div class="m-2">
                    <h5>
                        <i class="fa fa-calculator"></i>
                        <br>
                        <strong>Outlook  </strong>
                    </h5>

                    <p>
                        {{-- &nbsp; --}}
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

{{-- ends here --}}
@endsection
