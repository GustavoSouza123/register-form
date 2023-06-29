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
    <?php
    /* define variables and set to empty values */
    $nameErr = $cpfErr = $emailErr = $stateErr = $cityErr = $streetErr = $numberErr = $developerErr = $languagesErr = "";
    $name = $cpf = $email = $phone = $comment = $state = $city = $neighborhood = $street = $number = $comp = $cep = $developer = $languages[] = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $empty_fields = 9;

        /* validation for required fields */
        if(empty($_POST["name"])) {
            $nameErr = "O nome é obrigatório";
        } else {
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Apenas letras e espaços";
            } else {
                $empty_fields--;
            }
        }

        if(empty($_POST["cpf"])) {
            $cpfErr = "O CPF é obrigatório";
        } else {
            $cpf = test_input($_POST["cpf"]);
            $empty_fields--;
        }

        if(empty($_POST["email"])) {
            $emailErr = "O email é obrigatório";
        } else {
            $email = test_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Formato inválido";
            } else {
                $empty_fields--;
            }
        }

        if(empty($_POST["state"])) {
            $stateErr = "O estado é obrigatório";
        } else {
            $state = test_input($_POST["state"]);
            $empty_fields--;
        }

        if(empty($_POST["city"])) {
            $cityErr = "A cidade é obrigatória";
        } else {
            $city = test_input($_POST["city"]);
            $empty_fields--;
        }

        if(empty($_POST["street"])) {
            $streetErr = "A rua é obrigatória";
        } else {
            $street = test_input($_POST["street"]);
            $empty_fields--;
        }

        if(empty($_POST["number"])) {
            $numberErr = "**";
        } else {
            $number = test_input($_POST["number"]);
            $empty_fields--;
        }

        if(empty($_POST["developer"])) {
            $developerErr = "Escolha uma opção";
        } else {
            $developer = $_POST["developer"];
            $empty_fields--;
        }

        if(empty($_POST["languages"])) {
            $languagesErr = "Escolha uma<br>opção";
        } else {
            $languages = $_POST["languages"];
            $empty_fields--;
        }

        /* optional fields */
        $phone = test_input($_POST["phone"]);
        $comment = test_input($_POST["comment"]);
        $neighborhood = test_input($_POST["neighborhood"]);
        $comp = test_input($_POST["comp"]);
        $cep = test_input($_POST["cep"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="container">
        <div class="container-title">
            <h1>Cadastro</h1>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <div class="data">
                <div class="title">Dados gerais</div>
                <div class="content">
                    <div class="field">
                        <label for="name">Nome: <span>* <?php echo $nameErr;?></span></label> <input type="text" name="name" id="name" value="<?php echo $name;?>" />
                    </div>
                    <div class="field">
                        <label for="cpf">CPF: <span>* <?php echo $cpfErr;?></label> <input type="text" pattern="[0-9]{9}-[0-9]{2}" placeholder="123456789-00" name="cpf" id="cpf" value="<?php echo $cpf;?>" />
                    </div>
                    <div class="field">
                        <label for="email">Email <span>* <?php echo $emailErr;?></label> <input type="email" name="email" id="email" value="<?php echo $email;?>" />
                    </div>
                    <div class="field">
                        <label for="phone">Telefone:</label> <input type="tel" pattern="[0-9]{4}-[0-9]{4}" placeholder="1234-5678" name="phone" id="phone" value="<?php echo $phone;?>" />
                    </div>
                    <div class="field">
                        <label for="comment">Observação:</label> <textarea name="comment" id="comment" rows="5"><?php echo $comment;?></textarea>
                    </div>
                </div>
            </div>
            <div class="address">
                <div class="title">Endereço</div>
                <div class="content">
                    <div class="field">
                        <label for="state">Estado: <span>* <?php echo $stateErr;?></span></label> <input type="text" name="state" id="state" value="<?php echo $state;?>" />
                    </div>
                    <div class="field">
                        <label for="city">Cidade: <span>* <?php echo $cityErr;?></span></label> <input type="text" name="city" id="city" value="<?php echo $city;?>" />
                    </div>
                    <div class="field">
                        <label for="neighborhood">Bairro:</label> <input type="text" name="neighborhood" id="neighborhood" value="<?php echo $neighborhood;?>" />
                    </div>
                    <div class="field mg">
                        <label for="street">Rua: <span>* <?php echo $streetErr;?></span></label> <input type="text" name="street" id="street" value="<?php echo $street;?>" />
                    </div>
                    <div class="small-fields mg">
                        <div class="field">
                            <label for="number">Número <span>* <?php echo $numberErr;?></span></label> <input type="text" name="number" id="number" value="<?php echo $number;?>" />
                        </div>
                        <div class="field">
                            <label for="comp">Compl.:</label> <input type="text" name="comp" id="comp" value="<?php echo $comp;?>" />
                        </div>
                        <div class="field">
                            <label for="cep">CEP:</label> <input type="text" pattern="[0-9]{5}-[0-9]{3}" placeholder="12345-678" name="cep" id="cep" value="<?php echo $cep;?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="languages">
                <div class="title">Conhecimento técnico</div>
                <div class="content">
                    <div class="developer">
                        <div class="option">
                            <input type="radio" name="developer" id="frontend" value="frontend" 
                            <?php if(isset($developer) && $developer == "frontend") echo "checked";?> /> <label for="frontend">Front-end</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" id="backend" value="backend" 
                            <?php if(isset($developer) && $developer == "backend") echo "checked";?> /> <label for="backend">Back-end</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" id="fullstack" value="fullstack" 
                            <?php if(isset($developer) && $developer == "fullstack") echo "checked";?> /> <label for="fullstack">Full-stack</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="developer" id="other" value="other" 
                            <?php if(isset($developer) && $developer == "other") echo "checked";?> /> <label for="other">Outro</label>
                        </div>
                        <span>* <?php echo $developerErr;?></span>
                    </div>
                    <div class="programming-languages">
                        <?php
                        $langs = array('HTML', 'CSS', 'JavaScript', 'React', 'Vue', 'Angular', 'Node.js', 'Typescript', 'PHP', 'Laravel', 'Java', 'Spring', 'Python', 'Django', 'SQL', 'MySQL', 'MongoDB', 'C', 'C++', 'C#', 'Go', 'Kotlin', 'R', 'Swift', 'Rust', 'Ruby', 'Assembly', 'Git', 'Shell');
                        foreach($langs as $key => $value) {
                            $lower = strtolower($value);
                            echo
                            "<div class='option'>
                                <input type='checkbox' name='languages[]' id='$lower' value='$lower' ";
                                for($i = 0; $i < count($languages); $i++) {
                                    if(isset($languages) && $languages[$i] == "$lower") echo "checked";
                                }
                                echo " /> <label for='$lower'>$value</label>
                            </div>";
                        }
                        ?>
                        <span>* <?php echo $languagesErr;?></span>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </div>

    <div class="container result">
        <div class="container-title">
            <h1>Resultado</h1>
        </div>
        <div class="content">
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST" && $empty_fields == 0) {
                if(empty($phone)) $phone = "-";
                if(empty($comment)) $comment = "-";
                if(empty($neighborhood)) $neighborhood = "-";
                if(empty($comp)) $comp = "-";
                if(empty($cep)) $cep = "-";
                
                echo "<b>Dados gerais</b><br>nome: $name<br>cpf: $cpf<br>email: $email<br>telefone: $phone<br>observação: $comment<br><br>";
                echo "<b>Endereço</b><br>estado: $state<br>cidade: $city<br>bairro: $neighborhood<br>rua: $street<br>número: $number<br>complemento: $comp<br>cep: $cep<br><br>";
                echo "<b>Conhecimento técnico</b><br>desenvolvedor: $developer<br>linguagens: ";
                foreach($languages as $key => $value) {
                    echo $value;
                    if($key != count($languages)-1) echo ", ";
                }
                echo "<script>window.scrollTo(0, document.body.scrollHeight);</script>";
            }
            ?>
        </div>
    </div>
</body>
</html>