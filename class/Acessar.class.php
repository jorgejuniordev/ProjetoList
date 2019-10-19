<?php
include_once 'Conexao.class.php';
include_once 'Login.class.php';

// class Acessar
class Acessar extends Conexao{

    private $nome;
    private $sobrenome;
    private $erro;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getErro() {
        return $this->erro;
    }

    public function setErro($erro) {
        $this->erro = $erro;
    }

    public function acessar() {
        $pdo = parent::getDB();

        try {
            $acessar = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome AND sobrenome = :sobrenome");
            $acessar->bindValue(":nome", $this->getNome());
            $acessar->bindValue(":sobrenome", $this->getSobrenome());
            $acessar->execute();

            // verifica se não existe um usuario com nome e sobrenome registrado;
            if($acessar->rowCount() == 0):
                $acessar = $pdo->prepare("INSERT INTO usuarios (nome, sobrenome, acessos) VALUES (:nome, :sobrenome, 1)");
                $acessar->bindValue(":nome", $this->getNome());
                $acessar->bindValue(":sobrenome", $this->getSobrenome());
                $acessar->execute();
                $_SESSION['acessibilidade'] = 0;
                header("Location: logado.php?msg=success");
            else: // atualiza o usuer existente com +1 quantidade de acesso;
                $acessar = $pdo->prepare("UPDATE usuarios SET acessos=acessos+1 WHERE (nome = :nome AND sobrenome = :sobrenome)");
                $acessar->bindValue(":nome", $this->getNome());
                $acessar->bindValue(":sobrenome", $this->getSobrenome());

                $acessar->execute();
                $_SESSION['acessibilidade'] = 0;
                //header("Location: logado.php?msg=success");
            endif;

        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}