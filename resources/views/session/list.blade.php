@extends('layouts.app')

@section('content')

<section id="tabs">
        <div class="container">
            <br>
            <br>
            <h6 class="section-title h1">Sessions</h6>
            <div class="row">
                <div class="col-lg-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" 
                            role="tab" aria-controls="nav-home" aria-selected="true">1 November 2019</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" 
                            data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">2 November 2019</a>
                            <a class="nav-item nav-link" id="nav-about-tab" 
                            data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">3 November 2019</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            
                                <table class="table">
                                        <thead>
                                            <tr>
                                                    {{-- <th> ID </th> --}}
                                                    <th > Time </th>
                                                    {{-- <th width="20%" > Speaker </th> --}}
                                                    <th > Session </th>
                                                    <th > Place </th>
                                                    <th > Action </th>
                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($talks as $item)
                                                @if ($item->day != 1)
                                                    @continue
                                                @endif
                                                <tr> 
                                                    {{-- <td> {{ $item["id"] }} </td>  --}}
                                                    <td style="vertical-align: middle;"> 
                                                        <div class="text-center " 
                                                        style=" vertical-align: center;
                                                        font-weight: bold; font-size: 32px; line-height: 32px;">
                                                                {{ $item->time }}
                                                        </div>
                                                    </td> 
                                                    @if ($item->type != 3)
                                                    <td > 
                                                            <div class="text-center" >
                                                            <img src="https://autism19.com/{{ $item->img }}" 
                                                            style="width: 80px; width: 80px; border-radius: 8px;">
                                                            </div>
                                                          
                                                        
                                                        </td>     
                                                        <td> 
                                                                @switch($item->type)
                                                                @case(1)
                                                                <span class="badge badge-primary">Talk</span>
                                                                    @break
                                                                @case(2)
                                                                <span class="badge badge-dark">Workshop</span>
                                                                    @break
                                                                @default    
                                                            @endswitch
                                                            <br>
                                                            {{ $item->title }} 
                                                            <br>
                                                        <a target="_blank" style="color: blue;" 
                                                        href="https://autism19.com/single-speakers.php?id={{ $item->speaker_id }}"> {{ $item->name_en }} </a>
                                                        </td> 
                                                        <td> {{ $item->location }} </td>                             
                                                        <td> 
                                                            <form action="post" >
                                                            <input type="text" name="id" id="id" hidden value="{{ $item->id }}">
                                                            <input type="submit" class="btn btn-primary" >    
                                                            </form>    
                                                        
                                                        </td>
                                                    @else
                                                    <td> </td>
                                                    <td> {{ $item->title }}  </td>
                                                    <td> {{ $item->location }} </td>             
                                                    <td> 
                        
                                                    </td>
                                                    </tr>
                                                    @endif
                                                    
                                                
                                                </tr>
                                            @endforeach
                                        <tbody>
                                    </table>
                            
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <table class="table">
                                <thead>
                                    <tr>
                                            {{-- <th> ID </th> --}}
                                            <th width="10%"> Time </th>
                                            <th width="20%" > Speaker </th>
                                            <th width="45%"> Session </th>
                                            <th width="15%"> Place </th>
                                            <th width="10%"> Action </th>
                
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($talks as $item)
                                        @if ($item->day != 2)
                                            @continue
                                        @endif
                                        <tr> 
                                            {{-- <td> {{ $item["id"] }} </td>  --}}
                                            <td style="vertical-align: middle;"> 
                                                <div class="text-center " 
                                                style=" vertical-align: center;
                                                font-weight: bold; font-size: 32px; line-height: 32px;">
                                                        {{ $item->time }}
                                                </div>
                                            </td> 
                                            @if ($item->type != 3)
                                            <td > 
                                                    <div class="text-center" >
                                                    <img src="https://autism19.com/{{ $item->img }}" 
                                                    style="width: 80px; width: 80px; border-radius: 8px;">
                                                    </div>
                                                  
                                                
                                                </td>     
                                                <td> 
                                                        @switch($item->type)
                                                        @case(1)
                                                        <span class="badge badge-primary">Talk</span>
                                                            @break
                                                        @case(2)
                                                        <span class="badge badge-dark">Workshop</span>
                                                            @break
                                                        @default    
                                                    @endswitch
                                                    <br>
                                                    {{ $item->title }} 
                                                    <br>
                                                <a target="_blank" style="color: blue;" 
                                                href="https://autism19.com/single-speakers.php?id={{ $item->speaker_id }}"> {{ $item->name_en }} </a>
                                                </td> 
                                                <td> {{ $item->location }} </td>                             
                                                <td> 
                                                    <form action="post" >
                                                    <input type="text" name="id" id="id" hidden value="{{ $item->id }}">
                                                    <input type="submit" class="btn btn-primary" >    
                                                    </form>    
                                                
                                                </td>
                                            @else
                                            <td> </td>
                                            <td> {{ $item->title }}  </td>
                                            <td> {{ $item->location }} </td>             
                                            <td> 
                
                                            </td>
                                            </tr>
                                            @endif
                                            
                                        
                                        </tr>
                                    @endforeach
                                <tbody>
                            </table>    
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <table class="table">
                                        <thead>
                                            <tr>
                                                    {{-- <th> ID </th> --}}
                                                    <th width="10%"> Time </th>
                                                    <th width="20%" > Speaker </th>
                                                    <th width="45%"> Session </th>
                                                    <th width="15%"> Place </th>
                                                    <th width="10%"> Action </th>
                        
                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach ($talks as $item)
                                                @if ($item->day != 3)
                                                    @continue
                                                @endif
                                                <tr> 
                                                    {{-- <td> {{ $item["id"] }} </td>  --}}
                                                    <td style="vertical-align: middle;"> 
                                                        <div class="text-center " 
                                                        style=" vertical-align: center;
                                                        font-weight: bold; font-size: 32px; line-height: 32px;">
                                                                {{ $item->time }}
                                                        </div>
                                                    </td> 
                                                    @if ($item->type != 3)
                                                    <td > 
                                                            <div class="text-center" >
                                                            <img src="https://autism19.com/{{ $item->img }}" 
                                                            style="width: 80px; width: 80px; border-radius: 8px;">
                                                            </div>
                                                          
                                                        
                                                        </td>     
                                                        <td> 
                                                                @switch($item->type)
                                                                @case(1)
                                                                <span class="badge badge-primary">Talk</span>
                                                                    @break
                                                                @case(2)
                                                                <span class="badge badge-dark">Workshop</span>
                                                                    @break
                                                                @default    
                                                            @endswitch
                                                            <br>
                                                            {{ $item->title }} 
                                                            <br>
                                                        <a target="_blank" style="color: blue;" 
                                                        href="https://autism19.com/single-speakers.php?id={{ $item->speaker_id }}"> {{ $item->name_en }} </a>
                                                        </td> 
                                                        <td> {{ $item->location }} </td>                             
                                                        <td> 
                                                            <form action="post" >
                                                            <input type="text" name="id" id="id" hidden value="{{ $item->id }}">
                                                            <input type="submit" class="btn btn-primary" >    
                                                            </form>    
                                                        
                                                        </td>
                                                    @else
                                                    <td> </td>
                                                    <td> {{ $item->title }}  </td>
                                                    <td> {{ $item->location }} </td>             
                                                    <td> 
                        
                                                    </td>
                                                    </tr>
                                                    @endif
                                                    
                                                
                                                </tr>
                                            @endforeach
                                        <tbody>
                                    </table>
                       </div>
                    </div>
                
                </div>
            </div>
        </div>
    </section>



<script >
    function redirect(go){
        location.href = go;
    }
</script>



@endsection

<style>


/***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

/* Tabs panel */
.tabbable-panel {
  border:1px solid #eee;
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
}
.tabbable-line > .nav-tabs > li {
  margin-right: 2px;
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: #737373;
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid #fbcdcf;
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid #f3565d;
  position: relative;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0;
  color: #333333;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  background-color: #fff;
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f3565d;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}
</style>