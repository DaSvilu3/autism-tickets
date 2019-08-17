@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <a class="btn btn-primary" href="/ticket/new/" style="color: white"> New Ticket </a> <br><br>
            <table class="table">
                <thead>
                    <tr>
                            {{-- <th> ID </th> --}}
                            <th> Name Of Holder </th>
                            <th> Date Issued </th>
                            <th> Notes </th>
                            <th> Action </th>


                    </tr>
                </thead>
                <tbody>
                @foreach ($tickets as $item)
                    <tr> 
                        {{-- <td> {{ $item["id"] }} </td>  --}}
                        <td> {{ $item["name"] }} </td> 
                        <td> {{ $item["created_at"] }} </td> 
                        <td> {{ $item["ticket_type"] }} </td> 
                    <td> 
                        <form action="/ticket/view/"  method="post">
                            {{ csrf_field() }}
                                <input type="text" value="{{ $item["id"] }}" name="idd" hidden>
                                <input class="btn btn-primary"  style="color: white" type="submit" value="view">   <br><br>
                            
                            </form>    
                    </td>

                    
                    
                    </tr>
                @endforeach
                <tbody>
            </table>
        </div>
    </div>
</div>

<script >
    function redirect(go){
        location.href = go;
    }
</script>



@endsection
