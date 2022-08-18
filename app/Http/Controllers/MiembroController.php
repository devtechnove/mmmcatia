<?php

namespace App\Http\Controllers;

use App\Models\Miembro;
use  App\Models\FotoMiembro;
use Illuminate\Http\Request;

class MiembroController extends Controller
{
   
      public function __construct()
    {
        $this->middleware('permission:VerMiembro')->only('index'); 
        $this->middleware('permission:RegistrarMiembro')->only('create');
        $this->middleware('permission:RegistrarMiembro')->only('store');
        $this->middleware('permission:EditarMiembro')->only('edit');
        $this->middleware('permission:EditarMiembro')->only('update');
        $this->middleware('permission:VerMiembro')->only('show'); 

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (\Auth::user()->hasRole('Super Administrador')) {

           $miembros = Miembro::select('miembros.*', 'foto_miembros.foto')
                ->join('foto_miembros', 'miembros.id', '=', 'foto_miembros.miembro_id')
                ->get();
            //dd($miembros);
           return view('admin.miembro.index', compact('miembros'));
       }
       else
       {
            $miembros = Miembro::select('miembros.*', 'foto_miembros.foto')
                ->where('sociedad_id',\Auth::user()->sociedad_id)
                ->join('foto_miembros', 'miembros.id', '=', 'foto_miembros.miembro_id')
                ->get();
           return view('admin.miembro.index', compact('miembros'));
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.miembro.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function foto()
    {
        return view('admin.miembro.foto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        //dd($request);

     $validated = $request->validate([

        //'name'=>'required',
        //'lastname'=>'required',
        //'email'=>'required',
        //'telefono'=>'required',
        //'fecha_nacimiento'=>'required',
        //'lugar_nacimiento'=>'required',
        //'tipo_documento'=>'required',
        //'documento'=>'required|unique:miembros',
        //'direccion'=>'required',
        //'edad'=>'required',
        //'ano_ingreso'=>'required',
        //'status'=>'required',
        //'genero_id'=>'required',
        //'estado_civil_id'=>'required',
        //'nacionalidad_id'=>'required',
        //'tipo_sangre_id'=>'required',
        //'pais_id'=>'required',
        //'grado_instruccion_id'=>'required',
        //'sociedad_id'=>'required',
        //'estado_id'=>'required',
        //'municipio_id'=>'required',
        //'parroquia_id'=>'required',
        //'tipo_miembro_id'=>'required',
        ]);

        $miembro = new Miembro();

        if ($request->carnet) {

            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->status = $request->status;
            $miembro->telefono = $request->telefono;
            $miembro->sociedad_id = $request->sociedad_id;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->ano_ingreso = $request->ano_ingreso;
            $miembro->documento = $request->documento;
            $miembro->bautismo_espiritu_santo = $request->bautismo_espiritu_santo;
            $miembro->save();

            return redirect()->to('miembros/'.$miembro->id.'/foto');
        }
        else
        {


            $miembro = new Miembro();
            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->email = $request->email;
            $miembro->telefono = $request->telefono;
            $miembro->fecha_nacimiento = $request->fecha_nacimiento;
            $miembro->lugar_nacimiento = $request->lugar_nacimiento;
            $miembro->tipo_documento = $request->tipo_documento;
            $miembro->documento = $request->documento;
            $miembro->direccion = $request->direccion;
            $miembro->edad = $request->edad;
            $miembro->ano_ingreso = $request->ano_ingreso;
            $miembro->status = $request->status;
            $miembro->genero_id = $request->genero_id;
            $miembro->estado_civil_id = $request->estado_civil_id;
            $miembro->nacionalidad_id = $request->nacionalidad_id;
            $miembro->tipo_sangre_id = $request->tipo_sangre_id;
            $miembro->pais_id = $request->pais_id;
            $miembro->grado_instruccion_id = $request->grado_instruccion_id;
            $miembro->sociedad_id = $request->sociedad_id;
            $miembro->estado_id = $request->estado_id;
            $miembro->municipio_id = $request->municipio_id;
            $miembro->parroquia_id = $request->parroquia_id;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->bautismo_espiritu_santo = $request->bautismo_espiritu_santo;

            $miembro->save();
           return redirect()->to('miembros/'.$miembro->id.'/foto');
        }








    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function fotostore(Request $request)
    {
        $miembros = Miembro::orderBy('id','desc')->first();

         //$fotomi = FotoMiembro::where('miembro_id', $miembros)->first();




            $imagenCodificada = file_get_contents("php://input"); //Obtener la imagen

             if(strlen($imagenCodificada) <= 0) exit("No se recibió ninguna imagen");
            //La imagen traerá al inicio data:image/png;base64, cosa que debemos remover
            $imagenCodificadaLimpia = str_replace("data:image/png;base64,", "", urldecode($imagenCodificada));


            //Venía en base64 pero sólo la codificamos así para que viajara por la red, ahora la decodificamos y
            //todo el contenido lo guardamos en un archivo
            $imagenDecodificada = base64_decode($imagenCodificadaLimpia);

            //Calcular un nombre único
            $nombreImagenGuardada = "foto_" . uniqid() . ".png";

            //Escribir el archivo
            file_put_contents('images/miembros/'.$nombreImagenGuardada, $imagenDecodificada);

            try {
                $foto =new FotoMiembro();
                $foto->miembro_id = $miembros->id;
                $foto->foto = $nombreImagenGuardada;
                $foto->save();


                return $foto->id;

            } catch (\Throwable $th) {

                dd($th);


                   }


             }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit($miembro)
    {
         $miembros = Miembro::find($miembro);
         //dd($miembros);
        return view('admin.miembro.edit', compact('miembros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->carnet == true);

        $miembro = Miembro::find($id);

        //dd($request->carnet);

        //  $validated = $request->validate([

        // 'name'=>'required',
        // 'lastname'=>'required',
        // 'email'=>'required',
        // 'telefono'=>'required',
        // 'fecha_nacimiento'=>'required',
        // 'lugar_nacimiento'=>'required',
        // 'tipo_documento'=>'required',
        // //'documento'=>'required|unique:miembros',
        // 'direccion'=>'required',
        // 'edad'=>'required',
        // 'ano_ingreso'=>'required',
        // 'status'=>'required',
        // 'genero_id'=>'required',
        // 'estado_civil_id'=>'required',
        // 'nacionalidad_id'=>'required',
        // 'tipo_sangre_id'=>'required',
        // 'pais_id'=>'required',
        // 'grado_instruccion_id'=>'required',
        // 'sociedad_id'=>'required',
        // 'estado_id'=>'required',
        // 'municipio_id'=>'required',
        // 'parroquia_id'=>'required',
        // 'tipo_miembro_id'=>'required',
        // ]);


           if ($request->carnet) {

            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->status = $request->status;
            $miembro->telefono = $request->telefono;
            $miembro->sociedad_id = $request->sociedad_id;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->ano_ingreso = $request->ano_ingreso;
            $miembro->documento = $request->documento;
            $miembro->bautismo_espiritu_santo = $request->bautismo_espiritu_santo;
            $miembro->save();

             return redirect()->to('miembros');
        }
        else
        {



            $miembro->name = $request->name;
            $miembro->lastname = $request->lastname;
            $miembro->email = $request->email;
            $miembro->telefono = $request->telefono;
            $miembro->fecha_nacimiento = $request->fecha_nacimiento;
            $miembro->lugar_nacimiento = $request->lugar_nacimiento;
            $miembro->tipo_documento = $request->tipo_documento;
            $miembro->documento = $request->documento;
            $miembro->direccion = $request->direccion;
            $miembro->edad = $request->edad;
            $miembro->ano_ingreso = $request->ano_ingreso;
            $miembro->status = $request->status;
            $miembro->genero_id = $request->genero_id;
            $miembro->estado_civil_id = $request->estado_civil_id;
            $miembro->nacionalidad_id = $request->nacionalidad_id;
            $miembro->tipo_sangre_id = $request->tipo_sangre_id;
            $miembro->pais_id = $request->pais_id;
            $miembro->grado_instruccion_id = $request->grado_instruccion_id;
            $miembro->sociedad_id = $request->sociedad_id;
            $miembro->estado_id = $request->estado_id;
            $miembro->municipio_id = $request->municipio_id;
            $miembro->parroquia_id = $request->parroquia_id;
            $miembro->tipo_miembro_id = $request->tipo_miembro_id;
            $miembro->bautismo_espiritu_santo = $request->bautismo_espiritu_santo;

            $miembro->save();
           return redirect()->to('miembros');

      }
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function planilla($id)
    {

        $miembro = Miembro::with('fotoMiembros')->find($id);
        $pdf = new \Crabbly\Fpdf\Fpdf('P','mm',array(230,220));
        $pdf->AddPage();

         $pdf->Ln(1);

        //$pdf->Image('images/mmm.png',10,5,40,25,'PNG');
         $pdf->Ln(1);
         $pdf->SetY(20);
         $pdf-> SetFillColor(234, 231, 230);

         $pdf->Image('images/logo/mmm-logo.png',10,5,60,35,'PNG');
         $pdf->SetY(12);
         $pdf->SetFont('Arial','B',12);
         $pdf->SetXY(45,10);
         $pdf->Cell(160,5,utf8_decode('IGLESIA CRISTIANA PENTECOSTÉS DE VENEZUELA'),0,1,'C');
         $pdf->SetXY(45,15);
         $pdf->Cell(160,5,utf8_decode('MOVIMIENTO MISIONERO MUNDIAL'),0,1,'C');
         $pdf->SetXY(45,20);
         $pdf->Cell(160,5,utf8_decode('EXTENSIÓN CATIA'),0,1,'C');
         $pdf->SetXY(45,25);
         $pdf->Cell(160,5,utf8_decode('CARACAS - VENEZUELA'),0,1,'C');
         $pdf->Ln(1);

         $pdf->SetY(20);

         //dd($miembro);
         $pdf->SetFont('Arial','B',9);
         $pdf->SetXY(10,60);
         $pdf->Image('images/miembros/'.$miembro->fotoMiembros->foto,165,25,35,30,'PNG');
         $pdf->Cell(190,7,utf8_decode('PLANILLA PARA MIEMBROS ACTIVOS DE LA CONGREGACIÓN'),1,1,'C');
         $pdf->SetFont('Arial','',9);

         $pdf->Cell(40,15,utf8_decode('Nombres') ,1,0,'C',true);
         $pdf->Cell(40,15,utf8_decode('Apellidos') ,1,0,'C',true);
         $pdf->Cell(40,15,utf8_decode('Cédula') ,1,0,'C',true);
         $pdf->Cell(45,15,utf8_decode('Teléfono') ,1,0,'C',true);
         $pdf->Cell(25,15,utf8_decode('Edad') ,1,0,'C',true);
         $pdf->SetXY(10,82);
         $pdf->Cell(40,15,utf8_decode($miembro->name) ,1,0,'C');
         $pdf->Cell(40,15,utf8_decode($miembro->lastname) ,1,0,'C');
         $pdf->Cell(40,15,utf8_decode($miembro->documento) ,1,0,'C');
         $pdf->Cell(45,15,utf8_decode($miembro->telefono) ,1,0,'C');
         $pdf->Cell(25,15,utf8_decode($miembro->edad.' Años') ,1,0,'C');

         $pdf->SetXY(10,93);
         $pdf->Cell(40,15,utf8_decode('Correo electrónico') ,1,0,'C',true);
         $pdf->Cell(40,15,utf8_decode('Fecha de nacimiento') ,1,0,'C',true);
         $pdf->Cell(40,15,utf8_decode('Lugar de nacimiento') ,1,0,'C',true);
         $pdf->Cell(45,15,utf8_decode('Género') ,1,0,'C',true);
         $pdf->Cell(25,15,utf8_decode('Estado civil') ,1,0,'C',true);

         $pdf->SetXY(10,108);
         $pdf->Cell(40,15,utf8_decode($miembro->email) ,1,0,'C');
         $pdf->Cell(40,15,utf8_decode($miembro->fecha_nacimiento) ,1,0,'C');
         $pdf->Cell(40,15,utf8_decode($miembro->lugar_nacimiento.' ('.$miembro->pais->name.')') ,1,0,'C');
         $pdf->Cell(45,15,utf8_decode($miembro->generos->name) ,1,0,'C');
         $pdf->Cell(25,15,utf8_decode($miembro->ecivil->name) ,1,0,'C');

         $pdf->SetXY(10,123);
         $pdf->Cell(63,15,utf8_decode('Nacionalidad') ,1,0,'C',true);
         $pdf->Cell(63,15,utf8_decode('Grado de instrucción') ,1,0,'C',true);
         $pdf->Cell(64,15,utf8_decode('Tipo de sangre') ,1,0,'C',true);

         $pdf->SetXY(10,138);
         $pdf->Cell(63,10,strtoupper(utf8_decode($miembro->nacionalidad->name)) ,1,0,'C');
         $pdf->Cell(63,10,utf8_decode($miembro->gradoi->name) ,1,0,'C');
         $pdf->Cell(64,10,utf8_decode($miembro->tipodesangre->name) ,1,0,'C');

         $pdf->SetXY(10,148);
         $pdf->SetFont('Arial','B',9);
         $pdf->Cell(190,7,utf8_decode('DATOS ECLESIASTICOS DEL MIEMBRO'),1,1,'C');
         $pdf->SetFont('Arial','',9);
         $pdf->SetXY(10,155);
         $pdf->Cell(45,15,utf8_decode('Tiempo en la congregación') ,1,0,'C',true);
         $pdf->Cell(45,15,utf8_decode('Socidad que pertenece') ,1,0,'C',true);
         $pdf->Cell(45,15,utf8_decode('Tipo de miembro') ,1,0,'C',true);
         $pdf->Cell(55,15,utf8_decode('¿Bautismo en Espíritu Santo?') ,1,0,'C',true);
         $pdf->SetXY(10,170);
         $pdf->Cell(45,15,utf8_decode(date('Y') - $miembro->ano_ingreso .' Años') ,1,0,'C');
         $pdf->Cell(45,15,utf8_decode($miembro->sociedad->name) ,1,0,'C');
         $pdf->Cell(45,15,utf8_decode($miembro->tmiembro->name) ,1,0,'C');
         if ($miembro->bautismo_espiritu_santo <> false) {
             $pdf->Cell(55,15,utf8_decode('SI') ,1,0,'C');
         }
         else
         {
         $pdf->Cell(55,15,utf8_decode('NO') ,1,0,'C');
         $pdf->SetXY(10,185);
         $pdf->SetFont('Arial','B',9);
         $pdf->Cell(190,7,utf8_decode('DIRECCIÓN DEL MIEMBRO DE LA CONGREGACIÓN'),1,1,'C');
         $pdf->SetXY(10,192);
         $pdf->SetFont('Arial','',9);
         $pdf->Cell(190,15,utf8_decode($miembro->direccion.', '.$miembro->estado->name.', '.'Parroquia: '.$miembro->parroquia->parroquia.', '.'Minicipio: '.$miembro->municipio->municipio) ,1,0,'C');


         }





        $headers=['Content-Type'=>'application/pdf'];
        return Response($pdf->Output(), 200, $headers);


    }
}
