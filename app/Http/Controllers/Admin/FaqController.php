<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('id', 'asc')->get();

        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        Faq::create($request->only('question', 'answer'));

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ berhasil ditambahkan');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq->update($request->only('question', 'answer'));

        return redirect()
            ->route('admin.faqs.index')
            ->with('success', 'FAQ berhasil diperbarui');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return back()->with('success', 'FAQ berhasil dihapus');
    }
}
