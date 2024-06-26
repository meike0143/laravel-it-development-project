<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('assignments.update', $assignment) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800">Edit the assignment</h2>
                        <p>Please fill out all the form fields and click 'Submit'</p>
                        <br>

                        <div class="p-2">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $assignment)"
                                          required autofocus autocomplete="title" placeholder="Enter the assignment's title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="p-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-assignment.text-area name="description" rows="5" class="mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm"
                                            placeholder="Enter the assignment's description..."
                                            value="{{ old('description', $assignment) }}" ></x-assignment.text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div class="p-2">
                            <x-input-label for="topic" :value="__('Topic')" />
                            <div class="grid">
                                <select name="topic" class="appearance-none mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="challenges"
                                        {{ old('topic', $assignment) == 'challenges' || old('topic') == null  ? 'selected' : '' }}>
                                        Challenges
                                    </option>
                                    <option value="devops"
                                        {{ old('topic', $assignment) == 'devops' ? 'selected' : '' }}>
                                        DevOps
                                    </option>
                                    <option value="usability"
                                        {{ old('topic', $assignment) == 'usability' ? 'selected' : '' }}>
                                        Usability
                                    </option>
                                    <option value="testing"
                                        {{ old('topic', $assignment) == 'testing' ? 'selected' : '' }}>
                                        Testing
                                    </option>
                                    <option value="security"
                                        {{ old('topic', $assignment) == 'security' ? 'selected' : '' }}>
                                        Security
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="p-2">
                            <x-input-label for="status" :value="__('Status')" />
                            <div class="grid">
                                <select name="status" class="appearance-none mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="not started"
                                        {{ old('status', $assignment) == 'not started' || old('status') == null  ? 'selected' : '' }}>
                                        Not Started
                                    </option>
                                    <option value="in progress"
                                        {{ old('status', $assignment) == 'in progress' ? 'selected' : '' }}>
                                        In Progress
                                    </option>
                                    <option value="on hold"
                                        {{ old('status', $assignment) == 'on hold' ? 'selected' : '' }}>
                                        On Hold
                                    </option>
                                    <option value="completed"
                                        {{ old('status', $assignment) == 'completed' ? 'selected' : '' }}>
                                        Completed
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:flex sm:items-center">
                            <button type="submit" class="btn bg-green-700 rounded m-1 py-1 px-4">Save</button>
                            <a type="button" href="{{ route('assignments.show', $assignment) }}" class="btn bg-gray-200 rounded m-1 py-1 px-4">Cancel</a>
                            <button type="reset" class="btn bg-red-500 rounded m-1 py-1 px-4">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
