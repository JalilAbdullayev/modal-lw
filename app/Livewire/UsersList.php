<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class UsersList extends Component {
    use WithPagination;

    public ?string $search = '';
    public User $selectedUser;

    public function mount($search = null) {
        $this->search = $search ?? '';
        unset($this->users);
    }

    public function viewUser(User $user) {
        $this->selectedUser = $user;
        $this->dispatch('open-modal', name: 'user-details');
    }

    #[Computed()]
    public function users() {
        return User::latest()->where('name', 'like', "%{$this->search}%")->paginate(5);
    }
}
