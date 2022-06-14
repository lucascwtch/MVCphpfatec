<!DOCTYPEHTML>
<html>
    <?php include("head.php") ?>
<script language="javascript" type="text/javascript">
    function formatarMoeda() {
        var elemento = document.getElementById('preco');
        var valor = preco.value;

        valor = valor + '';
        valor = parseInt(valor.replace(/[\D]+/g, ''));
        valor = valor + '';
        valor = valor.replace(/([0-9]{2})$/g, ",$1");

        if (valor.length > 6) {
            valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }
        elemento.value = valor;
    }
    function validar(formulario){
        var quantidade = form.quantidade.value;
        var preco = form.preco.value;
        for (i = 0; i <= formulario.length - 2; i++) {
            if (formulario[i].value == "") {
                alert("Preencha todos os campos!");
                formulario[i].focus();
                return false;
            }
        }
        if (quantidade <= 0){
            alert("Quantidade deve ser maior que zero!");
            form.quantidade.focus();
            return false;
        }
        if (preco <= 0){
            alert("Preço deve ser maior que zero!");
            form.preco.focus();
            return false;
        }
        formulario.submit();
    }
</script>

<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/controllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
        <div class="form-group">
            <div class="form-group">
                <div class="mx-auto" style="width: 500px;">
                <label for="nome"> Nome do Jogo </label>
                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Livro" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="mx-auto" style="width: 500px;">
                <label for="autor"> Nome do Programador </label>
                <input class="form-control" type="text" name="programador" id="programador" placeholder="Programador do Jogo" required>
        </div>
    </div>
    <div class="form-group">
    <div class="mx-auto" style="width: 500px;">
        <label for="quantidade"> Quantidade de Páginas</label>
    <input class="form-control" type="number" id="quantidade_niveis" name="quantidade_niveis" placeholder="Quantidade de Páginas" required>
    </div>
    </div>
    <div class="form-group">
    <div class="mx-auto" style="width: 500px;">
    <label for="number">Valor unitário do Livro</label>
    <input type="text" id="preco" name="preco" placeholder="Preço do Livro" onkeypress="formatarMoeda();" required>
</div>
    </div>
    <div class="form-group">
    <div class="mx-auto" style="width: 500px;">
    <label for="date">Data de Lançamento</label>
    <input class="form-control" type="date" id="data" name="data" placeholder="Data de Lançamento" required>
    </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10" style="text-align: right;">
            <button type="submit" class="btn btn-primary" id="cadastrar">Cadastrar</button>
            </div>
    </div>
    </form>
</div>
</body>
</html>