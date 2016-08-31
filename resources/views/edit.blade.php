@extends('index')

@section('content')
<div style="max-width:400px;margin:auto;background-color:white;border-radius: 15px;border:1px solid black;margin-top:45px;">

    <h1 style="text-align: center;padding-top:20px">Add New Note</h1>

    <form method="POST" action="/notes/edit">

        <div id="errors"></div>
            
        <div style="margin-left:20px; margin-right:20px">
            <label>Title:</label>
            <input type="text" name="title" class="input-text" placeholder="Note title" />
        </div>
        <div style="margin-left:20px; margin-right:20px;margin-top:10px">
            <label>Content:</label>
            <textarea name="content" class="input-text" placeholder="Note Content" rows=7></textarea>
        </div>
        <div style="max-width:100px;text-align: center;padding-bottom:25px;padding-top:20px;margin:auto">
            <input type="submit" style="width:100%" value="Add Note" />
        </div>

    </form>

</div>

@endsection