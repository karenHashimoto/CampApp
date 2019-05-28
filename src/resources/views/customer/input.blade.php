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
  
  <input type="submit" value="確認">
</form>