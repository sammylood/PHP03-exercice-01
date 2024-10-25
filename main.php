    <div id="container">
        <!-- <aside aria-label="Contenu secondaire">
            <h3 id="aside-title">Aside</h3>
        </aside> -->
        <h2 class="article-title">Nos membres</h2>
        <main class="contenu_moitie_moitie">
            <section class="moitie">
                <div class="card">

                    <img src="assets/img/proprietaire.jpg" alt="Proprietaire">
                    <h3 class="card__title">Nom: <span>
                            <?php echo $proprio1->name; ?></span></h3>
                    <p><strong>Adresse: </strong><span><?php echo $proprio1->address; ?></span></p>
                    <p><strong>Code Postal: </strong> <span><?php echo $proprio1->zipCode; ?></span></p>
                    <p> <strong>Telephone: </strong><span><?php echo $proprio1->phone; ?></span></p>
                    <p><strong>Courriel: </strong> <span><?php echo $proprio1->email; ?></span></p>

                </div>
            </section>
            <section class="moitie">
                <div class="card">
                    <img src="assets/img/animal.jpg" alt="Animal">
                    <h3 class="card__title">Nom: <span>Animal</span></h3>
                    <p>Type: <span>Chat</span></p>
                    <p>Date d'anniversaire: <span>2019-12-12</span></p>
                    <p>Age: <span>5</span></p>
                </div>
            </section>

            <section class="moitie">
                <div class="card">
                    <img src="assets/img/proprietaire.jpg" alt="Proprietaire">
                    <h3 class="card__title">Nom: <span>
                            <?php echo $proprio2->name; ?></span></h3>
                    <p><strong>Adresse: </strong><span><?php echo $proprio2->address; ?></span></p>
                    <p><strong>Code Postal: </strong> <span><?php echo $proprio2->zipCode; ?></span></p>
                    <p> <strong>Telephone: </strong><span><?php echo $proprio2->phone; ?></span></p>
                    <p><strong>Courriel: </strong> <span><?php echo $proprio2->email; ?></span></p>
                </div>
            </section>
            <section class="moitie">
                <div class="card">
                    <img src="assets/img/animal.jpg" alt="Animal">
                    <h3 class="card__title">Nom: <span>Animal</span></h3>
                    <p>Type: <span>Chat</span></p>
                    <p>Date d'anniversaire: <span>2019-12-12</span></p>
                    <p>Age: <span>5</span></p>
                </div>
            </section>
        </main>
    </div>