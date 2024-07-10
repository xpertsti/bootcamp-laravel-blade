<div @if ($divclass) class="{{ $divclass }}" @endif>
    <label for="{{ $name }}" class="block text-sm font-semibold leading-6 text-gray-900">{{ $labelname }}</label>
    <div class="mt-2.5">
        <input type="text" name="{{ $name }}" id="{{ $id }}" autocomplete="{{ $autocomplete }}"
            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>
</div>
