@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  a { color: black; }
</style>
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order Best food from your surrounding restaurants</div>
                            <div style="color: red; margin-left: 50px">
                                @if($message = Session::get('msg'))
                                 <div>
                                    
                                    {{$message}}
                                 </div>

                                @endif
                             </div><br/>
                <div class="card-body" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="mainForm">
                   <form action="{{URL::to('foodCategory')}}" method="POST" enctype="multipart/form-data">
<!--                    <h2>Search Food by Category</h2>
                   <select id="p_category" name="p_category">
                        <option value="1">Fast Food</option>
                        <option value="2">Chinese</option>
                        <option value="3">Itaian</option>
                        <option value="4">Desi</option>
                    </select><br/> -->
<div class="container">
                    <h2>Search Food by Name</h2>
                    <div class="row">
                    <div class="form-group">
                          
                          <select required id="carea" name="carea" id="carea" class="form-control">
                            
                            <option value="">-Select-</option>;
                            <option value="WapdaTown">Wapda Town</option>;
                            <option value="Township">Township</option>;
                            <option value="Modeltown">Model town</option>;
                            <option value="Walton">Walton</option>;
                            <option value="Allama Iqbal Town">Allama Iqbal Town</option>;
                            <option value="Izmir Town">Izmir Town</option>;
                            <option value="Bahria Town">Bahria Town</option>;
                            <option value="Shadman">Shadman</option>;
                            <option value="Muslim Town">Muslim Town</option>;
                            <option value="Jubliee Town">Jubliee Town</option>;
                            <option value="PCSIR Housing Societ">PCSIR Housing Societ</option>;
                            <option value="LDA Avenue">LDA Avenue</option>;
                            <option value="Johar Town">Johar Town</option>;
                            <option value="Barki">Barki</option>;
                            <option value="Harbanspura">Harbanspura</option>;
                            <option value="Mughalpura">Mughalpura</option>;
                            <option value="Faisal Town">Faisal Town</option>;
                            <option value="Mozang">Mozang</option>;
                            <option value="Garhi Shahu">Garhi Shahu</option>;
                            <option value="Gulberg">Gulberg</option>;
                            <option value="Garden Town">Garden Town</option>;
                            <option value="Kot Lakhpat">Kot Lakhpat</option>;
                            <option value="Gulshan e Ravi">Gulshan e Ravi</option>;
                            <option value="Sodiwal">Sodiwal</option>;
                            <option value="Multan Chungi">Multan Chungi</option>;
                            <option value="Samanabad">Samanabad</option>;
                            <option value="Mustafa Town">Mustafa Town</option>;
                            <option value="Green Town">Green Town</option>;
                            <option value="Niaz Baig">Niaz Baig</option>;
                            <option value="Chung">Chung</option>;
                            <option value="Awan Town">Awan Town</option>;
                            <option value="Valencia">Valencia</option>;

                            
                          </select>
                         </div>
                   <input type="text" style="margin-left: 2%;width: 43%;border-top-left-radius: 10px;border-bottom-left-radius: 10px;height: 35px;margin-right: 0px;padding-right: 0px;" id="p_category" name="p_category" placeholder="   Enter Food Item: PIZZA, BURGER, ETC." required="" onkeyup="
                      var start = this.selectionStart;
                      var end = this.selectionEnd;
                      this.value = this.value.toUpperCase();
                      this.setSelectionRange(start, end);
                    ">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;height: 35px;width: 8%;margin-left: -5px;padding-left: 0px;" class="btn btn-primary" name="" ><i class="fa fa-search"></i></button></div>

                    <div class="container">
                      <div class="row"></div>
                      <div id="categoryList" style="margin-left: 24%;margin-top: -3%;color: black;">
                       {{ csrf_field() }}
                       </div>
                       </div>
                    </form>
</div>
                    
                  <br/><br/>
                  

                       <div style="margin-left: 48%;"> OR</div><br>

                       
                 <button class="btn btn-primary" onclick="allcat()"> View All Categories</button>
                  <button  class="btn btn-primary" onclick="allPro()">View Items in Promotion</button>
                 <!-- <a href="viewBudgetProducts" class="btn btn-primary">Want to see items with in your buduget?</a>
 -->            
                <button class="btn btn-primary" id="budBtn" onclick="budget()">Want to see items with in your buduget?</button>   
                </div><br/>



                <div id="bForm" style="display: none;">
                    <form action="{{URL::to('searchBProducts')}}" method="POST" enctype="multipart/form-data">
                        <h2>Search Items Within your budget</h2>


                      <label style="font-size: 18px;;margin-top: 4%;"><b>Enter Item Name: </b></label>
                      
                      <input type="text" name="search" style="width: 300px;height: 35px;" placeholder="   Enter Food Item: PIZZA, BURGER, ETC." onkeyup="
                      var start = this.selectionStart;
                      var end = this.selectionEnd;
                      this.value = this.value.toUpperCase();
                      this.setSelectionRange(start, end);
                      "><input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>

                      <label style="font-size: 18px;margin-top: 2%;"><b>Enter Budget: </b></label>
                      
                      <input type="number" name="budget" min="0" style="width: 300px;height: 35px;margin-left: 30px;" placeholder="   Enter budget:100,500,1000, ETC."/><br/>
                      <input style="margin-left: 55%;margin-top: 2%;" type="submit" class="btn btn-primary" value="Search">

                           </form>
                           </div>
                <script>
                 // $(document).ready(function(){
                 // $("#budBtn").click(function(){                    
                 //     $("#mainForm").hide();
                 //    $("#bForm").show();
                 //    });
                 // });



                 function allcat()
                    {
                    var e = document.getElementById("carea");
                    var userarea = e.options[e.selectedIndex].value;

                    // var strUser1 = e.options[e.selectedIndex].text;
                      if(userarea=="")
                      {

                       alert("Please select your area first");
                      }
                      else{
                          var date = new Date();
                          date.setTime(date.getTime()+(60*60*1000));
                          document.cookie = "user_area" + "=" + userarea + "; expires=" + date.toGMTString();
                       location.href = "viewAllProducts"; 
                      }
                    }

                    function allPro()
                    {
                    var e = document.getElementById("carea");
                    var userarea = e.options[e.selectedIndex].value;

                    // var strUser1 = e.options[e.selectedIndex].text;
                      if(userarea=="")
                      {

                       alert("Please select your area first");
                      }
                      else{
                          var date = new Date();
                          date.setTime(date.getTime()+(60*60*1000));
                          document.cookie = "user_area" + "=" + userarea + "; expires=" + date.toGMTString();
                       location.href = "viewAllProProducts"; 
                      }
                    }

                    function budget()
                    {
                    var e = document.getElementById("carea");
                    var userarea = e.options[e.selectedIndex].value;

                    // var strUser1 = e.options[e.selectedIndex].text;
                      if(userarea=="")
                      {

                       alert("Please select your area first");
                      }
                      else{
                          var date = new Date();
                          date.setTime(date.getTime()+(60*60*1000));
                          document.cookie = "user_area" + "=" + userarea + "; expires=" + date.toGMTString();
                           
                                               
                               $("#mainForm").hide();
                              $("#bForm").show();
                           
                           
                      }
                    }



                    $(document).ready(function(){

 $('#p_category').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#categoryList').fadeIn();
           // $('#categoryList').css('color', 'black');  
                    $('#categoryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#p_category').val($(this).text());  
        $('#categoryList').fadeOut();  
    });  

});
// $(document).not("#categoryList").click(function() {
//         $('#categoryList').hide();
//     });
    //     $("#categoryList").focusout(function() {
    //     $('#categoryList').hide();
    // });
                           </script>
                       


                </div> 
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
