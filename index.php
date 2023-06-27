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
                <div class="title">Conhecimento técnico</div>
                <div class="content">
                    <div class="developer">
                        <div class="option">
                            <input type="radio" name="developer" id="frontend" value="frontend" /> <label for="frontend">Front-end</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" id="backend" value="backend" /> <label for="backend">Back-end</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" id="fullstack" value="fullstack" /> <label for="fullstack">Full-stack</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" id="other" value="other" /> <label for="other">Outro</label>
                        </div>
                    </div>
                    <div class="programming-languages">
                        <?php
                            $langs = array('HTML', 'CSS', 'JavaScript', 'React', 'Vue', 'Angular', 'Node.js', 'Typescript', 'PHP', 'Laravel', 'Java', 'Spring', 'Python', 'Django', 'SQL', 'MySQL', 'MongoDB', 'C', 'C++', 'C#', 'Go', 'Kotlin', 'R', 'Swift', 'Rust', 'Ruby', 'Assembly', 'Git', 'Shell');
                            foreach($langs as $key => $value) {
                                $lower = strtolower($value);
                                echo
                                "<div class='option'>
                                    <input type='checkbox' name='language' id='$lower' value='$lower' /> <label for='$lower'>$value</label>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>