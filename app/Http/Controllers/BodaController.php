<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitado;
use Illuminate\Support\Facades\Validator;

class BodaController extends Controller
{
    public function invitacion()
    {
        $evento = [
            'fecha' => '2025-10-17 17:00:00',
        ];

        return view('invitacion', compact('evento'));
    }

    public function store(Request $request)
    {
    $rules = [
        'nombre'          => ['required','string','max:100'],
        'apellido'        => ['required','string','max:100'], // ← ahora requerido
        'telefono'        => ['nullable','string','max:20'],
        //'invitados_extra' => ['required','integer','min:0','max:6'],
    ];

    $messages = [
        'required'  => 'El :attribute no puede ir vacío.',
        'string'    => 'El :attribute debe ser texto.',
        'max'       => 'El :attribute no debe exceder :max.',
        'integer'   => 'El :attribute debe ser un número entero.',
        'min'       => 'El :attribute no puede ser menor que :min.',
        'max.numeric' => 'El :attribute no puede ser mayor que :max.', // para invitados_extra
    ];

    $attributes = [
        'nombre'          => 'nombre',
        'apellido'        => 'apellido',
        'telefono'        => 'teléfono',
        // 'invitados_extra' => 'número de acompañantes',
    ];

    $validator = Validator::make($request->all(), $rules, $messages, $attributes);

    if ($validator->fails()) {
        return redirect()->route('invitacion')
            ->withErrors($validator)
            ->withInput()
            ->withFragment('rsvp');
    }

    Invitado::create($validator->validated());

    return redirect()->route('invitacion')
        ->with('ok', '¡Gracias! Tu asistencia quedó registrada.')
        ->withFragment('rsvp');
}
}

