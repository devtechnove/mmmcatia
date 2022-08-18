<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
             $today = getdate();
             $data_month = [
                            'Enero',
                            'Febrero',
                            'Marzo',
                            'Abril',
                            'Mayo',
                            'Junio',
                            'Julio',
                            'Agosto',
                            'Septiembre',
                            'Octubre',
                            'Noviembre',
                            'Diciembre'
                            ];

             $current_month = $today['mon'];
             $current_year = $today['year'];

            $date_current = Carbon::now()->toDateTimeString();

            $prev_date1 = $this->getPrevDate(1);
            $prev_date2 = $this->getPrevDate(2);
            $prev_date3 = $this->getPrevDate(3);
            $prev_date4 = $this->getPrevDate(4);

            $user_count_1  = User::whereBetween('created_at',[$prev_date1,$date_current])->count();
            $user_count_2  = User::whereBetween('created_at',[$prev_date2,$prev_date1])->count();
            $user_count_3  = User::whereBetween('created_at',[$prev_date3,$prev_date2])->count();
            $user_count_4   = User::whereBetween('created_at',[$prev_date4,$prev_date3])->count();

             $total_aportado = \DB::table('aportes')
             ->selectRaw('sum(cast(total_pagar as double precision))')
             ->where('status','=',1)
             ->first();
             //dd($total_aportado->sum);

              $total_mes = \DB::table('aportes')
             ->selectRaw('sum(cast(total_pagar as double precision))')
             ->where('status','=',1)
             ->where('mes',date('m'))
             ->where('year',date('Y'))
             ->first();

             $total_ofrendado = \DB::table('ofrendas')
             ->selectRaw('sum(cast(total_pagar as double precision))')
             ->where('status','=',1)
             ->first();

             $total_mes_ofrendado = \DB::table('ofrendas')
             ->selectRaw('sum(cast(total_pagar as double precision))')
             ->where('status','=',1)
             ->where('mes',date('m'))
             ->where('year',date('Y'))
             ->first();

              $total_mes_gastos = \DB::table('gastos')
             ->selectRaw('sum(cast(total_pagar as double precision))')
             ->where('status','=',1)
             ->where('mes',date('m'))
             ->where('year',date('Y'))
             ->first();

             $total_gastos = \DB::table('gastos')
             ->selectRaw('sum(cast(total_pagar as double precision))')
             ->where('status','=',1)
             ->first();

             //dd($total_gastos->sum);

              $mes_actual =$data_month[$current_month - 1];



           // dd($mes_actual);
             


            return view('home',compact('user_count_1',
                                      'user_count_2',
                                      'user_count_3',
                                      'user_count_4',
                                      'mes_actual',
                                      'total_aportado',
                                      'total_mes',
                                      'total_ofrendado',
                                      'total_mes_ofrendado',
                                      'total_gastos',
                                      'total_mes_gastos'));
        

     
    }



     private function getPrevDate($num){
        return Carbon::now()->subMonths($num)->toDateTimeString();
    }
}
