<form method="post" action="{{route('search')}}">
    @csrf
    <input type="text" name="text">
    <input type="submit">
</form>
