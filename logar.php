<?php include_once "topo.php"; ?>
    <h3 class="pageheader">Logar no Sistema</h3>
        <fieldset>
            <legend align="center">::::::::::::SISTEMA::::::::::::</legend>
                <form action="verificarlogin.php" method="post" class="formgroup">
                    E-mail: <input type="text" name="email" placeholder="Digite seu E-mail.." class="form-control"/>
                    <br><br>
                    Senha: <input type="password" name="senha" placeholder="Digite sua senha.." class="form-control"/>
                    <br><br>
                <input type="submit" value="Entrar no Sistema" class="btn btn-primary"/>
            </form>
        </fieldset>
        <?php
        if(isset($_GET["m"])){
            echo base64_decode($_GET["m"]);
        }
        ?>
    </div>
</body>
</html>