<?php

namespace App\Livewire\Panel\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    public function delete($id)
    {
        if (User::count() == 1) {
            return redirect()->route('users.index')->with('error', 'Você não pode excluir o último usuário');
        }

        User::where('id', $id)->delete();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')->paginate(5);

        return view(
            'livewire.panel.users.index',
            [
                'users' => $users
            ]
        )->extends('layouts.panel');
    }
}
