<?php include "cabecalho.php"; ?>

<div class="row justify-content-center">
    <div class="col-lg-8">
        <h2 class="mb-4">Cadastro de cliente</h2>

        <?php if (isset($_GET["erro"]) && $_GET["erro"] !== "") { ?>
            <div class="alert alert-danger">
                <?php echo htmlspecialchars($_GET["erro"]); ?>
            </div>
        <?php } ?>
        <form action="salvarCliente.php" method="post">
            <input name="id_cliente" type="hidden" />
            
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    Nome:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="nome"
                            type="text" />
                </div>
            </div><!-- Linha do NOME -->
           
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    CPF/CNPJ:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="cpf_cnpj"
                            type="text" />
                </div>
            </div><!-- Linha do CPF -->

            <div class="row align-items-center mb-3">
                <div class="col-2">
                    email:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="email"
                            type="email" />
                </div>
            </div><!-- Linha do email -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    telefone:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="telefone"
                            type="text" />
                </div>
            </div><!-- Linha do telefone -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    data_nascimento:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="data_nascimento"
                            type="date" />
                </div>
            </div><!-- Linha do data_nascimento -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    logradouro:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="logradouro"
                            type="text" />
                </div>
            </div><!-- Linha do logradouro -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    numero:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="numero"
                            type="text" />
                </div>
            </div><!-- Linha do numero -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    complemento:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="complemento"
                            type="text" />
                </div>
            </div><!-- Linha do complemento -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    bairro:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="bairro"
                            type="text" />
                </div>
            </div><!-- Linha do bairro -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    cidade:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="cidade"
                            type="text" />
                </div>
            </div><!-- Linha do cidade -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    estado:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="estado"
                            type="text" />
                </div>
            </div><!-- Linha do estado -->
            <div class="row align-items-center mb-3">
                <div class="col-2">
                    cep:
                </div>
                <div class="col-10">
                    <input class="form-control"
                            name="cep"
                            type="text" />
                </div>
            </div><!-- Linha do cep -->
            <div class="row align-items-center mb-3">
                <div class="col-2"> 
                    Ativo:
                </div>
                <div class="col-10">
                    
                        <input class="form-check-input" type="radio" name="ativo" checked> Sim
                        <input class="form-check-input ms-5" type="radio" name="ativo" value="0" > Não
                </div>
               
            </div><!-- Linha do Radio Ativo -->
            <div class="row align-items-center mb-3">
                <div class="col-12 text-end">
                    <button class="btn btn-success " type="submit" >
                        Salvar Cliente
                    </button>
                </div>
                
        </form>
    </div>
    <div class="col-4"></div>
</div>

<?php include "rodape.php"; ?>