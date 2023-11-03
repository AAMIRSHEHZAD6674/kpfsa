<?php

namespace App\Http\Controllers\hr;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\hr\DistrictCreateRequest;
use App\Models\CountryModel;
use App\Models\hr\District;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DistrictController extends Controller
{

    public function store(DistrictCreateRequest $request)
    {


        District::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'operational' => $request->operational,
            'code' => $request->code,
            'opertional_district_id' => $request->operational_district_id,
            'division' => $request->division,
        ]);
        return redirect('/');
    }

    public function index()
    {


        $data = District::paginate(10);
        return view('district.index', ['districts' => $data]);


    }

    public function edit(District $id)
    {

        return view('district.edit', ['data' => $id]);


    }

    public function update(District $id, Request $request)
    {
        District::where('id', $id)
            ->update([
                'name' => $request->name,
                'operational' => $request->operational,
                'code' => $request->code,
                'opertional_district_id' => $request->operational_district_id,
                'division' => $request->division,
            ]);
        return redirect('/district/show')->with('message', 'Data Updated Successfully');

    }

    public function delete(District $id)
    {

        return view('district.delete', ['data' => $id]);


    }

    public function destroy($id, Request $request): RedirectResponse
    {

        District::where('id', $id)
            ->delete();

        return redirect('/district/show')->with('message', 'Data Deleted Successfully');
    }

}
