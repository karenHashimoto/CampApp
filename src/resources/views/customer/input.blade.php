<form method="POST" action="{{action('CustomersController@confirm')}}" >
  @csrf
  <input type="text" name="name" value="{{ old('name') }}">
  @foreach ($errors->get('name') as $errorMsg)
  {{ $errorMsg }}
  @endforeach
  
  <br /><br />
  
  <input type="text" name="email" value="{{ old('email') }}">
  @foreach ($errors->get('email') as $errorMsg)
  {{ $errorMsg }}
  @endforeach
  
  <br />
  <br /><br />
  
  <input type="text" name="phone" value="{{ old('phone') }}">
  @foreach ($errors->get('phone') as $errorMsg)
  {{ $errorMsg }}
  @endforeach

  <input type="text" name="adult_number" value="{{$adult_number}}">{{$adult_number}}
  <input type="text" name="child_number" value="">{{$child_number}}
  <input type="text" name="inDate" value="">{{$inDate}}
  <input type="text" name="outDate" value="">{{$outDate}}
  <input type="text" name="isItemRental" value="">{{$isItemRental}}
  <input type="text" name="isCarRental" value="">{{$isCarRental}}
  

  


  
  

  
  <input type="submit" value="確認">
</form>