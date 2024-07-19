<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EducationController extends Controller
{
    public function index(): View
    {
        $education = Education::orderBy('created_at', 'DESC')->get();
        return view('education.index', compact('education'));
    }

    public function create(): View
    {
        return view('education.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'start_date' => 'required|integer',
            'end_date' => 'nullable|integer',
            'institution' => 'required|string',
            'location' => 'required|string',
            'field_of_study' => 'required|string',
            'description' => 'required|string',
        ]);

        Education::create($request->all());

        return redirect()->route('education.index')->with('status', 'Education created successfully!');
    }

    public function edit($id): View
    {
        $education = Education::findOrFail($id);
        return view('education.edit', compact('education'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'start_date' => 'required|integer',
            'end_date' => 'nullable|integer',
            'institution' => 'required|string',
            'location' => 'required|string',
            'field_of_study' => 'required|string',
            'description' => 'required|string',
        ]);

        $education = Education::findOrFail($id);
        $education->update($request->all());

        return redirect()->route('education.index')->with('status', 'Education updated successfully!');
    }

    public function destroy($id): RedirectResponse
    {
        $education = Education::findOrFail($id);
        $education->delete();

        return redirect()->route('education.index')->with('status', 'Education deleted successfully!');
    }
}
