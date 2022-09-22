@extends('contacts.layouts.app')
@section('content')
    <table border="1">
        <thead>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>mail</th>
            <th>br tel</th>

        </tr>
        </thead>
        <tbody>

        <tr>
            <td>{{$contact->first_name}}</td>
            <td>{{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone_number}}</td>


        </tr>

        </tbody>
    </table>
@endsection
