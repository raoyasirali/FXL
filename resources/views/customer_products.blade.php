@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="float: left"><h5>Products of your searched category</h5>
                 <a href="viewCart" style="margin-left: 370px"><h4>View Cart</h4></a>
                 <div>  <a href="home"><h4>Back</h4></a></div>
                </div>
                 
                <div class="card-body">
                    
                   @foreach( $p_data as $row)
          <div id="img_div"style="margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="200"/><br>
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price:  {{$row->p_Price}}<br>
         <a href="addToCart/{{$row->id}}" class="btn btn-primary">Add to cart</a>
        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection