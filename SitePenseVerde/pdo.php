<?php
    session_start();
    $pdo = new PDO('mysql:host=localhost;dbname=semma', 'root', '');
    $gestor = 'gestorPenseVerde';
    $senha = '$68cKC.fs@PSwaA';

    $queryTable = $pdo->prepare("SELECT DATE_FORMAT(dtcoleta, '%d/%m/%Y') AS dt, TIME_FORMAT(hrcoleta, '%H:%i') AS horario, bairro FROM DatasColetas");
    $queryTable->execute();
    $dadosTable = $queryTable->fetchAll();

    $queryPosts = $pdo->prepare("SELECT dtpost, titulo, nomearquivo, resumo FROM Posts ORDER BY id DESC");
    $queryPosts->execute();
    $dadosPosts = $queryPosts->fetchAll();

    if(isset($_POST['loginGestor'])) {
        $gestorInput = $_POST['usuario'];
        $senhaInput = $_POST['senha'];
        $option = $_POST['option'];

        if ($gestorInput == $gestor && $senhaInput == $senha) {
            $_SESSION['gestor'] = 'gestor';
            if ($option == 'noticias') {
                header('Location: jhvbdsgvhgyfxh');
            } else {
                header('Location: jsbsaahgvuvidsb');
            }
            
        } else {
            echo '<p>Usuário e/ou senha inválida!</p>';
            header('Location: fhdbavhuvfdvgy');
        }
    }

    if(isset($_POST['tabela'])){
		$data1 = $_POST['data1'];
		$hora1 = $_POST['hora1'];
		$bairro1 = $_POST['bairro1'];

        $data2 = $_POST['data2'];
		$hora2 = $_POST['hora2'];
		$bairro2 = $_POST['bairro2'];

        $data3 = $_POST['data3'];
		$hora3 = $_POST['hora3'];
		$bairro3 = $_POST['bairro3'];

        $data4 = $_POST['data4'];
		$hora4 = $_POST['hora4'];
		$bairro4 = $_POST['bairro4'];

        $data5 = $_POST['data5'];
		$hora5 = $_POST['hora5'];
		$bairro5 = $_POST['bairro5'];

        $query1 = $pdo->prepare("UPDATE DatasColetas SET dtcoleta = ?, hrcoleta = ?, bairro = ? WHERE id = 1");
        $query2 = $pdo->prepare("UPDATE DatasColetas SET dtcoleta = ?, hrcoleta = ?, bairro = ? WHERE id = 2");
        $query3 = $pdo->prepare("UPDATE DatasColetas SET dtcoleta = ?, hrcoleta = ?, bairro = ? WHERE id = 3");
        $query4 = $pdo->prepare("UPDATE DatasColetas SET dtcoleta = ?, hrcoleta = ?, bairro = ? WHERE id = 4");
        $query5 = $pdo->prepare("UPDATE DatasColetas SET dtcoleta = ?, hrcoleta = ?, bairro = ? WHERE id = 5");

        $query1->execute(array($data1, $hora1, $bairro1));
        $query2->execute(array($data2, $hora2, $bairro2));
        $query3->execute(array($data3, $hora3, $bairro3));
        $query4->execute(array($data4, $hora4, $bairro4));
        $query5->execute(array($data5, $hora5, $bairro5));

        header('Location: home');
	}

    if(isset($_POST['post'])) {
        $titulo = trim($_POST['titulo']);
        $p1 = $_POST['p1'];
        $p1 = substr($p1, 0, 250);
        $p2 = $_POST['p2'];
        $autor = $_POST['autor'];
        $dtPost = date('Y-m-d');
        $dtPost2 = date('d/m/Y');
        $nomeArquivo = strtolower($titulo);
        $nomeArquivo = str_replace(" ", "", $nomeArquivo);
        try {
            $query6 = $pdo->prepare("INSERT INTO `posts` VALUES(null, ?, ?, ?, ?)");
            $query6->execute(array($dtPost, $titulo, $nomeArquivo, $p1));

            // Criando post .php com PHP.
            $conteudo = '<main>
    <section class="posts">
        <div class="posts-sobre">
            <h1>'.$titulo.'</h1>
            <p>'.$p1.'</p>
            <p>'.$p2.'</p>
            <p id="data">'.$dtPost2.'</p>
            <p id="author">Autor: '.$autor.'</p>
        </div>
        <p id="home"><a href="<?php echo INCLUDE_PATH; ?>home" target="_self">Clique aqui</a> para voltar à página principal.</p>
    </section>
</main>';
            file_put_contents('pages/posts/'.$nomeArquivo.'.php', $conteudo);
            header('Location: home');
        } catch (\Throwable $th) {
            echo '<p>Esse título já está sendo utilizado!</p>';
            header('Location: jhvbdsgvhgyfxh');
        }
    }
?>