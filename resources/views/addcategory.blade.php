@extends("layouts.userheadfoot")

@section("page-content")

<body>

<section >   

      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">ADD CATEGORY</h2>
            </div>
         </div>
      </div>
</section>

<fieldset>
<center>
<form action="/adcategory" method="post" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<td>CATEGORY NAME</td>
<td><input type="text" name="catname" id="catname" value="{{old('catname')}}" required ></td>

</table>

<br><br>

<div class="field center">

<button style="background-color:black;color:white">ADD</button>

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
    if(!document.getElementById("catname").value.match(letters))
        {
              
            alert('Please input alphabet characters only,enter category name properly');
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