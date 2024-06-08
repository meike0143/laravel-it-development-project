<x-layout.main>
    <div class="box">
        <form action="{{ route('assignments.update', $assignment) }}" method="POST">
            @csrf
            @method('PATCH')
            <h1 class="title is-4">Edit Assignment</h1>
            <br>
            <h2 class="subtitle is-6 is-italic">
                Please fill out all the form fields and click 'Submit'
            </h2>

            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control has-icons-right">
                    <input type="text" name="title" placeholder="Enter the assignment's title..."
                           class="input @error('title') is-danger @enderror"
                           value="{{ old('title', $assignment) }}" autocomplete="title" autofocus>
                    @error('title')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="description" class="label">Description</label>
                <div class="control has-icons-right">
                    <x-ui.text-area name="description" rows="15" class="@error('description') is-danger @enderror"
                                    placeholder="Enter the project's description..."
                                    value="{{ old('description', $assignment) }}" ></x-ui.text-area>
                    @error('description')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('description')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="topic" class="label">Topic</label>
                <div class="control has-icons-right">
                    <div class="select @error('topic') is-danger @enderror">
                        <select name="topic">
                            <option value="challenges"
                                {{ old('topic') == 'challenges' || old('topic') == null  ? 'selected' : '' }}>
                                Challenges
                            </option>
                            <option value="devops"
                                {{ old('topic') == 'devops' ? 'selected' : '' }}>
                                DevOps
                            </option>
                            <option value="innovation"
                                {{ old('topic') == 'innovation' ? 'selected' : '' }}>
                                Innovation
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
                    @error('topic')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('topic')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label for="priority" class="label">Priority</label>
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="priority" value="2"
                            {{ old('priority') == 2 ? 'checked' : '' }}>
                        Low
                    </label>
                    <label class="radio">
                        <input type="radio" name="priority" value="3"
                            {{ old('priority') == 3 ? 'checked' : '' }}>
                        Medium
                    </label>
                    <label class="radio">
                        <input type="radio" name="priority" value="4"
                            {{ old('priority') == 4 ? 'checked' : '' }}>
                        High
                    </label>
                </div>
            </div>

            <div class="field">
                <label for="status" class="label">Status</label>
                <div class="control has-icons-right">
                    <div class="select @error('status') is-danger @enderror">
                        <select name="status">
                            <option value="not started"
                                {{ old('status') == 'not started' || old('status') == null  ? 'selected' : '' }}>
                                Not started
                            </option>
                            <option value="in progress"
                                {{ old('status') == 'in progress' ? 'selected' : '' }}>
                                In progress
                            </option>
                            <option value="on hold"
                                {{ old('status') == 'on hold' ? 'selected' : '' }}>
                                On hold
                            </option>
                            <option value="completed"
                                {{ old('status') == 'completed' ? 'selected' : '' }}>
                                Completed
                            </option>
                        </select>
                    </div>
                    @error('status')
                    <span class="icon has-text-danger is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    @enderror
                </div>
                @error('status')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
                <div class="control">
                    <a type="button" href="{{ route('assignments.show', $assignment) }}" class="button is-light">Cancel</a>
                </div>
                <div class="control">
                    <button type="reset" class="button is-warning">Reset</button>
                </div>
            </div>
        </form>
    </div>
</x-layout.main>
