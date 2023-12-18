@extends('master')
@section('button')
<form action="/fal" method="post">
    @csrf
    <button style="background: #00ae8e; color: white; width: 40%; height: 50px; border-radius: 10px; font-size: large" class="font-title saman-btn mb-3" type="submit">فالت رو ببین</button>
</form>
@endsection
