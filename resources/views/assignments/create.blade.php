<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('assignments.store') }}" method="POST">
                        @csrf
                        <br>
                        <h2 class="font-semibold text-xl text-gray-800">Create a new assignment</h2>
                        <p>Please fill out all the form fields and click 'Submit'</p>
                        <br>

                        <div class="p-2">
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')"
                                          required autofocus autocomplete="title" placeholder="Enter the assignment's title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="p-2">
                            <x-input-label for="description" :value="__('Description')" />
                            <x-ui.text-area name="description" rows="5" class="mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm"
                                            placeholder="Enter the assignment's description..."
                                            value="{{ old('description') }}" ></x-ui.text-area>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div class="p-2">
                            <x-input-label for="topic" :value="__('Topic')" />
                            <div class="grid">
                                <select name="topic" class="appearance-none mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="challenges"
                                        {{ old('topic') == 'challenges' || old('topic') == null  ? 'selected' : '' }}>
                                        Challenges
                                    </option>
                                    <option value="devops"
                                        {{ old('topic') == 'devops' ? 'selected' : '' }}>
                                        DevOps
                                    </option>
                                    <option value="usability"
                                        {{ old('topic') == 'usability' ? 'selected' : '' }}>
                                        Usability
                                    </option>
                                    <option value="testing"
                                        {{ old('topic') == 'testing' ? 'selected' : '' }}>
                                        Testing
                                    </option>
                                    <option value="security"
                                        {{ old('topic') == 'security' ? 'selected' : '' }}>
                                        Security
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="p-2">
                            <x-input-label for="priority" :value="__('Priority')" />
                            <div class="grid">
                                <select name="priority" class="appearance-none mt-1 block w-full border-gray-300 focus:border-indigo-500
                                            focus:ring-indigo-500 rounded-md shadow-sm">
                                    <option value="not started"
                                        {{ old('priority') == 'low' || old('priority') == null  ? 'selected' : '' }}>
                                        Low
                                    </option>
                                    <option value="in progress"
                                        {{ old('priority') == 'medium' ? 'selected' : '' }}>
                                        Medium
                                    </option>
                                    <option value="on hold"
                                        {{ old('priority') == 'high' ? 'selected' : '' }}>
                                        High
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
                                        {{ old('status') == 'not started' || old('status') == null  ? 'selected' : '' }}>
                                        Not Started
                                    </option>
                                    <option value="in progress"
                                        {{ old('status') == 'in progress' ? 'selected' : '' }}>
                                        In Progress
                                    </option>
                                    <option value="on hold"
                                        {{ old('status') == 'on hold' ? 'selected' : '' }}>
                                        On Hold
                                    </option>
                                    <option value="completed"
                                        {{ old('status') == 'completed' ? 'selected' : '' }}>
                                        Completed
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:flex sm:items-center">
                            <button type="submit" class="btn bg-green-700 rounded m-1 py-1 px-4">Save</button>
                            <a type="button" href="{{ route('assignments.index') }}" class="btn bg-gray-200 rounded m-1 py-1 px-4">Cancel</a>
                            <button type="reset" class="btn bg-red-500 rounded m-1 py-1 px-4">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

