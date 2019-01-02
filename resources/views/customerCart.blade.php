@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=""><h3>Your Cart</h3>
                  <div style="float: left;"><a href="placeorder" class="btn btn-primary" >Place Order</a></div>
                  <div style="float: left; margin-left: 400px"><a href="viewCustMenuAgain" class="btn btn-primary">Back</a></div>

                 
                </div>

                <div class="card-body">
                    
                   @foreach( $p_data as $row )
          <div id="img_div"style="margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="200"/><br>
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price:  {{$row->p_Price}}<br>
         <span style="margin-left:30px "><a href="RemoveCart/{{$row->id}}" class="btn btn-danger">Remove From cart</a></span>
        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection