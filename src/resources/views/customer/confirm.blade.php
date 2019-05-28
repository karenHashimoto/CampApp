<form method="POST" action="{{action('CustomersController@update')}}">
  @csrf
  name:{{$customer->name}}<br />
  email:{{$customer->email}}<br />
  phone:{{$customer->phone}}<br />
  <input type="submit" value="送信">
</form>