<?php

namespace App\Http\Controllers;

use App\Http\Requests\MARequest;
use App\Models\Kurs;
use App\Models\MA;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class MAController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('admin.ma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MARequest $request
     * @param Kurs $kurs
     * @return RedirectResponse
     */
    public function store(MARequest $request, Kurs $kurs) {
        MA::create(array_merge($request->validated(), ['kurs_id' => $kurs->id]));
        return Redirect::route('admin.ma', ['kurs' => $kurs->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Kurs $kurs
     * @param MA $ma
     * @return Response
     */
    public function edit(Kurs $kurs, MA $ma) {
        return view('admin.ma-edit', ['ma' => $ma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MARequest $request
     * @param Kurs $kurs
     * @param MA $ma
     * @return RedirectResponse
     */
    public function update(MARequest $request, Kurs $kurs, MA $ma) {
        $ma->update($request->validated());
        $request->session()->flash('alert-success', __('Mindestanforderung erfolgreich gespeichert.'));
        return Redirect::route('admin.ma', ['kurs' => $kurs->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Kurs $kurs
     * @param MA $ma
     * @return RedirectResponse
     */
    public function destroy(Request $request, Kurs $kurs, MA $ma) {
        $ma->delete();
        $request->session()->flash('alert-success', __('Mindestanforderung erfolgreich gelöscht.'));
        return Redirect::route('admin.ma', ['kurs' => $kurs->id]);
    }
}
