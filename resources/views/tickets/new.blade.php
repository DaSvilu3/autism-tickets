@extends('layouts.app')

@section('content')
<div class="container">
    
        <h2>Get A ticket</h2>
 
        <form method="post" action="/ticket/new" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                <input name="name" type="text" value="{{ $user->name }}" required class="form-control" id="name" placeholder="Ticket Issued Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="count" class="col-sm-3 col-form-label" >Count</label>
                <div class="col-sm-9">
                    <input id="count" name="count" min=1 type="number" value="1" class="form-control" onchange="changeMe()" id="publisherid"
                           placeholder="0,2,3">
                </div>
            </div>

            <hr>
            <div class="form-group row">
                <label for="usage" class="col-sm-3 col-form-label">Uses Type</label>
                <div class="col-sm-9">
                        <div class="radio">
                                <label><input type="radio" name="usage" value="1" checked>  Self-using </label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="usage" value="2">  Denote to Admin</label>
                              </div>
                             
                </div>
            </div>

            <div class="form-group row">
                    <label for="usage" class="col-sm-3 col-form-label">Price</label>
                    <div class="col-sm-9">
                        <h3 id="price"> </h3>       
                    </div>
                </div>
            
            <div class="form-group row">
                <div class="offset-sm-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Get New Ticket </button>
                </div>
            </div>
        </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
    function redirect(go){
        location.href = go;
    }
    changeMe();
    function changeMe(){
        var count = document.getElementById("count").value;
        // debugger
        console.log( count);
        var htm = "<tr> <td> " +  (count * 100) + "</td> <td> " + " R.O" + "</td> </tr>";
        htm 
        document.getElementById('price').innerHTML = (count * 100) + "  R.O" + "<br>" + (count * 259.75) + "    $"
    //    debugger

    }

    

</script>



@endsection
