<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Otp;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class VerifyOtp
{
    public function handle(Request $request, Closure $next)
    {
        $otp = Otp::where('user_id', Auth::id()
        )
                  ->where('otp_code', $request->otp)
                  ->where('expires_at', '>', Carbon::now())
                  ->first();

        if (!$otp) {
            return response()->json(['message' => 'Invalid or expired OTP'], 403);
        }

        return $next($request);
    }
}
