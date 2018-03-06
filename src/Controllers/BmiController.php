<?php
namespace anilpavuluri441\BMI\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class BmiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('weight') && $request->has('high')) {
            $weight = $request->get('weight');
            $high = $request->get('high');
            $bmi = round($weight / ($high * $high),1);
           //print_r($bmi);exit;
        }
        return view('BMI::index', compact('bmi'));
    }
}