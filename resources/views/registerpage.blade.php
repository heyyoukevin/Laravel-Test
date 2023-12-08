@extends("layouts.generalheadfoot")

@section("page-content")

<body>

<section>
<div class="row">
    <div class="col-lg-12">
        <div class="full text_align_center heading_s1">
            <h2 style="width: 100%;text-align: center;">REGISTER</h2>
        </div>
    </div>
</div>
</section>

<fieldset>
<center>

    <form action="/register" method="post">
    {{ csrf_field() }}

@if(count($errors)>0)
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{$error}} </li>
@endforeach
</ul>
</div>            
@endif
   
<table>
<br><br><br>    

<td>NAME</td>
<td><input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Enter name" required ></td>

</tr><tr><td><br></td></tr>

<td>EMAIL ID</td>
<td><input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Enter email id" required ></td>

</tr><tr><td><br></td></tr>

<td>PASSWORD</td>
<td><input type="password" name="pass" id="pass" value="{{old('pass')}}" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required ></td>

</tr><tr><td><br></td></tr>

</table>
<br>

<div class="field center">
<button style="background-color:black;color:white">REGISTER</button>

</fieldset>
</center>

</form>

<br><br><br>    

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