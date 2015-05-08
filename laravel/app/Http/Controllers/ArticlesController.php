<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller {


  public function __construct(){
    $this->middleware('auth');
  }

	public function index(){
    //$articles = Article::all();
    //$articles = Article::latest()->get();
    //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();

    //return \Auth::user()->name;

    $articles = Article::latest()->published()->get();
    return view('articles.index', compact('articles'));
    //return view('articles@index')->with('articles', articles);
  }

  public function show($id){
    $article = Article::findOrFail($id);
    //dd($article);

    /*if(is_null($article)){
      abort(404);
    }*/

    //dd($article->created_at->addDays(8)->format('Y-m'));
    //dd($article->created_at->diffForhumans());
    //dd($article->published_at);

    return view('articles.show', compact('article'));
  }

  public function create(){
    return view('articles.create');
  }


  public function store(ArticleRequest $request){
  /*
  public function store(Request $request){
    $this->validate($request, ['title' => 'required', 'body' => 'required']);
  */

    //$input = Request::get('title');
    //$input = Request::all();
    //$input['published_at'] = Carbon::now();

    //$request = $request->all();
    //$request['user_id'] = Auth::id();
    //Auth::user()->articles()->save(new Article($request->all()));

    $article = new Article($request->all());
    Auth::user()->articles()->save($article);
    //Article::create($request->all()); // user_id => Auth:user()->id
    //return $input;
    return redirect('articles');
  }

  public function edit($id){
    $article = Article::findOrFail($id);
    return view('articles.edit', compact('article'));
  }

  public function update($id, ArticleRequest $request){
    $article = Article::findOrFail($id);

    $article->update($request->all());

    return redirect('articles');
  }

}
