<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\EmpleadoInfoContacto;
use App\Models\EmpleadoInfoSalud;
use App\Models\InfoSalud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $resultado = Empleado::all();

        response()->json(["data"=>$resultado]);
        } catch (\Exception $e) {
            return response()->json([
                'msg' => 'Empleado no encontrado',
                $e->getMessage()
            ]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     

        try {
        
        $empleado = $request->only(['nombre','apellido','edad','sexo']);
        Empleado::create($empleado);

        $contacto = $request->only(['telefono','celular','direccion','email',]);
        EmpleadoInfoContacto::create($contacto);

        $salud = $request->only(['eps','arl','contrato',]);
        InfoSalud::create($salud);

        // $salud = $request->only(['eps','arl','contrato',]);
        // EmpleadoInfoSalud::create($salud);

        return response()->json([
            'empleado' => $empleado,
            'contacto' => $contacto,
            'salud' => $salud,
        ]);


        // $empleadoContacto = new EmpleadoInfoContacto();
        // $empleadoContacto->create($request->all('empleado_info_contactos'));
        // $empleado->contacto()->save($empleadoContacto);

        // $empleadoSalud = new EmpleadoInfoSalud();
        // $empleadoSalud->create($request->all('empleado_info_salud'));
        // $empleado->salud()->save($empleadoSalud);

        // $empleado->save();

        return response()->json([
            'msg' => 'Empleado creado',
            "data" => $empleado
        ]);
        } catch (\Exception $e) {
            return response()->json([
                'msg' => 'Empleado no creado',
                $e->getMessage()
            ]);
        }



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
