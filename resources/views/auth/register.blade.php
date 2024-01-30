
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Registration Page</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{asset("plugins/fontawesome-free/css/all.min.css")}}">

<link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">
<script nonce="492baa83-5864-4464-970d-809233107027">(function(w,d){!function(L,M,N,O){L[N]=L[N]||{};L[N].executed=[];L.zaraz={deferred:[],listeners:[]};L.zaraz.q=[];L.zaraz._f=function(P){return async function(){var Q=Array.prototype.slice.call(arguments);L.zaraz.q.push({m:P,a:Q})}};for(const R of["track","set","debug"])L.zaraz[R]=L.zaraz._f(R);L.zaraz.init=()=>{var S=M.getElementsByTagName(O)[0],T=M.createElement(O),U=M.getElementsByTagName("title")[0];U&&(L[N].t=M.getElementsByTagName("title")[0].text);L[N].x=Math.random();L[N].w=L.screen.width;L[N].h=L.screen.height;L[N].j=L.innerHeight;L[N].e=L.innerWidth;L[N].l=L.location.href;L[N].r=M.referrer;L[N].k=L.screen.colorDepth;L[N].n=M.characterSet;L[N].o=(new Date).getTimezoneOffset();if(L.dataLayer)for(const Y of Object.entries(Object.entries(dataLayer).reduce(((Z,$)=>({...Z[1],...$[1]})),{})))zaraz.set(Y[0],Y[1],{scope:"page"});L[N].q=[];for(;L.zaraz.q.length;){const ba=L.zaraz.q.shift();L[N].q.push(ba)}T.defer=!0;for(const bb of[localStorage,sessionStorage])Object.keys(bb||{}).filter((bd=>bd.startsWith("_zaraz_"))).forEach((bc=>{try{L[N]["z_"+bc.slice(7)]=JSON.parse(bb.getItem(bc))}catch{L[N]["z_"+bc.slice(7)]=bb.getItem(bc)}}));T.referrerPolicy="origin";T.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(L[N])));S.parentNode.insertBefore(T,S)};["complete","interactive"].includes(M.readyState)?zaraz.init():L.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition register-page">
<div class="register-box">
<div class="register-logo">
<a href="../../index2.html"><b>Tlemcen</b>Testies</a>
</div>
<div class="card">
<div class="card-body register-card-body">
<p class="login-box-msg">Register a new membership</p>
<form action="" method="post">
    @csrf
<div class="input-group mb-3">
<input type="text" name="name" class="form-control" placeholder="Full name">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-user"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="email" name="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" name="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-8"></div>
<div class="col-4 float-right">
<button type="submit" class="btn btn-primary btn-block">Register</button>
</div>

</div>
</form>
.
<a href="{{route('login')}}" class="text-center">I already have a membership</a>
</div>

</div>
</div>


<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>

<script src="{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<script src="{{asset("dist/js/adminlte.min.js?v=3.2.0")}}"></script>
</body>
</html>
