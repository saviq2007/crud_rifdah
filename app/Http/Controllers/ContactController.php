<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan daftar kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    // Menampilkan formulir untuk menambah kontak
    public function create()
    {
        return view('contacts.create');
    }

    // Menyimpan kontak baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil ditambahkan.');
    }

    // Menampilkan formulir untuk mengedit kontak
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    // Memperbarui kontak
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil diperbarui.');
    }

    // Menghapus kontak
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Kontak berhasil dihapus.');
    }
}
