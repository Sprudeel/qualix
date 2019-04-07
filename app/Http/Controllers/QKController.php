<?php

namespace App\Http\Controllers;

use App\Http\Requests\QKDeleteRequest;
use App\Http\Requests\QKStoreRequest;
use App\Http\Requests\QKUpdateRequest;
use App\Models\Kurs;
use App\Models\QK;
use Illuminate\Support\Facades\Redirect;

class QKController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.qk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param QKStoreRequest $request
     * @param Kurs $kurs
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(QKStoreRequest $request, Kurs $kurs) {
        QK::create($request->validated());
        return Redirect::route('admin.qk', ['kurs' => $kurs->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Kurs $kurs
     * @param QK $qk
     * @return \Illuminate\Http\Response
     */
    public function edit(Kurs $kurs, QK $qk) {
        return view('admin.qk-edit', ['qk' => $qk]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Kurs $kurs
     * @param QK $qk
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(QKUpdateRequest $request, Kurs $kurs, QK $qk) {
        $qk->update($request->validated());
        $request->session()->flash('alert-success', __('Qualikategorie erfolgrich gspeicheret'));
        return Redirect::route('admin.qk', ['kurs' => $kurs->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param QKDeleteRequest $request
     * @param Kurs $kurs
     * @param QK $qk
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(QKDeleteRequest $request, Kurs $kurs, QK $qk) {
        $qk->delete();
        $request->session()->flash('alert-success', __('Quali-Kategorie erfolgreich gelöscht.'));
        return Redirect::route('admin.qk', ['kurs' => $kurs->id]);
    }
}
