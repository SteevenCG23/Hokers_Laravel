<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Barryvdh\DomPDF\Facade\pdf as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application admin dashboard.
     */
    public function dashboard()
    {
        $totalUsers = User::where('role', 'user')->count();
        $totalSellers = User::where('role', 'seller')->count();
        $totalProducts = Product::count();
        return view('admin.index', compact('totalUsers', 'totalSellers', 'totalProducts'));
    }

    /**
     * User functions.
     */

    /**
     * Display a listing of the resource.
     */
    public function usersIndex()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createUser()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50|unique:users',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->save();

        return redirect()->route('admin.users.usersIndex')
            ->with('message_status', 'Usuario registrado exitosamente')
            ->with('icon', 'success');
    }

    /**
     * Confirm removal of the specified resource from storage.
     */
    public function confirmDeleteUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.delete', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'inactivo';

        $user->save();

        return redirect()->route('admin.users.usersIndex')
            ->with('message_status', 'Usuario eliminado exitosamente')
            ->with('icon', 'success');
    }

    /**
     * Show inactive users.
     */
    public function showInactiveUsers()
    {
        $users = User::all();
        return view('admin.users.inactive', compact('users'));
    }

    /**
     * Confirm user activation.
     */
    public function confirmActivateUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.activate', compact('user'));
    }

    /**
     * Active user.
     */
    public function activateUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'activo';

        $user->save();

        return redirect()->route('admin.users.usersIndex')
            ->with('message_status', 'Usuario activado exitosamente')
            ->with('icon', 'success');
    }

    /**
     * Show user report options.
     */
    public function usersReports()
    {
        return view('admin.users.reports');
    }

    /**
     * General user report.
     */
    public function UsersPdf()
    {
        $users = User::all();

        $pdf = PDF::loadView('admin.users.pdf', compact('users'));

        //Include page numbering and footer
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        //$canvas->page_text(20, 800, "Generado por: ".Auth::user()->email, null, 10, array(0,0,0));
        $canvas->page_text(270, 800, "Página {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));
        $canvas->page_text(430, 800, "Fecha: " . \Carbon\Carbon::now()->format('d/m/Y - H:i:s'), null, 10, array(0, 0, 0));

        return $pdf->download('Reporte_general_usuarios.pdf');
    }

    /**
     * User report by dates.
     */
    public function usersPdfDates(Request $request)
    {
        //$datos= request()->all();
        //return response()->json($datos);
        $fecha_inicio = $request->input('fecha_inicio');
        $fecha_fin = $request->input('fecha_fin');

        $users = User::whereBetween('created_at', [$fecha_inicio, $fecha_fin])->get();

        $pdf = PDF::loadView('admin.users.pdfDates', compact('users', 'fecha_inicio', 'fecha_fin'));

        //Include page numbering and footer
        $pdf->output();
        $dompdf = $pdf->getDomPDF();
        $canvas = $dompdf->getCanvas();
        //$canvas->page_text(20, 800, "Generado por: ".Auth::user()->email, null, 10, array(0,0,0));
        $canvas->page_text(270, 800, "Página {PAGE_NUM} de {PAGE_COUNT}", null, 10, array(0, 0, 0));
        $canvas->page_text(430, 800, "Fecha: " . \Carbon\Carbon::now()->format('d/m/Y - H:i:s'), null, 10, array(0, 0, 0));

        return $pdf->download('Reporte_usuarios_por_fechas.pdf');
    }



    /**
     * Seller functions.
     */
    /**
     * Display a listing of the resource.
     */
    public function sellersindex()
    {
        $users = User::all();
        return view('admin.sellers.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createSeller()
    {
        return view('admin.sellers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSeller(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:50|unique:users',
            'password' => 'required|min:8|max:20|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->role = 'seller';
        $user->save();

        return redirect()->route('admin.sellers.sellersIndex')
            ->with('message_status', 'Vendedor registrado exitosamente')
            ->with('icon', 'success');
    }

    /**
     * Confirm removal of the specified resource from storage.
     */
    public function confirmDeleteSeller($id)
    {
        $user = User::findOrFail($id);
        return view('admin.sellers.delete', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteSeller($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'inactivo';

        $user->save();

        return redirect()->route('admin.sellers.sellersIndex')
            ->with('message_status', 'Vendedor eliminado exitosamente')
            ->with('icon', 'success');
    }

    /**
     * Show inactive sellers.
     */
    public function showInactiveSellers()
    {
        $users = User::all();
        return view('admin.sellers.inactive', compact('users'));
    }

    /**
     * Confirm seller activation.
     */
    public function confirmActivateSeller($id)
    {
        $user = User::findOrFail($id);
        return view('admin.sellers.activate', compact('user'));
    }

    /**
     * Active seller.
     */
    public function activateSeller($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'activo';

        $user->save();

        return redirect()->route('admin.sellers.sellersIndex')
            ->with('message_status', 'Vendedor activado exitosamente')
            ->with('icon', 'success');
    }

    /**
     * Show seller report options.
     */
    public function sellersReport()
    {
    }
}
