<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApplyRequest;
use App\Models\User;
use App\Models\Vacancy;
use App\Models\VacancyUser;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Vacancy::all();
        // dd($list);
        return view('home.page.listjob',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $cek = VacancyUser::where('vacancy_id',$request->vacancy_id)->where('name',$request->name)->first();
        
        if($cek){
            return redirect()->back()->with('error','Maaf, anda sudah pernah mendaftar di lowongan ini');
        }else{

        $data = new VacancyUser();
        $data->name = $request->name;
        $data->no_telp = $request->no_telp;
        $data->no_wa = $request->no_wa;
        $data->position = $request->position;
        $data->vacancy_id = $request->vacancy_id;
        // dd($data);
        $data->save();
        }
        return redirect()->route('home')->with('status', 'Data berhasil disimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Vacancy::findOrFail($id);
        return view('home.page.apply',compact('detail'));
    }

    public function detailmodal(Vacancy $vacancy)
    {
        // return view('home.page.detailmodal',compact('vacancy'));
        return response()->json($vacancy, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
