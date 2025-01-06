<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boards=Board::get();
        return view('admin.board',compact( 'boards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            //Database column_name => Form field name
            'board_name' => $request->board_name,

        ];

        $board = Board::create($data);
        return redirect()->route('admin.board.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Board $board)
    {
        
        $editboard = $board;
        // dd($edituser);
        $boards = Board::get();
        return view('admin.Board', compact('boards','editboard'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Board $board)
    {
        $data = [
            //Database column_name => Form field name
            'board_name' => $request->board_name,

        ];

        $board = Board::find($board->id)->update($data);
        return redirect()->route('admin.board.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Board $board)
    {
        $board->delete();
        return redirect()->route('admin.board.index');
    }
}
