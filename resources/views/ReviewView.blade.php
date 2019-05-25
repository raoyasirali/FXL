@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=""><h3>Previous Customer Reviews</h3>
                  <a href="{{URL::to('yourReview')}}"><h3>Add Your Review</h3> </a>
                  <div><a href="{{URL::to('home')}}" style="font-size: 20px">Back</a></div>
                 
                </div>

  <div>
    <a style="width: 24.9%;border-radius: 0px;" class="btn btn-primary" href="{{URL::to('AllReview')}}" >All Reviews</a>

    <a style="width: 25%;margin-left: -3px;border-radius: 0px;" class="btn btn-success" href="{{URL::to('PosReview')}}">Positive Reviews</a>
    <a  style="width: 25%;margin-left: -4px;border-radius: 0px;" class="btn btn-danger" href="{{URL::to('NegReview')}}" >Negative Reviews</a>
    <a  style="width: 25%;margin-left: -4px;border-radius: 0px;" class="btn btn-info" href="{{URL::to('NeuReview')}}">Neutral Reviews</a>
  </div>

                <div class="card-body">
                    
                    @foreach( $rev as $row ) 
                              <div id="img_div"style="margin-top: 20px ;margin-left:20px;border: 1px solid  gray">
           
           
          <b> Name: </b> {{$row->user_name}} <br>
          <b> Review:  </b>   {{$row->review}}

        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection