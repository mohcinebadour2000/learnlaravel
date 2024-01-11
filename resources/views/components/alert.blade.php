@props(['type'])
<div class="alert alert-{{$type}} my-2" role="alert">
    {{$slot}}
</div>
