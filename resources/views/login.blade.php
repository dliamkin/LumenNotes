@extends('index')

@section('content')

<div style="max-width:400px;margin:auto;background-color:white;border-radius: 15px;border:1px solid black;margin-top:45px;">

    <h1 style="text-align: center;padding-top:20px">Notes Login</h1>

    <form method="POST" action="/">

        <div id="errors"></div>
            
        <div style="margin-left:20px; margin-right:20px">
            <label>Email:</label>
            <input type="email" name="email"  class="input-text" placeholder="Your email" />
        </div>
        <div style="margin-left:20px; margin-right:20px;margin-top:10px">
            <label>Password:</label>
            <input type="password" name="password"  class="input-text" placeholder="Password" />
        </div>
        <div style="max-width:100px;text-align: center;padding-bottom:25px;padding-top:20px;margin:auto">
            <input type="submit" style="width:100%" value="Login" />
        </div>

    </form>

</div>

@endsection