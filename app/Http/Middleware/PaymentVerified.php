<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaymentVerified
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if ($user->payment_status !== 'verified') {
            abort(403, 'Pembayaran belum diverifikasi admin');
        }

        return $next($request);
    }
}
