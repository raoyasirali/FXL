@extends('layouts.app')

@section('content')
<head>
  <title>Cart</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body onload="bill()">
<div class="container" style="float: left;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style=""><h3>Your Cart</h3>
                  <!-- <div style="float: left;"><button class="btn btn-primary" id="placeOrder"> Place Order</button></div> -->
                  <!-- <div style="float: left; margin-left: 400px"><a href="viewCustMenuAgain" class="btn btn-primary">Back</a></div> -->
                  <div style="float: right; margin-right: 20px;margin-top: -40px"><a href="viewCustMenuAgain" class="btn btn-primary">Back</a></div>

                 
                </div>

                <div class="card-body">
                    
                   @foreach( $p_data as $row )
          <div id="img_div"style="margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="200"/><br>
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price:  <span id="pro_price">{{$row->p_Price}}</span><br>
         <span style="margin-left:30px "><a href="RemoveCart/{{$row->id}}" class="btn btn-danger" style="margin-bottom: 10px;margin-top: 10px;">Remove From cart</a></span>
        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width: 350px;padding-bottom: 50px;float: left;margin-left: -100px;border: solid thin #d6d8db;border-radius: 5px"><div style="float: left;width: 100%;border: solid thin #d6d8db;background-color: #eff2f7"><br/><h2 style="margin-left: 20px">Your Bill</h2><br/></div>
 <div style="float: left;margin-left: 7%">
 @foreach( $p_data as $row )

          Name: {{$row->p_Name}}<span style="margin-left: 50px">
          Price:  {{$row->p_Price}}</span><br>
         @endforeach

<span style="font-size: 30px;margin-left: 10px" ><b>Total Bill:</b></span><span id="bill" style="font-size: 30px;margin-left: 10px"><b>0</b></span><br/><br/>


<form action="{{URL::to('c_checkout')}}" method="get" enctype="multipart/form-data">
  <label><b>Delivery Address:</b></label><br/>
  <input type="text" id="address" name="address" placeholder="Delivery Address." required="" style="width: 300px;"><br/>
  <!-- <span id="errAddress" style="color: red;"></span><br/> -->
  <label><b>Contact Number:</b></label><br/>
  <input type="text" id="contact" name="contact" placeholder="Contact Number." required=""><br/>
  <!-- <span id="errContact" style="color: red;"></span><br/> -->
  <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
  <input type="hidden" name="tbill" id="tbill">
  <input type="hidden" name="ostatus" value="0">
  <input type="submit" class="btn btn-primary" value="CheckOut" style="margin-left: 35%">
</form>
</div>

<!-- <a href="placeorder"><button id="Checkout" style="display: none;margin-left: 35%" class="btn btn-primary">Checkout</button></a> -->
<!-- <input type="text" id="bill" readonly> -->
<!-- <button onclick="bill()">Checkout</button> -->

<script>

  var total_bill=0;
  function bill(){
  
 @foreach( $p_data as $row )

          // var price =document.getElementById("pro_price").value;
           var price ={{$row->p_Price}};

          total_bill=document.getElementById("bill").innerHTML=parseInt(total_bill)+parseInt(price);
          document.getElementById("tbill").value=total_bill;
          // alert(total_bill);
         @endforeach
         // document.getElementById("Checkout").style.display = "block";
         // document.getElementById("placeOrder").style.display = "none";
       }

       // function verify(){
       //  var isValid=true;
       //  if($("#address").val()==""){
       //  $("#errAddress").html("  Please enter Address ");
       //  isValid = false;
       //    }
       //  else{
       //    $("#address").html("");
       //    }

       //    if($("#contact").val()==""){
       //  $("#errContact").html("  Please enter Contact Number ");
       //  isValid = false;
       //    }
       //  else{
       //    $("#address").html("");
       //    }

       //    return isValid;

       // }
</script>

</div>
</body>
@endsection