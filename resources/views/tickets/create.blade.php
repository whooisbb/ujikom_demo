<x-app-layout>
    <x-slot name="header">
        {{ __('Create Ticket') }}
    </x-slot>

    <div class="rounded-lg bg-white p-4 shadow-md">
        <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input type="text"
                              id="title"
                              name="title"
                              class="block w-full"
                              value="{{ old('title') }}"
                              required />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- Message -->
            <div class="mt-4">
                <x-input-label for="message" :value="__('Message')" />
                <textarea id="message"
                          name="message"
                          class="mt-1 block h-32 w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50"
                          required>{{ old('message') }}</textarea>
                <x-input-error :messages="$errors->get('message')" class="mt-2" />
            </div>

            <!-- Labels (Multiple Select) -->
            <div class="mt-4">
                <x-input-label for="labels" :value="__('Labels')" />
                <select name="labels[]" id="labels"  class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach($labels as $id => $name)
                        <option value="{{ $id }}" @selected(in_array($id, old('labels', [])))>{{ $name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('labels')" class="mt-2" />
            </div>

            <!-- Categories (Multiple Select) -->
            <div class="mt-4">
                <x-input-label for="categories" :value="__('Categories')" />
                <select name="categories[]" id="categories" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}" @selected(in_array($id, old('categories', [])))>{{ $name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('categories')" class="mt-2" />
            </div>

            <!-- Priority -->
            <div class="mt-4">
                <x-input-label for="priority" :value="__('Priority')" />
                <select name="priority" id="priority" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                    @foreach(\Coderflex\LaravelTicket\Enums\Priority::cases() as $priority)
                        <option value="{{ $priority->value }}" @selected(old('priority') == $priority->value)>{{ $priority->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('priority')" class="mt-2" />
            </div>

            <!-- Assign to (Admin & Agent Only) -->
            @hasanyrole('admin|agent')
                <div class="mt-4">
                    <x-input-label for="assigned_to" :value="__('Assign to')" />
                    <select name="assigned_to" id="assigned_to" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50">
                        <option value="">SELECT USER</option>
                        @foreach($users as $id => $name)
                            <option value="{{ $id }}" @selected(old('assigned_to') == $id)>{{ $name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('assigned_to')" class="mt-2" />
                </div>
            @endhasanyrole

            <!-- Attachments -->
            <div class="mt-4">
                <input type="file" name="attachments[]" multiple>
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <x-primary-button>
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
