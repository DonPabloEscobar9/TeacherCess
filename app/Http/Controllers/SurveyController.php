<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Submit;

class SurveyController extends Controller
{
    public function submitSurvey(Request $request)
    {
        $validatedData = $request->validate([
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'question4' => 'required',
        ]);

        Submit::create($validatedData);

        // Update the total submitted surveys count
        $totalSubmitted = Submit::count();
        // Update the dashboard or session variable as needed

        return redirect()->back()->with('status', 'Survey submitted successfully!');
    }

    public function rejectSurvey($id)
    {
        $survey = Submit::find($id);
        if ($survey) {
            $survey->delete();

            // Update the total rejected surveys count
            $totalRejected = Submit::onlyTrashed()->count();
            // Update the dashboard or session variable as needed

            return redirect()->back()->with('status', 'Survey rejected successfully!');
        }

        return redirect()->back()->withErrors(['error' => 'Survey not found!']);
    }
}
