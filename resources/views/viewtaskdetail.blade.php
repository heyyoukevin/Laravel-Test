@extends("layouts.userheadfoot")

@section("page-content")

<body>


<section>     
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">TASK DETAILS</h2>
            </div>
         </div>
      </div>

</section>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">

<br><br>

<table style="font-family:verdana;color:black(251, 255, 251);"class="table">

<tr>    
    <td>TITLE</td>        
    <td>DESCRIPTION</td>        
    <td>DUE DATE</td>        
</tr>

@foreach($user as $userf)

<tr>
    <td>{{$userf->title}}</td>    
    <td>{{$userf->desc}}</td>    
    <td>{{$userf->date}}</td>    
</tr>
 
@endforeach

</table>

</div>
</div>
</div>

<br><br><br>

</body>
</html>

@endsection