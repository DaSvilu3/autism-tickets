@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>

                <div class="card-body">
                    <div class="row">
                        
                            <div class="col-md-4 text-center" onclick="redirect('/ticket/new');" > 
                                 <div class="text-center" style="border: 1px solid black; box-shadow: 5px 10px; padding: 10px; margin-left: 10%; margin-right: 10%">
                                        <br>
                                     <img width="50%" src="img/receipt.png" style="margin-left: 0 auto; margin-right: 0 auto;" alt="">
                                                                
                                     <br>
                                     <br>
                                     <br>
                                    <h3>New Ticket</h3>
                                    <br> 
                                </div>
                            </div>
                       
                            <div class="col-md-4 text-center" onclick="redirect('/ticket/list');"> 
                                    <div class="text-center" style="border: 1px solid black; box-shadow: 5px 10px; padding: 10px; margin-left: 10%; margin-right: 10%">
                                        <br>
                                       
                                        <img width="50%" src="img/tickets-2.png" style="margin-left: 0 auto; margin-right: 0 auto;" alt="">
                                                                   
                                        <br>
                                        <br>
                                        <br>
                                       <h3 style="text-decoration: none;">My Tickets</h3>
                                       <br> 
                                   
                                   </div>
                            </div>

                            <div class="col-md-4 text-center" onclick="redirect('/document');" > 
                                    <div class="text-center" style="border: 1px solid black; box-shadow: 5px 10px; padding: 10px; margin-left: 10%; margin-right: 10%">
                                        <br>
                                        <img width="50%" src="img/record.png" style="margin-left: 0 auto; margin-right: 0 auto;" alt="">
                                                                   
                                        <br>
                                        <br>
                                        <br>
                                       <h3>Documents</h3>
                                       <br> 
                                   </div>
                               </div>
                               <div class="col-md-4 text-center" style="margin-top: 10% " onclick="redirect('/session')"> 
                                    <div class="text-center" style="border: 1px solid black; box-shadow: 5px 10px; padding: 10px; margin-left: 10%; margin-right: 10%">
                                        <br>   
                                        <img width="50%" src="img/training.png" style="margin-left: 0 auto; margin-right: 0 auto;" alt="">
                                                                   
                                        <br>
                                        <br>
                                        <br>
                                       <h3>Sessions</h3>
                                       <br> 
                                   </div>
                               </div>

                               <div class="col-md-4 text-center" style="margin-top: 10% " onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> 
                                    <div class="text-center" style="border: 1px solid black; box-shadow: 5px 10px; padding: 10px; margin-left: 10%; margin-right: 10%">
                                        <br>
                                        <img width="50%" src="img/logout.png" style="margin-left: 0 auto; margin-right: 0 auto;" alt="">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>         
                                        <br>
                                        <br>
                                        <br>
                                       <h3>Logout</h3>
                                       <br> 
                                   </div>
                               </div>
                    </div>
                  
                
            </div>
        </div>
    </div>
</div>

<script >
    function redirect(go){
        location.href = go;
    }
</script>



@endsection
