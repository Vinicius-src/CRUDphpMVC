
<style>
    body {

background: #6a11cb;


background: -webkit-linear-gradient(to right,#4a00e0, #63d452);


background: linear-gradient(to right,#4a00e0, #63d452);
}
</style>
<body>
<div class="container-fluid mt-5" >
           
                <div class="rounded  d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Entrar</h3>
                        </div>
                        <form action="login" method="POST">
                            <div class="p-4">
                                <div class="input-group mb-4">
                                    <span class="input-group-text bg-primary">
                                        <i class="bi bi-person-plus-fill text-white"></i>
                                    </span>
                                    <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary">
                                        <i class="bi bi-key-fill text-white"></i>
                                    </span>
                                    <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                                </div>
                            
                                <button class="btn btn-lg btn-primary text-center mt-5 col-6 d-block mx-auto " type="submit" name="entrar">
                                    Entrar
                                </button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
</body>
