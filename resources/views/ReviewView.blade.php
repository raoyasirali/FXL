@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body  onload="reviewH()">
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

    <a style="width: 25%;margin-left: -3px;border-radius: 0px;" class="btn btn-success" href="{{URL::to('PosReview')}}"> Positive Reviews</a>
    <a  style="width: 25%;margin-left: -4px;border-radius: 0px;" class="btn btn-danger" href="{{URL::to('NegReview')}}" >Negative Reviews</a>
    <a  style="width: 25%;margin-left: -4px;border-radius: 0px;color: white;" class="btn btn-info" href="{{URL::to('NeuReview')}}">Neutral Reviews</a>
  </div><br/>

    <p style="margin-left: 2%; font-size: 14px;" id="Rheading"><b>All Reviews:</b></p>
                <div class="card-body">
                    
                    @foreach( $rev as $row ) 
                              <div id="img_div"style="margin-top: 5px ;margin-left:20px;border: 1px solid  gray">
           
           
          <b> Name: </b> {{$row->user_name}} <br>
          <b> Review:  </b>   {{$row->review}}

        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
  function reviewH(){
    // Review Heading
    if (window.location.href.indexOf('PosReview')>0) {
    document.getElementById("Rheading").innerHTML="<b>Positive Reviews:</b>";
    document.getElementById("Rheading").style.fontSize="14px";
    document.getElementById("Rheading").style.marginLeft="2%";
    }

    if (window.location.href.indexOf('NegReview')>0) {
    document.getElementById("Rheading").innerHTML="<b>Negative Reviews:</b>";
    document.getElementById("Rheading").style.fontSize="14px";
    document.getElementById("Rheading").style.marginLeft="2%";
    }

    if (window.location.href.indexOf('NeuReview')>0) {
    document.getElementById("Rheading").innerHTML="<b>Neutral Reviews:</b>";
    document.getElementById("Rheading").style.fontSize="14px";
    document.getElementById("Rheading").style.marginLeft="2%";
    }
  }

  

</script>
@endsection

