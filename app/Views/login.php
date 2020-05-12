<div class="container-fluid">
    <div class="row justify-content-center">
        <section id="loginbox" class="animated fadeInDown col-12 col-sm-4 col-md-4">
            <div class="login-dark p-3 shadow-lg rounded">
                <div class="pt-3">
                    <h2 class="text-white ">Login</h2>
                </div>

                <form class="mt-5" method="">
                    <div class="form-group">
                        <input type="email"
                               class="form-control form-control-sm bg-light"
                               placeholder="Informe seu e-mail">
                    </div>

                    <div class="form-group">
                        <input type="password"
                               class="form-control form-control-sm bg-light"
                               placeholder="Informe sua senha">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                        <label class="form-check-label text-light" for="rememberCheckBox">Lembre-me?</label>
                    </div>

                    <div class="mt-5">
                        <button class="btn btn-sm btn-light col">
                            Login
                        </button>
                    </div>

                    <div class="text-center mt-2">
                        <a href="#" class="text-warning">Esqueceu sua senha?</a>
                    </div>

                    <div class="mt-5">
                        <p class="text-white text-center">
                            Não possui registro ainda?
                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                Clique aqui
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <div class="row justify-content-center">
        <section id="signupbox" style="display: none" class="animated flipInX col-12 col-sm-4 col-md-4">
            <div class="login-dark p-3 shadow-lg rounded">
                <div class="pt-3">
                    <h2 class="text-white text-center">Faça seu registro Man!</h2>
                </div>

                <form class="mt-5">
                    <div class="form-group">
                        <input type="email"
                               class="form-control form-control-sm bg-light"
                               placeholder="Infore seu e-mail">
                    </div>
                    <div class="form-group">
                        <input type="cpf"
                               class="form-control form-control-sm bg-light"
                               placeholder="Informe seu CPF">
                    </div>
                    <div class="form-group">
                        <input type="password"
                               class="form-control form-control-sm bg-light"
                               placeholder="Informe sua senha">
                    </div>
                    <div class="form-group">
                        <input type="passwordRepit"
                               class="form-control form-control-sm bg-light"
                               placeholder="Repita sua senha">
                    </div>
                    <div class="mt-5">
                        <button class="btn btn-sm btn-light col">
                            Salvar
                        </button>
                    </div>
                    <div class="mt-5">
                        <p class="text-white text-center">
                            Voltar ao login?
                            <a href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">
                                Fazer login
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>