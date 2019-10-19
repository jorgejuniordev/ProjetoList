<?php 
    // REQUERIMENTOS;
    include_once 'class/LogarSistema.class.php';
    include_once 'class/Acessar.class.php';
    include_once 'php/functions.php';
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        // VERIFICAR SE A SESSÃO ACESSIBILIDADE EXISTE;
        if(isset($_SESSION['acessibilidade'])){
            $acessar = new Acessar();
            $acessar->setNome($_POST['nome']);
            $acessar->setSobrenome($_POST['sobrenome']);
            $acessar->acessar();
            if($acessar->getErro()):
                $erro = $acessar->getErro();
            else:
                header("Location:logado.php?msg=success");
            endif;
        }else{
            header("Location:?action=home&msg=success");
        }
    }
?>
<!-- main content area -->   
<div class="wrapper" id="main"> 
    <!-- content area -->    
    <section id="content">
        <h1>Seja bem vindo ao <b><?=ucfirst(mb_strtolower(titulo));?></b>.</h1>
        <p>Precisamos que digite seu nome e sobrenome para poder ter acesso ao sistema.</p>
        <form action="" method="POST">
            <input type="text" class="firstMargin" name="nome" placeholder="Digite aqui seu nome" required maxlength="30" />
            <input type="text" name="sobrenome" placeholder="Digite aqui seu sobrenome" required maxlength="30" />
            <button type="submit" id="submit" value="submit">Enviar</button>
        </form>
    </section>
    <section id="content">
        <h2>Sobre o <?=titulo;?></h2>
        <p>Este projeto surgiu em 2015 por meio do PINA e tem como elemento base a inclusão
        social através das Tecnologias da Informação e da Comunicação - TIC. Em 2015 entre os
        principais objetivos estavam a aprendizagem dos alunos, nas áreas de Sistemas Operacionais e
        noções de manutenção de computadores, bem como a doação dos equipamentos recuperados
        pelos alunos, durante o processo de aprendizagem, para as comunidades selecionadas. Para
        aquele ano de 2015, nem todos os seus objetivos puderam ser alcançados, a exemplo do
        processo de doação dos equipamentos às comunidades, devido à mudança no calendário
        acadêmico de 2015 que teve seu fim em 2016 tornando a doação dos computadores inviável
        em ano eleitoral.</p></br>
    </section><!-- #end content area -->
</div><!-- #end div #main .wrapper -->
<div class="spam"></div>