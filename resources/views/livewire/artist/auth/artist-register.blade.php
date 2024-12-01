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

            {{-- image upload --}}

            <div class="flex justify-center">
                <div class="w-full max-w-md">
                    <div class="relative">
                        <!-- File Input -->
                        <input type="file" name="avatar" id="image" accept="image/*" class="hidden"
                            wire:model="form.image" />

                        <!-- Label for File Input -->
                        <label for="image" class="block relative cursor-pointer">
                            @if ($form->image)
                                <!-- Show uploaded image preview -->
                                <img src="{{ $form->image->temporaryUrl() }}" alt="Selected Image"
                                    class="w-full h-auto object-cover rounded-md border border-gray-300" />
                            @else
                                <!-- Show dummy image -->
                                <img src="{{ asset('dummy-image.jpg') }}" alt="Dummy Image"
                                    class="w-full h-auto object-cover rounded-md border border-gray-300" />

                                <!-- "+" Icon -->
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-md">
                                    <span class="text-white text-2xl font-bold">+</span>
                                </div>
                            @endif


                        </label>

                        <!-- Close Button (Show only when image is selected) -->
                        @if ($form->image)
                            <button type="button"
                                class="absolute top-1 right-1 bg-red-500 text-white text-sm rounded-full w-6 h-6 flex items-center justify-center focus:outline-none"
                                wire:click="clearImage">
                                x
                            </button>
                        @endif
                    </div>
                </div>
            </div>





            {{-- end of image upload --}}



























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
