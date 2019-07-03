@extends('layouts.app')

@section('content')
<html>
    <head>
      <!-- old online payment gate way files -->
        <!-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <!-- new online payment gateway files -->
        <title>Cart</title>
       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body onload="bill()">
<div class="container" style="float: left;">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style=""><h3>Your Cart</h3>
                  <!-- <div style="float: left;"><button class="btn btn-primary" id="placeOrder"> Place Order</button></div> -->
                  <!-- <div style="float: left; margin-left: 400px"><a href="viewCustMenuAgain" class="btn btn-primary">Back</a></div> -->
                  <div style="float: right; margin-right: 20px;margin-top: -40px"><a href="viewCustMenuAgain" class="btn btn-warning">Back</a></div>

                 
                </div>

                <div class="card-body">
                    
                   @foreach( $p_data as $row )
          <div id="img_div"style="width: 30%;margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray;min-height: 420px" >
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="100%"/><br>
         <div style="margin-left:10px;margin-top: 5px;min-height: 200px; ">
          <b>Name:</b> {{$row->p_Name}} <br>
          <b>Description:</b>  {{$row->p_Desc}}<br>
          <b>Price:</b> Rs.  <span id="pro_price">{{$row->p_Price}}</span><br>
          <b>Restuarant Name:</b>  {{$row->b_Name}}<br>
          <b>Address:</b>  {{$row->b_Address}}<br>
          <b>Delivery Address:</b>  {{$row->b_DArea}}<br>
         </div>
         <span style="margin-left:30px "><a href="RemoveCart/{{$row->id}}" class="btn btn-danger" style="margin-bottom: 10px;margin-top: 10px;">Remove From cart</a></span>
        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
<div style="width: 350px;padding-bottom: 50px;float: left;margin-left: -100px;border: solid thin #d6d8db;border-radius: 5px"><div style="float: left;width: 100%;border: solid thin #d6d8db;background-color: #eff2f7"><br/><h2 style="text-align: center;">Your Bill</h2><br/>
<h4 style="text-align: center;"> &nbsp Item Name & &nbsp Price</h4>
</div>
 <div style="float: left;margin-left: 6%">
 @foreach( $p_data as $row )
<div>
          &nbsp <div><b style="color: blue;">*</b>&nbsp {{$row->p_Name}}</div>
          <div>&nbsp  &nbsp Rs.  {{$row->p_Price}}</div>
     </div>
         @endforeach

<span style="font-size: 30px;margin-left: 10px" ><b>Total Bill: Rs. </b></span><span id="bill" style="font-size: 30px;margin-left: 10px"><b>0</b></span><br/><br/>


<form action="{{URL::to('c_checkout')}}" method="get" enctype="multipart/form-data" onsubmit="return verify();">
  <label><b>Delivery Address:</b></label><br/>
<?php
use App\User;
$userId = Auth::id();
$user = User::find($userId);


 echo " <input type='text' id='address' name='address' placeholder='Delivery Address.' required='' value='$user->address' style='width: 300px;'><br/>
  <!-- <span id='errAddress' style='color: red;'></span><br/> -->
  <label><b>Contact Number:</b></label><br/>
  <input type='text' id='contact' min(0) maxlength='11' pattern='[0-9]{11}' value=$user->mobile name='contact' placeholder='Contact:03231111111' required=''><br/>";
  ?>
  <!-- <span id="errContact" style="color: red;"></span><br/> -->
  <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
  <input type="hidden" name="tbill" id="tbill">
  <input type="hidden" name="ostatus" value="0">

  <input type="submit" class="btn btn-warning" value="CheckOut" style="margin-left: 45%">
</form>

 

<!-- <a href="onlinePay" > -->
  <form action="{{URL::to('onlinePay')}}" method="get" enctype="multipart/form-data"  onsubmit="return verify1();">
    <input type="hidden" name="t_bill" id="t_bill"  />
  <input type="submit" value="Online Payment" style="margin-top: -60px" id="online"   class="btn btn-warning"/>
</form>
<!-- </a> -->
</div>

<script>

  var total_bill=0;
  function bill(){
  
 @foreach( $p_data as $row )
           var price ={{$row->p_Price}};
          total_bill=document.getElementById("bill").innerHTML=parseInt(total_bill)+parseInt(price);
          document.getElementById("tbill").value=total_bill;
         @endforeach
       }
       
       function returnToPreviousPage() {
         window.history.back();
        }

        function verify(){
          if (total_bill==0) {
            alert("First add an Item in order to placeorder.");
             returnToPreviousPage();
              return false;
             }
          else{
           return true;
          }
        }


        function verify1(){
          if (total_bill==0) {
            alert("First add an Item in order to placeorder.");
             returnToPreviousPage();
             return false;
             }
          else{
            document.getElementById("t_bill").value =total_bill;
            return true;
           // document.getElementById("online").onclick = function () {
          // location.href = "onlinePay";
    // };
          }

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
</html>
@endsection