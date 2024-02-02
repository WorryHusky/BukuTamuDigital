<?php



namespace App\Http\Controllers;

use App\Models\Souvenir;
use App\Models\Guest;
use Illuminate\Http\Request;

class SouvenirController extends Controller
{
    public function souvenir()
    {
        $souvenirs = Souvenir::all();
        $guests = Guest::all();
        
        return view('souvenir', compact('souvenirs', 'guests'));
    }
}
