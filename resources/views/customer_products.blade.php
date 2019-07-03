<?php
use App\Review;
?>
@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header" style="float: left"><h5>Products of your searched category</h5>
                 <div style="float: left;"><a href="viewCart"  class="btn btn-warning">View Cart</a></div>
                 <div style="float: left;">  <a href="home" class="btn btn-warning" style="margin-left: 620px">Back</a></div>
                </div>
                  <div style="color: green; margin-left: 50px">
                                @if($message = Session::get('msg'))
                                 <div>
                                    
                                   <b> {{$message}}</b>
                                 </div>

                                @endif
                             </div><br/>
                <div class="card-body">
                    <?php 
                    $i=1;
                     ?>
                   @foreach( $p_data as $row)
          <div id="img_div"style="width: 30%;margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray;height: 470px">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="100%"/><br>
          <div style="margin-left:10px;margin-top: 5px;min-height: 200px; "> 
          <b>Name:</b> {{$row->p_Name}} <br>
          <b>Description:</b>  {{$row->p_Desc}}<br>
          <b>Price:</b> Rs.  {{$row->p_Price}}<br>
          <b>Restuarant Name:</b>  {{$row->b_Name}}<br>
          <b>Address:</b>  {{$row->b_Address}}<br>
          <b>Delivery Area:</b>  {{$row->b_DArea}}<br><br>
            
          <?php
          $r_data= Review::all()->where('product_id',$row->id);
          $posr_data= Review::all()->where('product_id',$row->id)->where('pos','1');
          $negr_data= Review::all()->where('product_id',$row->id)->where('neg','1');
          $neur_data= Review::all()->where('product_id',$row->id)->where('neu','1');
          $r_count=$r_data->count();
          $posr_count=$posr_data->count();
          $negr_count=$negr_data->count();
          $neur_count=$neur_data->count();
          ?></div>
          <label style="float: left;margin-left:10px;"><b>Reviews:</b></label><?php echo "<div id='reviewid.$i' style='width: 20%;font-size: 14px;border:solid thin grey;border-radius: 5px;float: left;text-align: center;margin-left: 5px;'>"; echo $r_count;
          if(($posr_count > $negr_count) && ($posr_count > $neur_count))
          {

          echo "<script type='text/javascript'>
          ";
          echo "document.getElementById('reviewid.$i').style.backgroundColor = 'green';
          ";
          echo "document.getElementById('reviewid.$i').title = 'More Positive Reviews';
          ";
          echo "document.getElementById('reviewid.$i').style.color = 'white';
          ";
          echo "</script>";
          }
 
          if(($negr_count > $posr_count) && ($negr_count > $neur_count))
          {

          echo "<script type='text/javascript'>
          ";
          echo "document.getElementById('reviewid.$i').style.backgroundColor = 'red';
          ";
          echo "document.getElementById('reviewid.$i').title = 'More Negative Reviews';
          ";
          echo "document.getElementById('reviewid.$i').style.color = 'white';
          ";
          echo "</script>";
          }

          if(($neur_count > $negr_count) && ($neur_count > $posr_count))
          {

          echo "<script type='text/javascript'>
          ";
          echo "document.getElementById('reviewid.$i').style.backgroundColor = 'blue';
          ";
          echo "document.getElementById('reviewid.$i').title = 'Neutral Reviews';
          ";
          echo "document.getElementById('reviewid.$i').style.color = 'white';
          ";
          echo "</script>";
          }

          if($negr_count == $posr_count)
          {

          echo "<script type='text/javascript'>
          ";
          echo "document.getElementById('reviewid.$i').style.backgroundColor = 'blue';
          ";
          echo "document.getElementById('reviewid.$i').title = 'Neutral Reviews';
          ";
          echo "document.getElementById('reviewid.$i').style.color = 'white';
          ";
          echo "</script>";
          }
          
            $i++;
          echo "</div>";
?>
          <br/><br/>

         <a href="addToCart/{{$row->id}}" style="margin-bottom: 10px;margin-top: 10px;margin-left: 12%;float: left;" class="btn btn-warning">Add to cart</a>
         <a href="Reviews/{{$row->id}}" style="margin-bottom: 10px;margin-top: 10px;margin-left: 5px;float: left;" class="btn btn-warning">Reviews</a>

        

        
         


        
          
                 
           </div>
         @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection