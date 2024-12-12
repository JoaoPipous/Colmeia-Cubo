<?php

namespace App\Livewire\Panel\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{
    public $name, $email, $password, $user;

    public function mount($id)
    {
        $this->user = User::find($id)->first();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }

    public function edit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->password =  $this->password ? Hash::make($this->password) : $this->user->password;
        $this->user->save();

        return redirect()->route('users.index')->with('success', 'Usuário editado com sucesso!');
    }

    public function render()
    {
        return view('livewire.panel.users.edit')->extends('layouts.panel');
    }
}
