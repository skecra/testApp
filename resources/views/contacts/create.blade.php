@extends('contacts.layouts.app')
@section('content')
    <form action="{{route('contacts.index')}}" method="POST">
        @csrf
        <input type="text" name="first_name" placeholder="ime..." value="{{old('first_name')}}">
        @error('first_name')
        <p>{{$message}}</p>
        @enderror
        <input type="text" name="last_name" placeholder="prezime..." value="{{old('last_name')}}">
        @error('last_name')
        <p>{{$message}}</p>
        @enderror
        <input type="text" name="email" placeholder="mail..." value="{{old('email')}}">
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <input type="text" name="phone_number" placeholder="br tel..." value="{{old('phone_number')}}">
        @error('phone_number')
        <p>{{$message}}</p>
        @enderror
        <select name="country_id" id="country_id" onchange="getCities()">
            <option value="" selected disabled>-odaberi drzavu-</option>
            @foreach($countries as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
        <select name="city_id" id="city_id">
            <option value="0" selected disabled>-izaberite grad-</option>
        </select>
        <button>Save</button>
    </form>
@endsection
@section('scripts')
    <script>
        async function getCities(){
            let country_id = document.getElementById('country_id').value;
            let response = await fetch(`/cites-by-country/${country_id}`);
            let responseJSON = await response.json();

            let options = '';
            responseJSON.forEach((city) => {
                options += `<option value="${city.id}">${city.name}</option>`;
            });
            document.getElementById('city_id').innerHTML = options;
        }

    </script>

@endsection
