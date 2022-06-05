<?php
    if (isset($_SESSION['gestor'])) {
        echo '
            <main>
                <form action="pdo.php" method="post">
                    <h2>Gestão da tabela</h2>
                    <div class="tabela">
                        <!-- Coluna das datas -->
                        <div class="linha">
                            <label for="dt1">Data da 1ª linha:</label>
                                <input type="date" max="2023-12-31" min="2022-01-01" name="data1" id="dt1" required>
                            <label for="dt2">Data da 2ª linha:</label>
                                <input type="date" max="2023-12-31" min="2022-01-01" name="data2" id="dt2" required>
                            <label for="dt3">Data da 3ª linha:</label>
                                <input type="date" max="2023-12-31" min="2022-01-01" name="data3" id="dt3" required>
                            <label for="dt4">Data da 4ª linha:</label>
                                <input type="date" max="2023-12-31" min="2022-01-01" name="data4" id="dt4" required>
                            <label for="dt5">Data da 5ª linha:</label>
                                <input type="date" max="2023-12-31" min="2022-01-01" name="data5" id="dt5" required>
                        </div>
                        <!-- Coluna dos horários -->
                        <div class="linha">
                            <label for="hr1">Horário da 1ª linha:</label>
                                <input type="time" name="hora1" id="hr1" required>
                            <label for="hr2">Horário da 2ª linha:</label>
                                <input type="time" name="hora2" id="hr2" required>
                            <label for="hr3">Horário da 3ª linha:</label>
                                <input type="time" name="hora3" id="hr3" required>
                            <label for="hr4">Horário da 4ª linha:</label>
                                <input type="time" name="hora4" id="hr4" required>
                            <label for="hr5">Horário da 5ª linha:</label>
                                <input type="time" name="hora5" id="hr5" required>
                        </div>
                        <!-- Coluna dos bairros -->
                        <div class="linha">
                            <label for="bairro1">Bairro(s) da 1ª linha:</label>
                                <input type="text" name="bairro1" id="bairro1" maxlength="40" autocomplete="on" required>
                            <label for="bairro2">Bairro(s) da 2ª linha:</label>
                                <input type="text" name="bairro2" id="bairro2" maxlength="40" autocomplete="on" required>
                            <label for="bairro3">Bairro(s) da 3ª linha:</label>
                                <input type="text" name="bairro3" id="bairro3" maxlength="40" autocomplete="on" required>
                            <label for="bairro4">Bairro(s) da 4ª linha:</label>
                                <input type="text" name="bairro4" id="bairro4" maxlength="40" autocomplete="on" required>
                            <label for="bairro5">Bairro(s) da 5ª linha:</label>
                                <input type="text" name="bairro5" id="bairro5" maxlength="40" autocomplete="on" required>
                        </div>
                    </div>
                        <input type="submit" value="Atualizar!" name="tabela">
                </form>
                <p><a href="home" target="_self">Clique aqui</a> para voltar para a página principal.</p>
            </main>';
    } else {
        header('Location: fhdbavhuvfdvgy');
    }
?>