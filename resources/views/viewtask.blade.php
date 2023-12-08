@extends("layouts.userheadfoot")

@section("page-content")

<body>


<section>     
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">TASKS</h2>
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
    <td>SI NO:</td>
    <td>TASK TITLE</td>        
</tr>

@foreach($user as $userf)

<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$userf->title}}</td>

    <td> <a class="btn btn-warning" href="/viewtaskdetail/{{$userf->catid}}/{{$userf->id}}">TASK DETAILS</a></td>

    <td> <a class="btn btn-success" href="/edittask/{{$userf->catid}}/{{$userf->id}}">EDIT TASK</a></td>

    <form action="/deletetask/{{$userf->catid}}/{{$userf->id}}" method="POST">
     {{ csrf_field() }}
     <td><button type="submit" class="btn btn-danger">DELETE TASK</button></td>
     </form>
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