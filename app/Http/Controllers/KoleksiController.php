<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Koleksi;

class KoleksiController extends Controller {

    public function __construct() {
		$this->authorizeResource(Koleksi::class, 'koleksi');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ) {

        $koleksis = Koleksi::query();

        if(!empty($request->search)) {
			$koleksis->where('kd_koleksi', 'like', '%' . $request->search . '%');
		}

        $koleksis = $koleksis->paginate(10);

        return view('koleksis.index', compact('koleksis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('koleksis.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ) {

        $request->validate(["kd_koleksi" => "required", "judul" => "required", "jns_bhn_pustaka" => "required", "jns_koleksi" => "required", "jns_media" => "required", "pengarang" => "required", "penerbit" => "required", "tahun" => "required", "cetakan" => "required", "edisi" => "required", "status" => "required"]);

        try {

            $koleksi = new Koleksi();
            $koleksi->kd_koleksi = $request->kd_koleksi;
		$koleksi->judul = $request->judul;
		$koleksi->jns_bhn_pustaka = $request->jns_bhn_pustaka;
		$koleksi->jns_koleksi = $request->jns_koleksi;
		$koleksi->jns_media = $request->jns_media;
		$koleksi->pengarang = $request->pengarang;
		$koleksi->penerbit = $request->penerbit;
		$koleksi->tahun = $request->tahun;
		$koleksi->cetakan = $request->cetakan;
		$koleksi->edisi = $request->edisi;
		$koleksi->status = $request->status;
            $koleksi->save();

            return redirect()->route('koleksis.index', [])->with('success', __('Koleksi created successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('koleksis.create', [])->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Koleksi $koleksi
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Koleksi $koleksi,) {

        return view('koleksis.show', compact('koleksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Koleksi $koleksi
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Koleksi $koleksi,) {

        return view('koleksis.edit', compact('koleksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Koleksi $koleksi,) {

        $request->validate(["kd_koleksi" => "required", "judul" => "required", "jns_bhn_pustaka" => "required", "jns_koleksi" => "required", "jns_media" => "required", "pengarang" => "required", "penerbit" => "required", "tahun" => "required", "cetakan" => "required", "edisi" => "required", "status" => "required"]);

        try {
            $koleksi->kd_koleksi = $request->kd_koleksi;
		$koleksi->judul = $request->judul;
		$koleksi->jns_bhn_pustaka = $request->jns_bhn_pustaka;
		$koleksi->jns_koleksi = $request->jns_koleksi;
		$koleksi->jns_media = $request->jns_media;
		$koleksi->pengarang = $request->pengarang;
		$koleksi->penerbit = $request->penerbit;
		$koleksi->tahun = $request->tahun;
		$koleksi->cetakan = $request->cetakan;
		$koleksi->edisi = $request->edisi;
		$koleksi->status = $request->status;
            $koleksi->save();

            return redirect()->route('koleksis.index', [])->with('success', __('Koleksi edited successfully.'));
        } catch (\Throwable $e) {
            return redirect()->route('koleksis.edit', compact('koleksi'))->withInput($request->input())->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Koleksi $koleksi
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koleksi $koleksi,) {

        try {
            $koleksi->delete();

            return redirect()->route('koleksis.index', [])->with('success', __('Koleksi deleted successfully'));
        } catch (\Throwable $e) {
            return redirect()->route('koleksis.index', [])->with('error', 'Cannot delete Koleksi: ' . $e->getMessage());
        }
    }

    
}
