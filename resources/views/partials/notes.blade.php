@foreach($notes as $note)
<div>
    <h2>{{ $note->title }}</h2>
    <p>{{ $note->content }}</p>
</div>
@endforeach