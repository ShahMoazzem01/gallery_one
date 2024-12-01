<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Artist;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;


class ArtistRegisterForm extends Form
{



    #[validate('required|image|mimes:jpeg,png,jpg,gif,svg|max:2048')]

    public $image;

    #[Validate('required|min:5')]
    public $name;

    #[Validate('required')]
    public $mobile;

    #[Validate('required|email|unique:artists,email')]
    public $email;



    #[Validate('required')]
    public $institution;

    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $country;
    #[Validate('required|min:8|confirmed')]
    public $password;

    public $password_confirmation;



    public function create()
    {
        $this->validate();

        Artist::create([
            'name' => $this->name,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'institution' => $this->institution,
            'address' => $this->address,
            'country' => $this->country,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
    }
}
