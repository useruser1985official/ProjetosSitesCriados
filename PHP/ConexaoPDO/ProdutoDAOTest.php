<?php
    require_once "Produto.php";
    require_once "ProdutoDAO.php";

    class ProdutoDAOTest {
        public function inserir() {
            $prod = new Produto();

            $prod->setDescricao("Feijão");
            $prod->setQtd(20);
            $prod->setValor(10);

            $dao = new ProdutoDAO();

            if($dao->save($prod)) {
                echo "Salvo com Sucesso!";
            }
            else {
                echo "Erro ao Salvar!";
            }
        }

        public function listar() {
            $dao = new ProdutoDAO();

            foreach($dao->findAll() as $p) {
                echo "<hr/>";
                echo "ID: {$p->getId()}<br/>";
                echo "Descrição: {$p->getDescricao()}<br/>";
                echo "Qtd: {$p->getQtd()}<br/>";
                echo "Valor: {$p->getValor()}<br/>";
                echo "<hr/>";
            }
        }

        public function atualizar() {
            $prod = new Produto();

            $prod->setDescricao("Farinha");
            $prod->setQtd(20);
            $prod->setValor(10);
            $prod->setId(2);

            $dao = new ProdutoDAO();

            if($dao->update($prod)) {
                echo "Atualizado com Sucesso!";
            }
            else {
                echo "Erro ao Atualizar!";
            }
        }

        public function excluir() {
            $prod = new Produto();

            $prod->setId(2);

            $dao = new ProdutoDAO();

            if($dao->delete($prod)) {
                echo "Deletado com Sucesso!";
            }
            else {
                echo "Erro ao Deletar!";
            }
        }
    }