<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citas;

class citasController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'mascota_id' => 'required'
        ]);

        $cita = new cita;
        $cita->date = $request->date;
        $cita->time = $request->time;
        $cita->mascota_id = $request->mascota_id;
        $cita->save();

        return redirect()->route('/veterinaria/citas')->with('success','Cita creada correctamente');
    }
}
