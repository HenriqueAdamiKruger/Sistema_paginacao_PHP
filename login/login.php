<?php
    if (isset($_GET['success']) and $_GET['success'] == 'F') {
?>
        <script>window.alert('Usuário e/ou senha incorretos!')</script>
<?php } ?>

<div>
    <div class="main-page login-page FlexContainer"> 
    <br>
        <div class="login-body FlexItem">
            <h1 class="Bootstrap heading (2rem = 32px)">Login</h1>
            <form method="post" action="../login/loginController.php">

                <div class="inner-addon left-addon pullBottomLogin">
                    <input type="text" name="login" id="usuario" class="form-control" placeholder="Usuário" required>
                </div>
                <div class="inner-addon left-addon">
                    <input type="password" name="password" id="senha" style="border-right:none;" data-toggle="password" class="form-control" data-placement="after" placeholder="Senha" required> 
                </div>
                <input type="submit" name="logar" value="Entrar" >
            </form>
            
            <form method="post" action="../login/cadastrar.php">
                <input type="submit" id="cadastrar" name="cadastrar" value="Cadastrar" >
            <form>
        </div>
    </div>
</div>
    