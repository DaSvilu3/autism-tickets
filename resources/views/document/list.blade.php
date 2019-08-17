@extends('layouts.app')

@section('content')

<div class="visible-print text-center">
	<h1>Document List</h1>
     
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <table class="table">
                <thead>
                    <tr>
                            {{-- <th> ID </th> --}}
                            <th>  </th>
                            <th> عنوان المستند </th>
                            <th>  Document Title</th>
                            <th> Action </th>


                    </tr>
                </thead>
                <tbody>
                @foreach ($doc as $item)
                    <tr> 
                        
                        <td>  </td> 
                        <td> {{ $item["name_ar"] }} </td> 
                        <td> {{ $item["name_en"] }} </td> 
                       
                    <td> 
                        <form action="/document/download"  method="get">
                            {{ csrf_field() }}
                        <input type="text" value="{{ $item['url'] }}" name="idd" hidden>
                                <input class="btn btn-primary"  style="color: white" type="submit" value="download">   <br><br>
                            
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
