<?php
 
namespace App\Controllers;
 
use App\Core\View;
use App\Models\Donasi;
 
class RekapController {
    
    public function index() {
        $donasis = Donasi::findAll();
        
        View::render("rekap/index.html", [
            "donasis" => $donasis
        ]);
    }
}
