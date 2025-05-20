<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gazebo;
use Illuminate\Http\Request;

class GazeboController extends Controller
{
    public function index()
    {
        $gazebos = Gazebo::all();
        return view('admin.gazebos.index', compact('gazebos'));
    }

    public function create()
    {
        return view('admin.gazebos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        Gazebo::create($request->only('name', 'description'));

        return redirect()->route('gazebos.index')->with('success', 'Gazebo berhasil ditambahkan');
    }

    public function edit(Gazebo $gazebo)
    {
        return view('admin.gazebos.edit', compact('gazebo'));
    }

    public function update(Request $request, Gazebo $gazebo)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $gazebo->update($request->only('name', 'description'));

        return redirect()->route('gazebos.index')->with('success', 'Gazebo berhasil diperbarui');
    }

    public function destroy(Gazebo $gazebo)
    {
        $gazebo->delete();

        return redirect()->route('gazebos.index')->with('success', 'Gazebo berhasil dihapus');
    }
}
