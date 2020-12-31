<form action="{{route('sendmail')}}" method="POST">
    @csrf
    <label for="Email">Enter Email</label>
    <input type="email" name="email" >
    <input type="submit" value="Send">
</form>
