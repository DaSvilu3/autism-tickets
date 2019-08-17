@extends('layouts.app')

@section('content')
<style>
#container{
	font-family:Arial, Helvetica, sans-serif;
	position:absolute;
	top:0;
	left:0;
	background: #005778;
	width:100%;
	height:100%;
}

#button-container{
	position:relative;
	left:40%;
	width:203px;
	height:43px;
	background:#022c3e;
	padding-top:5px;
	margin-top:10px;
	-webkit-border-radius:38px;
	-moz-border-radius:38px;
	border-radius:38px;
	-webkit-box-shadow:inset 0 1px 2px #000, 0px 1px 1px rgba(255,255,225,0.2);
	-moz-box-shadow:inset 0 1px 2px #000, 0px 1px 1px rgba(255,255,225,0.2);
	box-shadow:inset 0 1px 2px #000, 0px 1px 0px rgba(255,255,225,0.3);
	/*Hover effect*/
	-webkit-transition: .5s all;
	-moz-transition: .5s all;
	-o-transition: .5s all;
	-ms-transition: .5s all;
	transition: .5s all;}

#button{
	position: absolute;
	top: 5px;
	left: 5px;
	width:193px;
	height:38px;
	margin:0px auto;
	-webkit-border-radius:20px;
	-moz-border-radius:20px;
	border-radius:20px;
	cursor:pointer;

}

#button p{
	margin-top: 11px;
	margin-left:60px;
	font-size:.9em;
}

#button-container:hover {
	-webkit-box-shadow: inset 0 1px 2px #000, 0px 0px 10px 5px rgba(255,255,225,0.2);
}

/*Colors*/
.yellow{
/*Gradient*/
	background: rgb(255,197,120); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(255,197,120,1) 0%, rgba(251,157,35,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,197,120,1)), color-stop(100%,rgba(251,157,35,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgba(255,197,120,1) 0%,rgba(251,157,35,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgba(255,197,120,1) 0%,rgba(251,157,35,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgba(255,197,120,1) 0%,rgba(251,157,35,1) 100%); /* IE10+ */
	background: linear-gradient(top, rgba(255,197,120,1) 0%,rgba(251,157,35,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffc578', endColorstr='#fb9d23',GradientType=0 ); /* IE6-9 */
}

.green{
	background: rgb(205,235,142); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(205,235,142,1) 0%, rgba(165,201,86,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(205,235,142,1)), color-stop(100%,rgba(165,201,86,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgba(205,235,142,1) 0%,rgba(165,201,86,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgba(205,235,142,1) 0%,rgba(165,201,86,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgba(205,235,142,1) 0%,rgba(165,201,86,1) 100%); /* IE10+ */
	background: linear-gradient(top, rgba(205,235,142,1) 0%,rgba(165,201,86,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cdeb8e', endColorstr='#a5c956',GradientType=0 ); /* IE6-9 */
}

.blue{
	background: rgb(122,188,255); /* Old browsers */
	background: -moz-linear-gradient(top, rgba(122,188,255,1) 0%, rgba(96,171,248,1) 44%, rgba(64,150,238,1) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(122,188,255,1)), color-stop(44%,rgba(96,171,248,1)), color-stop(100%,rgba(64,150,238,1))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* IE10+ */
	background: linear-gradient(top, rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee',GradientType=0 ); /* IE6-9 */
}

/*ICONS*/
#clock{
	position:absolute;
	top:10px;
	left:20px;
	width:15px;
	height:15px;
	border:2px solid #000;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	filter: alpha(opacity=80);
	opacity:0.8;
}
#clock-hand1{
	position:absolute;
	width:0px;
	height:5px;
	border:1px solid #000;
	top:2px;
	left:7px;
}
#clock-hand2{
	position:absolute;
	width:5px;
	height:0px;
	border:1px solid #000;
	top:7px;
	left:7px;
}

#order{
	position:absolute;
	top:10px;
	left:23px;
	width:10px;
	height:15px;
	border:2px solid #000;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
	border-top-right-radius:5px;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	filter: alpha(opacity=80);
	opacity:0.8;
}

#order-line{
	position:absolute;
	width:4px;
	height:0px;
	border:1px solid #000;
	top:5px;
	left:0px;
}

#order-line:nth-child(2){
	top:10px;
	width:6px;
}

#camera{
	position:absolute;
	top:12px;
	left:23px;
	width:17px;
	height:11px;
	border:2px solid #000;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
	filter: alpha(opacity=80);
	opacity:0.8;
}

#camera-optics{
	position:absolute;
	top:1px;
	left:4px;
	width:5px;
	height:5px;
	border:2px solid #000;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
}

#camera-button{
	position:absolute;
	top:-3px;
	left:1px;
	width:0px;
	height:0px;
	border:2px solid #000;
	border-bottom:0;
}
</style>
<div class="visible-print text-center">
     
    <div class="container">
            <div class="row">
                    <div class="col-md-12">
            
					   {!! QrCode::size(400)->generate($tck["code"]); !!}
					   <br>
					  
						</div>

                    <div class="col-md-12" dir="ltr">
						<div></div>
						<h2 style="float: left">Ticket Details</h2>
						<h2 style="float: right">تفاصيل التذكرة</h2>

                        <table class="table text-left">
                            <div style="margin-top: 50px;">

                            </div>
                            <tr>
                                <td>
                                    Ticket ID/ رقم التذكرة
                                </td>
                                <td class="text-left"> 
                                    {{ $tck["id"] }}
                                </td>
							</tr>
							
							<tr>
                                <td>
                                    Ticket Short Code / الرمز المختصر للتذكرة
                                </td>
                                <td class="text-left">  
                                    {{ substr($tck["code"], 0, 5) }}
                                </td>
                            </tr>

							<tr>
                                <td>
                                    Ticket Holder Name / اسم حامل التذكرة
                                </td>
                                <td class="text-left"> 
                                    {{ $tck["name"] }}
                                </td>
                            </tr>

							<tr>
                                <td>
                                    Uses Type/ نوعية الاستخدام
                                </td>
                                <td class="text-left"> 
                                    {{ $tck["ticket_type"] }}
                                </td>
							</tr>
							
                            <tr>
                                    <td>
                                        Ticket Issued Date <br> تاريخ إنشاء التذكرة
                                    </td>
                                    <td class="text-left"> 
                                        {{ $tck["created_at"] }}
                                    </td>
                                </tr>

                                <tr>
                                        <td>
                                            Conference Starts At  <br> تاريخ بداية المؤتمر
                                        </td>
                                        <td class="text-left"> 
                                           1, November, 2019
                                        </td>
                                    </tr>



                                <tr>
                                        <td>
                                            Conference Ends At  <br> تاريخ نهاية المؤتمر
                                        </td>
                                        <td class="text-left"> 
                                           3, November, 2019
                                        </td>
                                    </tr>

                               
                        </table>

                        

                              
                            
                            <div style="width: 50px;"></div>
                            
                              

                                <br>
                                <br>

                                <td>
                                        <button class="btn btn-primary" > <i class="fa fa-print" >  </i> print the ticket </button>
                                    </td>
                                    <td>
                                            <button class="btn btn-success" > <i class="fa fa-print" >  </i> send to my email </button>
                                        </td>
        
                                        <br>
                                        
                    </div>
                    
                </div>
	</div>
	<br> <br>
     {{ $tck["code"] }}
   
</div>
    


@endsection
