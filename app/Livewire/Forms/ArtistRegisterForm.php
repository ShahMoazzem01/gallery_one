<?php

namespace App\Livewire\Forms;

use App\Models\Artist;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArtistRegisterForm extends Form
{
    #[Validate('required|min:5')]
    public $name;

    #[Validate('required|email|unique:artists,email')]
    public $email;

    #[Validate('required|confirmed|min:5')]

    #[Validate('required')]
    public $country;

    public $password;

    public $password_confirmation;

    public function create()
    {
        $this->validate();
        Artist::create(
            $this->all()
        );

        $this->reset();
    }
}
