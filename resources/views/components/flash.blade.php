

@if (session()->has('message'))
<div class="container">
  <div class="text-white" id="result" onload="show()">
    <p class=" text-white font-bold text-2xl py-3 text-center rounded-full" style="background-image: url(assets/kpd/nest.jpeg);background-size: cover;"> <i class="fa fa-save">
        {{session('message')}} </i>
    </p>
  </div>
</div>

@endif

@if (session()->has('error'))
<div class="container">
  <div class="text-white" id="error" onload="error()">
    <p class="bg-danger text-white font-bold text-2xl py-3 text-center rounded-full"> <i class="fa fa-refresh">
        {{session('error')}} </i>
    </p>
  </div>
</div>

@endif

<script>
    setTimeout(function show(){
        $("#result").fadeOut();
    }, 5000);

    setTimeout(function error(){
        $("#error").fadeOut();
    }, 10000);
</script>
