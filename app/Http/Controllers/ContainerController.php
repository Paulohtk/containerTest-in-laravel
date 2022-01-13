<?php

namespace App\Http\Controllers;

use App\Http\Requests\containerRequest;
use App\Models\Container;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class ContainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(
        Container $container
    ) {
        $this->container = $container;
    }
    public function index()
    {
        $data = ['containers' => $this->container->all()];
        return view('index.indexContainer', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.containerCrud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(containerRequest $request)
    {
        try {
            DB::beginTransaction();
            Container::create($request->all());
            DB::commit();
            return redirect()->route('index');
        } catch (\Throwable $th) {
            DB::rollBack();

            return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function show(Container $container)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function edit(Container $container)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Container $container)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Container  $container
     * @return \Illuminate\Http\Response
     */
    public function destroy(Container $container)
    {
        //
    }
}
