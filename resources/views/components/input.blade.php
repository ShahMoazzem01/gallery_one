@props(['label' => '', 'placeholder' => '', 'type' => 'text'])

<div class="sm:col-span-4">
    <label for="{{ $attributes->get('id', 'input') }}" class="block text-sm/6 font-medium text-gray-900">
        {{ $label }}
    </label>
    <div class="mt-2">
        <input
            {{ $attributes->merge([
                'id' => $attributes->get('id', 'input'),
                'name' => $attributes->get('name', 'input'),
                'type' => $type,
                'placeholder' => $placeholder,
                'class' =>
                    'block w-full rounded-md border-0 py-1.5 pl-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6',
            ]) }}>
    </div>
</div>
