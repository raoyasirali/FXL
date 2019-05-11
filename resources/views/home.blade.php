@extends('layouts.app')

@section('content')
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
                   <form action="{{URL::to('foodCategory')}}" method="POST" enctype="multipart/form-data">
                   <h2>Search Food by Category</h2>
                   <select id="p_category" name="p_category">
                        <option value="1">Fast Food</option>
                        <option value="2">Chinese</option>
                        <option value="3">Itaian</option>
                        <option value="4">Desi</option>
                    </select></span> 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" name="" value="Search" class="btn btn-primary">
                    </form>
                  <div ><br>
                       <div> OR</div><br>
                 <a href="viewAllProducts" class="btn btn-primary">View All Categories</a>
                 <a href="viewBudgetProducts" class="btn btn-primary">Want to see items with in your buduget?</a>
                    </div> 
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
