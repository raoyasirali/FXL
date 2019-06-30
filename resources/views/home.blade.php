@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
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
                            
                            <option value="">-Select Your Area-</option>;
                            <option value="wapdatown">Wapda Town</option>;
                            <option value="township">Township</option>;
                            <option value="modeltown">Model town</option>;
                            <option value="Walton">Walton</option>;

                             <option value="wapdatown">Wapda Town</option>;
                            <option value="township">Township</option>;
                            <option value="modeltown">Model town</option>;
                            <option value="Walton">Walton</option>;

                             <option value="wapdatown">Wapda Town</option>;
                            <option value="township">Township</option>;
                            <option value="modeltown">Model town</option>;
                            <option value="Walton">Walton</option>;
                            
                          </select>
                         </div>
                   <input type="text" style="margin-left: 2%;width: 43%;border-top-left-radius: 10px;border-bottom-left-radius: 10px;height: 35px;margin-right: 0px;padding-right: 0px;" id="p_category" name="p_category" placeholder="   Enter Food Item: PIZZA, BURGER, ETC." required="" onkeyup="
                      var start = this.selectionStart;
                      var end = this.selectionEnd;
                      this.value = this.value.toUpperCase();
                      this.setSelectionRange(start, end);
                    ">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;height: 35px;width: 8%;margin-left: -5px;padding-left: 0px;" class="btn btn-primary" name="" ><i class="fa fa-search"></i></button>
                    </form>
</div>
                    </div>
                  <br>
                       <div> OR</div><br>

                       
                 <a href="viewAllProducts" ><button class="btn btn-primary" onclick="myFunction()"> View All Categories</button></a>
                  <a href="viewAllProProducts" class="btn btn-primary">View Items in Promotion</a>
                 <!-- <a href="viewBudgetProducts" class="btn btn-primary">Want to see items with in your buduget?</a>
 -->            
                <button class="btn btn-primary" id="budBtn" >Want to see items with in your buduget?</button>   
                </div>     


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
                      
                      <input type="number" name="budget" style="width: 300px;height: 35px;margin-left: 30px;" placeholder="   Enter budget:100,500,1000, ETC."/><br/>
                      <input style="margin-left: 55%;margin-top: 2%;" type="submit" class="btn btn-primary" value="Search">

                           </form>
                           </div>
                <script>
                 $(document).ready(function(){
                 $("#budBtn").click(function(){                    
                     $("#mainForm").hide();
                    $("#bForm").show();
                    });
                 });
                           </script>
                       


                </div> 
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
