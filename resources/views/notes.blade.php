@extends('index')

@section('content')

<div style="max-width:500px;min-heigth:600px;background-color:rgba(255,255,255,0.9);margin:auto;border:2px solid #808080">

<div style="float: right !important;margin-top:20px;margin-right:10px;">
    <a class="logout" href="/">Logout</a>
    <a class="add" href="note/create">Add note</a>
</div>

<div style="margin-top:60px">
    @foreach($notes as $note)
    <div id="note{{$note->id}}" style="margin:25px 10px 25px 10px;background-color:#fff;border-radius:10px;border:1px solid #808080;padding:8px 8px 8px 8px">
        <div style="float: right !important;">
            <span style="font-size:x-small">(Created by: Joe User, {{ $note->updated_at->format("l, h:i A") }})</span>
            <a class="edit" href="/note/{{$note->id}}/">Edit</a>
            <button class="delete" data-id="{{$note->id}}" type="button">Delete</button>
        </div>
        <span style="border-bottom:1px solid #808080;font-size:large">{{ $note->title }}</span>
        <p>{{ $note->content }}</p>
    </div>
    @endforeach
</div>

</div>

<script>
    $(document).ready(function () {
        $(".delete").on("click", function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            $.ajax({
                url: "note/" + id + "/delete",
                type: "get",
                success: function (data) {
                    $('#note' + id).slideUp('fast');
                }
            })
        });
    });
</script>

@endsection