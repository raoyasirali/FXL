@include('b_master')
<div style="margin-left: 20px">
        @foreach( $p_data as $row )
          <div id="img_div"style="margin-top: 20px ;margin-left:20px;float: left;border: solid thin gray">
           <img src="uploads/{{$row->p_Img_Name}}" height="150" width="200"/><br>
          ID: {{$row->id}} <br>
          Name: {{$row->p_Name}} <br>
          Description:  {{$row->p_Desc}}<br>
          Price:  {{$row->p_Price}}<br>
         <a href="edit/{{$row->id}}" class="btn btn-primary">Edit</a>
        
          <a href="delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                 
           </div>
         @endforeach
      </div>