@extends("layouts.userheadfoot")

@section("page-content")

<body>

<section >   

      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">ADD TASK</h2>
            </div>
         </div>
      </div>
</section>

<fieldset>
<center>

<form action="/edittask/updatetask" method="post" onSubmit="return check()">
{{ csrf_field() }}

<table>
<br><br><br>

<input type="text" name="catid" id="catid" value="{{$catid}}" hidden>

<td>TITLE</td>
<td><input type="text" name="title" id="title" value="{{$user->title}}" required ></td>

</tr><tr><td><br></td></tr>

<td>DESCRIPTION</td>
<td><input type="text" name="desc" id="desc" value="{{$user->desc}}" required ></td>

</tr><tr><td><br></td></tr>

<td>DUE DATE</td>
<td><input type="date" name="date" id="date" value="{{$user->date}}" required ></td>

</tr><tr><td><br></td></tr>

<td><input type="hidden" name="id"  value="{{$user->id}}"/></td>

</table>

<br><br>

<div class="field center">

<button style="background-color:black;color:white">EDIT</button>

</fieldset>
</center>
</form>
                           

<br><br><br><br>


    <!-- Start Script -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/templatemo.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- End Script -->

<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var tech = document.getElementById("tech");

    function check()
    {
    if(!document.getElementById("title").value.match(letters))
        {
              
            alert('Please input alphabet characters only,enter title properly');
            return false;
        }    
    else
        {
            return true;
        }
    }	
</script>


</body>
</html>


@endsection