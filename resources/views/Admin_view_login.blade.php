<!DOCTYPE html>
<html>
<head>
	<link href="{{asset('css/login.css')}}" rel="stylesheet" />
	<link href="{{asset('css/login.js')}}" rel="stylesheet" />
</head>
<body>


<section id="login" v-bind:class="isShake">
 <form method="post" action="{{route('Admin_process_login')}}">
 	{{csrf_field()}}
  <h2>Login</h2>
  <div class="info" v-bind:class="good">
   
   <p v-show="login.login && login.password"></p>
  </div>
  <input type="text" name="Email" v-model="login.login" placeholder="Email" />
  <input type="password" name="Mat_khau" v-model="login.password" placeholder="Password" />
  <button v-on:click="onSubmit">Log in</button>
 </form>
</section>
</body>
</html>