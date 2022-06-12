<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::with('stations')->get();
    }

    public function stations(Request $request, Company $company)
    {
        return $company->stations()->where('location','Accra')->get();
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'location' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|numeric'
        ]);
        $success =Company::create($validated);
        return ['success' => $success];
    }

    public function update(Request $request, Company $company)
    {
        $validated = $request->validate([
            'company_name' => 'required|string',
            'location' => 'required|string',
            'country' => 'required|string',
            'phone' => 'required|numeric'
        ]);
        $success = $company->update($validated);
        return [
            'success' => $success
        ];
    }

    public function destroy(Company $company)
    {
        $success = $company->delete();
        return [
            'success' => $success
        ];
    }
}
