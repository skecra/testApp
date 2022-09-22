<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
        $contacts = Contact::query()->when($request->has('searchTerm'), function($query) use($request){
            $query->where('first_name', 'like', "%".$request->searchTerm."%");
            $query->orWhere('last_name', 'like', "%".$request->searchTerm."%");
        })->paginate(10)->withQueryString();
        $countries = Country::all();
        return view('contacts.index', [
           "contacts"=>$contacts,
            "countries"=>$countries
        ]);
    }

    public function show(ContactRequest $request, Contact $contact){
        return view('contacts.show', [
           "contact" =>$contact
        ]);
    }

    public function create(){
        $countries = Country::all();

        return view('contacts.create', [
            "countries"=>$countries
        ]);
    }


    public function store(ContactRequest $request){

        Contact::query()->create([
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "email"=>$request->email,
            "phone_number"=>$request->phone_number
        ]);
        return redirect()->route('contacts.index');
    }

    public function edit(Request $request,Contact $contact){
        return view('contacts.edit', [
           "contact"=>$contact
        ]);
    }

    public function update(ContactRequest $request, Contact $contact){
        $contact->update([
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "email"=>$request->email,
            "phone_number"=>$request->phone_number,
        ]);
        return redirect()->route('contacts.index');
    }

    public function destroy(Request $request, Contact $contact){
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
