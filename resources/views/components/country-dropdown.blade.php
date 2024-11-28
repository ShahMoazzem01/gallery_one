@props([
    'label' => 'Dropdown', // The label for the dropdown
    'placeholder' => 'Select an option', // The placeholder text
    'options' => [], // The options array (id => name pairs)
    'name' => 'dropdown', // The name of the select field
    'selected' => '', // The currently selected value
])

<div class="sm:col-span-3">
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-gray-900">{{ $label }}</label>
    <div class="mt-2">
        <select {{ $attributes }} id="{{ $name }}" name="{{ $name }}"
            class="block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6 text-gray-400">
            <!-- Placeholder Option -->
            <option value="" disabled {{ $selected == '' ? 'selected' : '' }} class="text-gray-400">
                {{ $placeholder }}
            </option>

            <!-- Dynamic Options -->
            @foreach ($options as $country)
                <option wire:key="{{ $country['id'] }}" value="{{ $country['id'] }}" class="text-gray-900"
                    {{ $selected == $country['id'] ? 'selected' : '' }}>
                    {{ $country['name'] }}
                </option>
            @endforeach

        </select>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Attach the event listener to the document
        document.addEventListener('change', function(e) {
            // console.log(e);
            // Check if the event target is the dropdown
            const dropdown = e.target;
            if (dropdown.id === '{{ $name }}') {
                // console.log(dropdown.value);
                if (dropdown.value) {
                    dropdown.classList.remove('text-gray-400');
                    dropdown.classList.add('text-gray-900');
                } else {
                    dropdown.classList.remove('text-gray-900');
                    dropdown.classList.add('text-gray-400');
                }
            }
        });

        // Ensure dropdown styles are set correctly on load
        const dropdown = document.getElementById('{{ $name }}');
        if (dropdown) {
            const initialValue = dropdown.value;
            if (initialValue) {
                dropdown.classList.remove('text-gray-400');
                dropdown.classList.add('text-gray-900');
            } else {
                dropdown.classList.remove('text-gray-900');
                dropdown.classList.add('text-gray-400');
            }
        } else {
            console.error(`Dropdown with id "{{ $name }}" not found.`);
        }
    });
</script>
