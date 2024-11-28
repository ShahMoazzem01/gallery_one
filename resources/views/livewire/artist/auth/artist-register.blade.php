<div class="space-y-12">

    <h1>Artist Register</h1>
    @if ($errors->any())
        {{-- @dd($errors) --}}
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <div class="border border-red-300 py-6 px-6 rounded-sm">

        @if (isset($response))
            @dd($response)
        @endif

        <form wire:submit="register">
            <x-input label="Name" type="text" name="name" id="name" placeholder="Your Name"
                wire:model="form.name" />
            <x-input label="Email" type="email" name="email" id="email" placeholder="Your Email"
                wire:model="form.email" />
            <x-input label="mobile" type="text" name="mobile" id="mobile" placeholder="Your Mobile Number"
                wire:model="form.mobile" />
            <x-input label="institution" type="text" name="institution" id="institution"
                placeholder="Your institution" wire:model="form.institution" />

            <x-input label="password" type="password" name="password" id="password" placeholder="Your password"
                wire:model="form.password" />

            <x-input label="password_confirmation" type="password" name="password_confirmation"
                id="password_confirmation" placeholder="Your password_confirmation"
                wire:model="form.password_confirmation" />
            <x-input label="Address" type="text" name="address" id="address" placeholder="Your Address"
                wire:model="form.address" />

            <x-country-dropdown label="Country" name="country" placeholder="Select Your Country" :options="$countries"
                wire:model="form.country"></x-country-dropdown>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-md mt-2">Register</button>
        </form>

    </div>

</div>
