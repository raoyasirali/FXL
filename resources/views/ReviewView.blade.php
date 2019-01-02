@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=""><h3>Previous Customer Reviews</h3>
                  <a href="{{URL::to('yourReview')}}"><h3>Add Your Review</h3> </a>
                  <div><a href="viewCustMenuAgain" style="font-size: 20px">Back</a></div>
                 
                </div>

                <div class="card-body">
                    
                    @foreach( $rev as $row ) 
                              <div id="img_div"style="margin-top: 20px ;margin-left:20px;float: left;border: solid thick gray">
           
           
           User Name:  {{$row->user_name}} <br>
           Review:     {{$row->review}}

        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection