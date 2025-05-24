<?php




use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekLogin 
{
    /**
     * Handle incoming request.
     * 
     * @param \Closure(\Illuminate\Http\Request): (Symfony\Component\HttpFoundation\Response) $next
     * */

     public function handle(Request $request, Closure $next, $roles): Response
     {
        // Cek apakah user sudah login
        if (Auth::check()) {
            // Cek apakah level admin
            if (Auth::user()->level == $roles) {
                return $next($request);
            }
        }
        return redirect('login')->withErrors(['failed', 'Anda tidak memiliki akses']);
     }
}
     