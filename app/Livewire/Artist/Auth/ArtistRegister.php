<?php

namespace App\Livewire\Artist\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Forms\ArtistRegisterForm;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class ArtistRegister extends Component
{
    use WithFileUploads;

    public ArtistRegisterForm $form;
    public $response;

    public $countries;



    public function mount()
    {
        $this->countries = json_decode(Storage::get('countries.json'), true);
    }


    public function register()
    {
        // dd($this);
        $this->form->create();
        return redirect('/home')->with('success', 'Your account has been created. ');
    }

    public function clearImage()
    {
        $this->form->image = null;
    }



    public function render()
    {
        return view('livewire.artist.auth.artist-register');
    }
}
