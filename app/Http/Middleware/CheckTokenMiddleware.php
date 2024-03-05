<?php

namespace App\Http\Middleware;

use Closure;
use App\Peserta;

class CheckTokenMiddleware
{
    public function handle($request, Closure $next)
    {
        $id = $request->route('id');
        $token_update = $request->route('token_update');

        // Check if the token is valid for the specified Peserta
        $isValidToken = Peserta::where('id', $id)->where('token_update', $token_update)->exists();

        if (!$isValidToken) {
            // Redirect to the form page with an error message if the token is not valid
            return redirect()->route('account.peserta.form')->with('duplicate', 'Invalid Token');
        }

        return $next($request);
    }
}
