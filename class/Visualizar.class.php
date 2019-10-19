<?php
include_once 'Conexao.class.php';
include_once 'Login.class.php';

// class Visualizar = utilizada para retornar alguns dados administrativos;
class Visualizar extends Conexao{
    
    private $erro;
    private $port;
    private $caminhoport;

    public function getPort(){
        return $this->port;
    }

    public function setPort($port){
        $this->port = $port;
    }

    public function getPortCaminho(){
        return $this->caminhoport;
    }

    public function setPortCaminho($caminhoport){
        $this->caminhoport = $caminhoport;
    }

    public function getErro() {
        return $this->erro;
    }

    public function setErro($erro) {
        $this->erro = $erro;
    }

    public function mostrarAcc() { // retorna quantidades de contas;
        $pdo = parent::getDB();
        try {
            return $pdo->query("SELECT COUNT(*) FROM contas")->fetchColumn();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function mostrarNum() { // retorna quantidade de usuarios;
        $pdo = parent::getDB();
        try {
            return $pdo->query("SELECT COUNT(*) FROM usuarios")->fetchColumn();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function mostrarAce() { // retorna a soma da quantidade de acessos de usuarios;
        $pdo = parent::getDB();
        try {
            return $pdo->query("SELECT SUM(acessos) FROM usuarios")->fetchColumn();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function selectPort() {
        $pdo = parent::getDB();
        $sql = 'SELECT * FROM portas ORDER BY id DESC';
        foreach ($pdo->query($sql) as $row) {
            echo "<option value=\"".$row['porta']."\" checked>".$row['nome']." - ".$row['porta']."</option>";
        }
    }

    public function namePort() {
        $pdo = parent::getDB();
        try {
            return $pdo->query("SELECT porta FROM configuracoes")->fetchColumn();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function addPort() {
        $pdo = parent::getDB();

        try {
            $acessar = $pdo->prepare("SELECT * FROM portas WHERE porta = :port");
            $acessar->bindValue(":port", $this->getPortCaminho());
            $acessar->execute();

            // verifica se existe a porta;
            if($acessar->rowCount() == 0):
                $acessar = $pdo->prepare("INSERT INTO portas (porta, nome) VALUES (:nome, :port)");
                $acessar->bindValue(":port", $this->getPort());
                $acessar->bindValue(":nome", $this->getPortCaminho());
                $acessar->execute();
                $_SESSION['mensagem'] = 'addPort';
                header("Location:?action=admin");
            else: // mensagem de erro caso ela exista;
                $this->setErro("<script>Notify.Error('Essa porta já existe.');</script>");
            endif;

        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function accPort() {
        $pdo = parent::getDB();

        try {
            $acessar = $pdo->prepare("SELECT * FROM portas WHERE porta = :porta");
            $acessar->bindValue(":porta", $this->getPort());
            $acessar->execute();
            // verifica se existe a porta;
            if($acessar->rowCount() == 1):
                $acessar = $pdo->prepare("UPDATE configuracoes SET porta=:porta WHERE id=1");
                $acessar->bindValue(":porta", $this->getPort());
                $acessar->execute();
                $_SESSION['mensagem'] = 'accPort';
                header("Location:?action=admin");
            else: // mensagem de erro caso ela exista;
                $this->setErro("<script>Notify.Error('Essa porta não existe.');</script>");
            endif;

        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }


}






