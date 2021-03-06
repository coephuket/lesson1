<?php

namespace App\Http\Controllers\Boards;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Board;
use App\Tag;

class BoardsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $NUM_PAGE = 4;
        $boards = Board::orderBy('updated_at','DESC')->paginate($NUM_PAGE);
        $page = $request->input('page');
        $page = ($page != null)?$page:1;
        return view('board.index',compact('boards','page','NUM_PAGE'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('board.create')->with('tags',$tags); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Board::create($request->all());
        $tags = $request->input('tags');
        $board = Board::all()->last();
        $board->tags()->attach($tags);
        return redirect('boards');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $board = Board::findOrFail($id);
        return view('board.show',compact('board')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $board = Board::findOrFail($id);
        $tags = Tag::all();
        return view('board.edit',compact('board','id','tags')); 
    } 

    public function update(Request $request, $id)
    {
        $board = Board::findOrFail($id);
        $tags = $request->input('tags');
        if ($tags == null) {
            $pt = Tag::all();
            foreach( $pt as $t ) 
                $board->tags()->detach($t->id);        
        }
        else{
            $board->tags()->sync($tags);        
        }
        $board->update($request->all());
        return redirect('boards');
    }
 
    public function destroy($id)
    {
        Board::destroy($id);
        return redirect('boards');
    }

    public function searchTag($id)
    {
        $tag = Tag::findOrFail($id);
        $boards = $tag->boards;
        $count = $tag->boards->count();
        return view('board.search', compact('boards','count'));
    }
}
