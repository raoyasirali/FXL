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
         <a href="edit/{{$row->id}}"  style="margin-bottom: 10px;margin-top: 10px;margin-left: 13%; width: 35%" class="btn btn-primary">Edit</a>
        
          <a href="delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                 
           </div>
         @endforeach
      </div>