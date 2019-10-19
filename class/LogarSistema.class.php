<?php
include_once 'Conexao.class.php';
include_once 'Login.class.php';

//class Logar
class Logar extends Conexao implements iLogin{

    private $login;
    private $senha;
    private $erro;

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getErro() {
        return $this->erro;
    }

    public function setErro($erro) {
        $this->erro = $erro;
    }

    public function deslogar() {
        
    }

    public function logar() {
        $pdo = parent::getDB();

        try {
            $logar = $pdo->prepare("SELECT * FROM contas WHERE login = :login AND senha = :senha");
            $logar->bindValue(":login", $this->getLogin());
            $logar->bindValue(":senha", $this->getSenha());
            $logar->execute();
            // verifica se já existe usuário e senha registrados;
            if($logar->rowCount() == 1):
                $dados = $logar->fetch(PDO::FETCH_ASSOC);
                // sessões users;
                $_SESSION['logado'] = true;
                $_SESSION['login'] = $dados['login'];
                $_SESSION['id'] = $dados['id'];
                $_SESSION['tipo_de_conta'] = $dados['tipo_de_conta'];
                $_SESSION['acessibilidade'] = 1;
                header("Location: logado.php"); // caminho da página de login;
            else: // retorna error
                $this->setErro("<script>Notify.Error('Login ou senha incorreto.');</script>");
            endif;

        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function Action(){ //  retorna mensagens;
        switch($this->action) {
            case 'logout':
                $this->setErro("<script>Notify.Warning('Você saiu do sistema com sucesso.');</script>");
                break;
            case 'success':
                $this->setErro("<script>Notify.Success('Logado no sistema com sucesso.');</script>");
                break;
            
            default:
                # code...
                break;
        }
    }

    public static function verificaLogado() { // verificar se user está logado;
          if(!isset($_SESSION['logado'])):
              header("Location: index.php");
          endif;
    }

}

