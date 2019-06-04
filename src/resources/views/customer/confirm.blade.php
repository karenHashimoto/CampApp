<form method="POST" action="{{action('CustomersController@update')}}">
  @csrf
  name:{{$customer->name}}<br />
  email:{{$customer->email}}<br />
  phone:{{$customer->phone}}<br />
  大人:{{$adult_number}}<br />
  子供:{{$child_number}}<br />
  チェックイン:{{$inDate}}<br />
  チェックアウト:{{$outDate}}<br />
  レンタルアイテム:{{$isItemRental}}<br />
  レンタカー:{{$isCarRental}}<br />




  <input type="submit" value="送信">
</form>