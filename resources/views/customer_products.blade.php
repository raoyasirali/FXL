@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="float: left"><h5>Products of your searched category</h5>
                 <div style="float: left;"><a href="viewCart"  class="btn btn-primary">View Cart</a></div>
                 <div style="float: left;">  <a href="home" class="btn btn-primary" style="margin-left: 470px">Back</a></div>
                </div>
                  <div style="color: red; margin-left: 50px">
                                @if($message = Session::get('msg'))
                                 <div>
                                    
                                    {{$message}}
                                 </div>

                                @endif
                             </div><br/>
                <div class="card-body">
                    
                   @foreach( $p_data as $row)
          <div id="img_div"style="width: 30%;margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="100%"/><br>
          <div style="margin-left:10px;margin-top: 5px "> 
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price: Rs.  {{$row->p_Price}}<br>
          </div>

         <a href="addToCart/{{$row->id}}" style="margin-bottom: 10px;margin-top: 10px;margin-left: 8px" class="btn btn-primary">Add to cart</a>
         <a href="Reviews/{{$row->id}}" class="btn btn-primary">Reviews</a>

        

        
         


        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection