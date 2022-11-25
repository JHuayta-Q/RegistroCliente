<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::get();
        return view('planes.index', ['plans' => $plans]);
    }

    public function create(){
        return view('planes.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'plan' => ['required'],
            'precio' => ['required']
        ]);

        $plan = new Plan;
        $plan->plan = $request->input('plan');
        $plan->precio = $request->input('precio');
        $plan->save();

        return to_route('plans.index');
    }

    public function edit(Plan $id){
        return view('planes.edit', ['plan' => $id]);
    }

    public function update(Request $request, Plan $plan){
        $request->validate([
            'plan' => ['required'],
            'precio' => ['required']
        ]);

        $plan->plan = $request->input('plan');
        $plan->precio = $request->input('precio');
        $plan->save();

        return to_route('plans.index');
    }
}
