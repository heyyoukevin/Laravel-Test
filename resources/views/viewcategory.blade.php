@extends("layouts.userheadfoot")

@section("page-content")

<body>


<section>     
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">CATEGORIES</h2>
            </div>
         </div>
      </div>

</section>

<a href="/addcategory" class="btn btn-primary" style="background-color:green;color:white">ADD CATEGORY</a>

<div class="container">
<div class="row">
<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 ">

<br><br>

<table style="font-family:verdana;color:black(251, 255, 251);"class="table">

<tr>
    <td>SI NO:</td>
    <td>CATEGORY NAME</td>        
</tr>

@foreach($user as $userf)

<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$userf->catname}}</td>
    <td> <a class="btn btn-warning" href="/addtask/{{$userf->id}}">ADD TASKS</a></td>               
    <td> <a class="btn btn-secondary" href="/viewtask/{{$userf->id}}">VIEW TASKS</a></td>
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