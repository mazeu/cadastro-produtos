<?php namespace App\Controllers;

class Categorias extends BaseController {
    public function index(){
        //chama uma view para apresentar as categorias
        $categoriaModel = new \App\Models\CategoriaModel();
        $data['categorias'] = $categoriaModel->find();
        $data['titulo'] = 'Listando todas categorias';

        echo view('categorias', $data);
    }

    public function inserir(){

        $data['titulo'] = 'Inserir nova categoria';
        $data['acao'] = 'Inserir';
        $data['msg'] = '';

        if($this->request->getMethod()=== 'post'){
            $categoriaModel = new \App\Models\CategoriaModel();
            $categoriaModel->set('nomecategoria', $this->request->getPost('nomecategoria'));

            if($categoriaModel->insert()){
                //deu certo
                $data['msg'] = 'Categoria inserida com sucesso';

            }else{
                //deu errado
                $data['msg'] = 'Erro ao inserir categoria';
            }
        }

        echo view('categorias_form', $data);
    }

    public function editar($idcategoria){//id da categoria do bd
        $data['titulo'] = 'Editar categoria'.$idcategoria;
        $data['acao'] = 'Editar';
        $data['msg'] = '';
        $categoriaModel = new \App\Models\CategoriaModel();
        $categoria = $categoriaModel->find($idcategoria);

        if($this->request->getMethod() === 'post'){
            //quando o form for submetido
            $categoria->nomecategoria = $this->request->getPost('nomecategoria');

            if($categoriaModel->update($idcategoria, $categoria)){
                $data['msg'] = 'Categoria editada com sucesso';
            }else{
                $data['msg'] = 'Erro ao editar categoria';
            }
        }

        $data['categoria'] = $categoria;
        echo view('categorias_form', $data);
    }

    public function excluir(){

        

        
    }
}