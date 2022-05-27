<main>
    <section id="acompanhe">
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7968.7388987665545!2d-47.350712617653855!3d-2.994772042714856!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1639960342007!5m2!1spt-BR!2sbr" loading="lazy"></iframe>
        </div>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Bairro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dadosTable as $key => $value) {
                        echo 
                        '<tr>
                            <td>' . $value['dt'] . '</td>
                            <td>' . $value['horario'] . '</td>
                            <td>' . $value['bairro'] . '</td>
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <section id="sobre-nos">
        <h2><em>Sobre nós</em></h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus recusandae harum consequuntur facere vitae commodi est natus? Est alias nisi nemo eius obcaecati ipsam at similique, illo repudiandae? Architecto, nostrum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, rerum repudiandae, inventore vel praesentium architecto sunt obcaecati exercitationem, iure hic dignissimos corrupti reprehenderit eveniet mollitia expedita delectus vero molestias quaerat?</p>
    </section>
    <section id="noticias">
        <div id="noticias-hub">
            <?php
            foreach ($dadosPosts as $key => $value) {
                echo 
                '<a class="post" href="posts/'.$value['nomearquivo'].'" target="_self">
                    <div class="resumo-item">
                        <h3>'.$value['titulo'].'</h3>
                        <p>'.$value['resumo'].'</p>
                    </div>
                </a>';
            }
            ?>
        </div>
        <div id="paginacao">
            <button id="anterior" disabled>&lsaquo;</button>
            <span id="numeracao"></span>
            <button id="proximo" disabled>&rsaquo;</button>
        </div>
    </section>
</main>