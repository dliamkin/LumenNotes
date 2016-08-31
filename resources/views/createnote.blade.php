@extends('index')

@section('content')
<div style="max-width:400px;margin:auto;background-color:white;border-radius: 15px;border:1px solid black;margin-top:45px;">

    <h1 style="text-align: center;padding-top:20px">@if(isset($note)) Update @else Add New @endif Note</h1>
       
    @if(isset($note))
    note set
    @else
    no note set
    @endif
    <form method="POST" action="@if(isset($note)){{'/note/'.$note->id}}@else{{'/note/create'}}@endif">

        <div id="errors"></div>
            
        <div style="margin-left:20px; margin-right:20px">
            <label>Title:</label>
            <input type="text" name="title" class="input-text" placeholder="Note title" value="@if(isset($note)){{$note->title}}@endif" />
        </div>
        <div style="margin-left:20px; margin-right:20px;margin-top:10px">
            <label>Content:</label>
            <textarea name="content" class="input-text" placeholder="Note Content"  rows=7>@if(isset($note)){{$note->content}}@endif</textarea>
        </div>
        <div style="max-width:100px;text-align: center;padding-bottom:25px;padding-top:20px;margin:auto">
            <input type="submit" style="width:100%" value="@if(isset($note)){{'Update'}}@else{{'Add'}}@endif Note" />
        </div>

    </form>

</div>

@endsection