<?php
$data['link_css'] = "assets/css/perfil.css";
?>

<div class="d-flex">
    <div class="d-flex align-items-center justify-content-center w-25 bg-coluna-dados-usuario coluna-dados-usuario ">
        <div>
            <input type="file" id="userImage" style="display: none;">
            <img class="icone-dados-usuario" id="userImageDisplay" style="width: 100px; cursor: pointer;" src="/assets/icons/user.png" alt="Imagem de perfil">
            <p>Nome Usuário</p>
        </div>
    </div>

    <div class="h-100 w-75 p-2">
        <h2 class="mb-2 mt-2 titulo-perfil">Dados do Usuário</h2>
        <hr>
        <form id="AlterarSenhaUsuarioLogado" method="post">

            <div class="mb-2 p-2 my-2 col-md-12">
                <label for="userEmail"><b>Email do Usuário</b></label>
                <input type="email" class="form-control" id="" value="<?= session()->get('usuario') ?>" name="usuario" disabled>
                <input type="text" class="form-control" id="" value="<?= session()->get('id') ?>" name="id" hidden readonly>

            </div>
            <div class="mb-2 row">
                <div class="col-md-6 p-2 mb-2">
                    <label for="userPassword" class="form-label "><b>Senha do Usuário</b></label>
                    <div style="position: relative; width: 100%;">
                        <input class="w-100 form-control" id="password" type="password" value="" placeholder="Senha" required maxlength="64" name="senha" />
                        <img src="<?= base_url('assets/icons/icone-password.png') ?>" id="showPassword" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); height: 20px; width: 20px; cursor: pointer;" alt="Ícone Senha" />
                    </div>
                </div>
                <div class="col-md-6 p-2 mb-2">
                    <label for="userPassword" class="form-label "><b>Confirme sua Senha</b></label>
                    <div style="position: relative; width: 100%;">
                        <input class="mb- w-100 form-control" id="password" type="password" value="" placeholder="Senha" required maxlength="64" name="confirmar-senha" />
                        <img src="<?= base_url('assets/icons/icone-password.png') ?>" id="showPassword" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); height: 20px; width: 20px; cursor: pointer;" alt="Ícone Senha" />
                    </div>
                </div>
                <div class="mt-3 ml-3">
                    <input type="submit" class="input-rosa w-50 mt-3 ml-5" value="Atualizar" style="margin-left: 150px;">
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    const userImageInput = document.getElementById('userImage');
    const userImageDisplay = document.getElementById('userImageDisplay');
    const userPasswordInput = document.getElementById('userPassword');
    const updateButton = document.getElementById('updateButton');

    userImageDisplay.addEventListener('click', () => {
        userImageInput.click();
    });

    userImageInput.addEventListener('change', () => {
        const file = userImageInput.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                userImageDisplay.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    updateButton.addEventListener('click', () => {
        // Aqui você pode implementar a lógica para atualizar a senha do usuário.
        const newPassword = userPasswordInput.value;
        // Faça algo com a nova senha (por exemplo, envie para o servidor).
    });

    // Icone do password, ocultando e aparecendo senha
    document.getElementById("showPassword").addEventListener("click", () => {
        var passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
</script>