<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use App\VolunteerCategories;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportsController extends Controller
{
    public function index()
    {
        return view('reports.index', [
            'users'                => User::with('volunteer_categories')->orderBy('name')->get(),
            'volunteer_categories' => VolunteerCategories::pluck('name', 'id'),
        ]);
    }

    public function show($report)
    {
        $this->$report();

        return back();
    }

    private function volunteers()
    {
        Excel::create('volunteers', function ($excel) {

            $excel->sheet('volunteers', function ($sheet) {

                $sheet->loadView('reports.volunteers', [
                    'users'                => User::with('volunteer_categories')->orderBy('name')->get(),
                    'volunteer_categories' => VolunteerCategories::pluck('name', 'id'),
                ]);

            });

        })->download('xlsx');
    }

}
