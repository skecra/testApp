@extends('contacts.layouts.app')
@section('content')
    <a href="{{route('contacts.create')}}">Dodaj novog</a>

    <div class="col-6 offset-3">
        <form action="{{route('contacts.index')}}">
            <input class="form-control" type="text" name="searchTerm" placeholder="pretraga" value="{{request()->searchTerm}}">
        </form>
    </div>

    <table  class="table table-striped table-hover mt-3">
        <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Mail</th>
            <th>Br tel</th>
            <th></th>

        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $c)
            <tr>
                <td>{{$c->first_name}}</td>
                <td>{{$c->last_name}}</td>
                <td>{{$c->email}}</td>
                <td>{{$c->phone_number}}</td>
                <td>
                    <a href="{{route('contacts.show', $c->id)}}"><i class="far fa-file"></i></a>
                    <a href="{{route('contacts.edit', $c->id)}}"><i class="far fa-edit"></i></a>
                    <form action="{{route('contacts.destroy', $c->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn "><i style="color: blue; display: block" class="fas fa-trash"></i></button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    {{$contacts->links()}}

@endsection
