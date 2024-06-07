<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        return view('assignments.index', [
            'assignments' => Assignment::all()
        ]);
    }

    public function create()
    {
        return view('assignments.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'topic' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        // Create a new Assignment model object
        $assignment = Assignment::create($validated);

        // Redirect to the assignments index page
        return redirect()->route('assignments.index');
    }

    public function show(Assignment $assignment)
    {
        return view('assignments.show', [
            'assignment' => $assignment
        ]);
    }

    public function edit(Assignment $assignment)
    {
        return view('assignments.edit', [
            'assignments' => $assignment
        ]);
    }

    public function update(Request $request, Assignment $assignment)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'topic' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        // Use `update` to mass (re)assign updated attributes
        $assignment->update($validated);

        // Redirect to the assignments show page
        return redirect()->route('assignments.show', $assignment)
            ->with('success', 'Assignment successfully updated');
    }

    public function delete(Assignment $assignment)
    {
        return view('assignments.delete', [
            'assignment' => $assignment
        ]);
    }

    public function destroy(Assignment $assignment)
    {
        // Delete the assignment from the database
        $assignment->delete();

        // Redirect to the blog show page
        return redirect()->route('assignments.index')
            ->with('success', 'Assignment successfully deleted');
    }
}
