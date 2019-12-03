<?php 
    include 'Conexao.php';

    class Planeta{

        public $id;
        public $nome;
        public $sistema;
        public $tamanho;
        public $tipo;
        public $nseresvivos;
        public $coloracao;
        public $distancia;
        public $foto;

        public function newPlaneta(){
            $conexao = Conexao::getConexao();

            $query = "INSERT INTO planetas(nome, sistema, tamanho, tipo, nseresvivos, coloracao, distancia, foto) VALUES ('".$this->nome."', '".$this->sistema."', '".$this->tamanho."', '".$this->tipo."', '".$this->nseresvivos."', '".$this->coloracao."', '".$this->distancia."', '".$this->foto."')";

            $conexao->exec($query);
        }

        public function listarPlanetas(){
            $conexao = Conexao::getConexao();

            $query = "SELECT * FROM planetas";

            $lista_sql = $conexao->query($query);

            $lista = $lista_sql->fetchAll();

            return $lista;
        }

        public function apagarPlaneta(){
            $conexao = Conexao::getConexao();

            $query_foto = "SELECT foto FROM planetas WHERE id="."$this->id";
            $foto_sql = $conexao->query($query_foto);
            $foto = $foto_sql->fetchAll();
            
            $query = "DELETE FROM planetas WHERE id="."$this->id";
            $conexao->exec($query);

            foreach($foto as $elemento){
                unlink("fotos/".$elemento['foto']."");
            }
        }

        public function selecionaElemento(){
            $conexao = Conexao::getConexao();

            $query = "SELECT id, nome, sistema, tamanho, tipo, nseresvivos, coloracao, distancia FROM planetas WHERE id=".$this->id;

            $lista_sql = $conexao -> query($query);
            $lista = $lista_sql->fetchAll();

            foreach($lista as $elemento){
                return $elemento;
            }
        }

        public function atualizaPlaneta(){
            $conexao = Conexao::getConexao();

            $query = "UPDATE planetas SET nome='".$this->nome."', sistema='".$this->sistema."', tamanho='".$this->tamanho."', tipo='".$this->tipo."', nseresvivos='".$this->nseresvivos."', coloracao='".$this->coloracao."', distancia='".$this->distancia."' WHERE id=".$this->id;

            $conexao->exec($query);
            
        }
    }
?>