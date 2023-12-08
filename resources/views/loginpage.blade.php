@extends("layouts.generalheadfoot")

@section("page-content")

<body>

<section>     
    <div class="row">
        <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                <h2 style="width: 100%;text-align: center;">LOGIN</h2>
            </div>
        </div>
    </div>
</section>

<fieldset>
<center>

<form action="/login" method="post">

{{csrf_field()}}

@if(count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}} </li>
@endforeach
</ul>
</div>            
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif

<table>
<br><br><br>

<td>EMAIL ID</td>
<td><input type="email" name="email" id="email" class="form-control m-3" value="{{old('email')}}" placeholder="Enter email"></td>

</tr><tr><td><br></td></tr>

<td>PASSWORD</td>
<td><input type="password" name="pass" id="pass" class="form-control m-3" value="{{old('pass')}}"  placeholder="Password"></td>

</tr><tr><td><br></td></tr>

</table>
<br>

<div class="field center">
<button style="background-color:black;color:white">LOGIN</button>

</fieldset>
</center>

</form>

<br><br><br>

<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
</script>


    <!-- Start Script -->
    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/templatemo.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <!-- End Script -->
        
</body>
</html>

@endsection