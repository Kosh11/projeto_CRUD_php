<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success"> Voltar </button>
        </a>
    </section>

    <h2 class="mt-3"> Cadastrar Vaga </h2>

    <form method="post"> <!-- ação será direcionada para a mesma página -->
        <div class="form-group">
            <label> Título </label>
            <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label> Descrição </label>
            <textarea name="descricao" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label> Status </label>
            
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n"> Inativo
                    </label>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"> Enviar</button>
            </div>
 
        </div>
    </form>

</main>