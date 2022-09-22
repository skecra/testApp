<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('contacts.update', $contact->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="first_name" placeholder="ime..."
           @if(old('first_name')==null) value="{{$contact->first_name}}" @else value="{{old('first_name')}}" @endif>
    @error('first_name')
    <p>{{$message}}</p>
    @enderror
    <input type="text" name="last_name" placeholder="prezime..."
           @if(old('last_name')==null) value="{{$contact->last_name}}" @else value="{{old('last_name')}}" @endif>
   @error('last_name')
    <p>{{$message}}</p>
    @enderror
    <input type="text" name="email" placeholder="mail..."
           @if(old('email')==null) value="{{$contact->email}}" @else value="{{old('email')}}" @endif>
    <input type="text" name="phone_number" placeholder="br tel..."
           @if(old('phone_number')==null) value="{{$contact->phone_number}}" @else value="{{old('phone_number')}}" @endif">
    <button>Save</button>
</form>
</body>
</html>
