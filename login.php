
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <title>AdotPet</title>
</head>
<body>
    <header>

        <h1>AdotPet</h1>
       
        <nav>
            <a href="#">Home</a>
            <a href="#">Adoção</a>
            <a href="#">Contato</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <figure class="cat">
            <img src="./assets/img/log1.png" alt="Imagem de um gato">
        </figure>
       <figure class="card">
           <figcaption>
                <form action="./lib/validar.php" method="$_POST">
                    <ul>
                        <li>
                            <label for="">Usuário</label>
                            <input type="text" name="usuario" id="usuario" placeholder = "  Digite o seu usuário" required>
                        </li>
                        <li>
                            <label for="">Senha</label>
                            <input type="password" name="password" id="senha" placeholder = "  Digite a sua senha" required >
                        </li>
                        <li>
                            <button type="submit">Entrar</button>
                           
                        </li>
                    </ul>
                </form>
            </figcaption>
        </figure>

    </main>
    <footer>
        <p>Atividade proposta no curso Programador Web Senac</p>
        <p>Cláudia Aguilar</p>
    </footer>
    
</body>
</html>