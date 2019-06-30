@include('b_master')
<br/>
<br/>
<div style="margin-left: 20px">
        @foreach( $p_data as $row )
          <div id="img_div"style="width: 15%;margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="100%"/><br>
          <div style="margin-left:10px;margin-top: 5px "> 
          ID: {{$row->id}} <br>
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price:Rs.  {{$row->p_Price}}<br>
        </div>
         
                 
          <a href="removePro/{{$row->id}}"  style="margin-top: 15px;margin-bottom: 15px;margin-left: 14%; width: 68%;" class="btn btn-danger">Remove Promotion</a>
           </div>
         @endforeach
      </div>