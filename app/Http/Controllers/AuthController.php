<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Email atau password salah'], 401);
        }

        // hanya role admin yang boleh login
        if ($user->role !== 'admin') {
            return response()->json(['message' => 'Akses ditolak, hanya admin'], 403);
        }

        // kalau butuh token (pakai Sanctum)
        $token = $user->createToken('admin_token')->plainTextToken;

        return response()->json([
            'message' => 'Login admin berhasil',
            'user' => $user,
            'token' => $token
        ]);
    }
}
       