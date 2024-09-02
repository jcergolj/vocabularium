<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function index()
    {
        return view('translations.index', ['translations' => Translation::where('user_id', auth()->id())->orderBy('id', 'desc')->paginate('50')]);
    }

    public function create()
    {
        return view('translations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'source' => 'required|string',
            'source_extra' => 'nullable|string',
            'target' => 'required|string',
        ]);

        $request->user()->translations()->create([
            'source' => $request->source,
            'source_extra' => $request->source_extra,
            'target' => $request->target,
        ]);

        return redirect()->route('translations.index')->with('success', 'Translation created successfully.');
    }

    public function show()
    {
        $translation = Translation::where('user_id', auth()->id())->inRandomOrder()->first();
        return view('translations.show', ['translation' => $translation]);
    }


    public function destroy(Translation $translation)
    {
        if (auth()->user()->id !== $translation->user_id) {
            abort(403);
        }

        $translation->delete();

        return redirect()->route('translations.index');
    }
}
