<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Comments;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function komen(Request $request)
    {
        $validateData = $request->validate([

            'products_id'         => 'required', 'string', 'max:255',
            'isikomen'         => 'required', 'string', 'max:255',
            ]);

            $comment = new Comments();
            $comment->kota = $validateData['kota'];
            $comment->provinsi = $validateData['provinsi'];
            $comment->save();

            return redirect()->route('orders.index')->with('error', 'Pesanan tidak ditemukan');
    }
}
