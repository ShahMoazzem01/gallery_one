<div>

    <h1>Artist Register</h1>
    @if ($errors->any())
        {{-- @dd($errors) --}}
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <div>

        @if (isset($response))
            @dd($response)
        @endif

        <form wire:submit="register">
            <div>
                <label for="name">Name</label>
                <input type="text" wire:model="form.name" id="name" placeholder="Your Name">
                <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" wire:model="form.email" id="email" placeholder="Your email">
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>
            <div>
                <label for="country">Country</label>
                <select name="country" id="country">
                    @foreach ($countries as $country)
                        <option value="{{ $country['id'] }}">{{ $country['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" wire:model="form.password" id="password" placeholder="Your password">
                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
            </div>
            <div>
                <label for="password_confirmation">password_confirmation</label>
                <input type="password" wire:model="form.password_confirmation" id="password_confirmation"
                    placeholder="Your password_confirmation">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <button>Register</button>
        </form>

    </div>

</div>
