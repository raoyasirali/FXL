@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="float: left"><h5>Products of All category</h5>
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
                <div class="card-body" style="width: 900px">
                    
                   @foreach( $p_data as $row)
          <div id="img_div"style="margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="200"/><br>
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price:  {{$row->p_Price}}<br>
         <a href="addToCart/{{$row->id}}" class="btn btn-primary">Add to cart</a>
         <a href="Reviews/{{$row->id}}" class="btn btn-primary">Reviews</a>

         

        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection