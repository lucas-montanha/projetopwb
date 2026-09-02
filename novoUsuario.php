<?php include "cabecalho.php"; ?>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <form action="salvarUsuario.php" method="post">
            <input name="id" type="hidden" />
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Nome;
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="nome"
                            type="text" />
                </div>
            </div>
            <div class="row align-items-center mb-3">
             <div class="col-2">
                    Email;
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="email"
                            type="text" />
                </div>
            </div>
            <div class="row align-items-center mb-3">
             <div class="col-2">
                    Login;
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="login"
                            type="text" />
                </div>
            </div>
            <div class="row align-items-center mb-3">
             <div class="col-2">
                    Senha;
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="senha"
                            type="password" />
                </div>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="switchCheckDefault">
                <label class="form-check-input" for="switchCheckDefault">Usuario Ativos</label>
            </div>
            <div class="row"
        </form>
    </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>