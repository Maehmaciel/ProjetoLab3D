<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProjetoVal;
use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Models\Arquivoprojeto;
use App\Models\Imgprojeto;
class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vProjetos  = Projeto::all();
        $imagens  = Imgprojeto::all();
        $arquivos  = Arquivoprojeto::all();
        return view('projetos')->with(['vProjetos' =>$vProjetos , 'imagens'=>$imagens,'arquivos'=>$arquivos]);

    }
    public function filtro3D()
    {
        $vProjetos  = Projeto::all();
        $imagens  = Imgprojeto::all();
        $arquivos  = Arquivoprojeto::all();
        return view('filtro3D')->with(['vProjetos' =>$vProjetos , 'imagens'=>$imagens,'arquivos'=>$arquivos]);


    }
    public function filtroLazer()
    {
        $vProjetos  = Projeto::all();
        $imagens  = Imgprojeto::all();
        $arquivos  = Arquivoprojeto::all();
        return view('filtroLazer')->with(['vProjetos' =>$vProjetos , 'imagens'=>$imagens,'arquivos'=>$arquivos]);


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjetoVal $req)
    {   $iProjetos  = new Projeto();
        $iProjetos->nome = $req->input('nome');
        $iProjetos->descricao = $req->input('descricao');
        $iProjetos->infoAdicional= $req->input('infoAdicional');
        $iProjetos->codTipo=$req->get('classificacao');
        $iProjetos->save();
        $Id = $iProjetos->id;
        foreach ($req->file('image') as $request) {
         if ($request->isValid()) {
            $nomeImagem = uniqid(date('HisYmd'));
            $extension = $request->extension();
            $nomeArquivo = "{$nomeImagem}.{$extension}";
            $upload = $request->storeAs('public/image_upload', $nomeArquivo);
            if ( !$upload )
                return redirect()
                            ->back()
                            ->with('error', 'Falha ao fazer upload')
                            ->withInput();
        else{
            $iImg = new Imgprojeto();
            $iImg->nome = $nomeArquivo;
            $iImg->codprojeto=$Id;
            $iImg->save();
        }}
    }
        foreach ($req->file('arquivos') as $request) {
            if ($request->isValid()) {
               $nomeImagem = uniqid(date('HisYmd'));
               $extension = $request->extension();
               $nomeArquivo = "{$nomeImagem}.{$extension}";
               $upload = $request->storeAs('public/arquivos_upload', $nomeArquivo);
               if ( !$upload )
                   return redirect()
                               ->back()
                               ->with('error', 'Falha ao fazer upload')
                               ->withInput();
           
           else{
            $iArq = new Arquivoprojeto();
            $iArq ->nome = $nomeArquivo; 
            $iArq ->codprojeto=$Id;
            $iArq->save();
        }
        }
       
        }
         return redirect()
                               ->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $vProjetos = Projeto::find($id);
        $imagens  = Imgprojeto::all();
        $arquivos  = Arquivoprojeto::all();
        return view('verProjeto')->with(['vProjetos' =>$vProjetos , 'imagens'=>$imagens,'arquivos'=>$arquivos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Projeto::find($id);
        return view('editarProjeto')->with(['item' => $item]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Projeto::find($id)->update($request->all());
        return redirect()
                               ->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Projeto::find($id)->delete();
        return redirect()->route('projetos.index');
    }
}

