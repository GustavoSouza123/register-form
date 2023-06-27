<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <div class="form-title">
            <h1>Cadastro</h1>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <div class="data">
                <div class="title">Dados gerais</div>
                <div class="content">
                    <div class="field">
                        <label for="name">Nome:</label> <input type="text" name="name" />
                    </div>
                    <div class="field">
                        <label for="cpf">CPF:</label> <input type="text" name="cpf" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label> <input type="email" name="email" />
                    </div>
                    <div class="field">
                        <label for="phone">Telefone:</label> <input type="tel" pattern="[0-9]{4}-[0-9]{4}" placeholder="1234-5678" name="phone" />
                    </div>
                    <div class="field">
                        <label for="comment">Observação:</label> <textarea name="comment" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="address">
                <div class="title">Endereço</div>
                <div class="content">
                    <div class="field">
                        <label for="state">Estado:</label> <input type="text" name="state" />
                    </div>
                    <div class="field">
                        <label for="city">Cidade:</label> <input type="text" name="city" />
                    </div>
                    <div class="field">
                        <label for="neighborhood">Bairro:</label> <input type="text" name="neighborhood" />
                    </div>
                    <div class="field mg">
                        <label for="street">Rua:</label> <input type="text" name="street" />
                    </div>
                    <div class="small-fields mg">
                        <div class="field">
                            <label for="number">Número</label> <input type="text" name="number" />
                        </div>
                        <div class="field">
                            <label for="comp">Compl.:</label> <input type="text" name="comp" />
                        </div>
                        <div class="field">
                            <label for="cep">CEP:</label> <input type="text" name="cep" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="languages">
                <div class="title">Linguagens de programação</div>
                <div class="content">
                    <div class="developer">
                        <div class="option">
                            <input type="radio" name="developer" value="frontend" /> <label for="developer">Front-end</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" value="backend" /> <label for="developer">Back-end</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" value="fullstack" /> <label for="developer">Full-stack</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" value="other" /> <label for="developer">Outro</label>
                        </div>
                    </div>
                    <div class="programming-languages">
                        <div class="option">
                            <input type="checkbox" name="language" value="hmtl" /> <label for="language">HTML</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="css" /> <label for="language">CSS</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="javascript" /> <label for="language">JavaScript</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="php" /> <label for="language">PHP</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="java" /> <label for="language">Java</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="python" /> <label for="language">Python</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="c" /> <label for="language">C</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="cpp" /> <label for="language">C++</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="language" value="csharp" /> <label for="language">C#</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>