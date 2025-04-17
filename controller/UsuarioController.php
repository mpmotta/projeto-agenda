<?php
    require_once('../model/usuarioModel.php');

    class usuarioController {

        public function logar() {
            $usuario = new Usuario();

            $user = $_POST['usuario'];
            $senha = $_POST['senha'];
            $senha = hash('sha256', $senha);
            $usuario->logar($user, $senha);    
        }

        public function sair() {
            session_start();
            session_destroy();
            header('Location: ../view/index.php?user=deslogado');

        }

        public function mudarSenha(){
            $usuario = new Usuario();
  
            if (isset($_POST['senha']) && $_POST['senha'] == $_POST['senha2']) {
                $id = $_POST['meuid'];
                $senha = $_POST['senha'];
                $senha2 = $_POST['senha2'];
                $senha = hash('sha256', $senha);
                echo $_POST['meuid'];
                $usuario->mudarSenha($id, $senha);
                header('Location: ../view/mudarSenha.php?senha=ok');
            }else{
                header('Location: ../view/mudarSenha.php?user=erro');
            }
        }

        public function handleRequest() {
            if (isset($_GET['action']) && $_GET['action'] == 'logar') {
                $this->logar();
            }
            if (isset($_GET['action']) && $_GET['action'] == 'sair') {
                $this->sair();
            }
            if (isset($_GET['action']) && $_GET['action'] == 'mudarSenha') {
                $this->mudarSenha();
            }
        }
    }
    $UsuarioController = new UsuarioController();
    $UsuarioController->handleRequest();
?>
