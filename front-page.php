<?php get_header(); ?>

 <!-- COVER -->
    <div id="home" class="cover text-black cover--intro">
        <div class="cover__bg"></div>
        <div class="cover__content">
            <h1 class="text-0"><?php bloginfo('name'); ?></h1>
            <h2 style="font-weight:normal" class="text-3 "><?php bloginfo('description'); ?></h2>
        </div>
    </div>

    <!-- LOGHI -->
    <div id="chi-sono">
        <div class="grid grid--small">
            <div class="col-20">
                <img id="logo-me" src="<?php echo get_stylesheet_directory_uri(); ?>/media/logo-me.png" alt="michael-edizioni-treviso">
            </div>

            <div class="col-20 v-center pt-1">
                <p class="text-center">Michael Edizioni Treviso</p>
            </div>

            <div class="col-20 text-center">
                <img id="logo-book" src="<?php echo get_stylesheet_directory_uri();?>/media/logo-book.png" alt="book-a-book-milano">
            </div>

            <div class="col-20 v-center pt-1">
                <p class="text-center">Book a Book Milano</p>
            </div>
        </div>
    </div>

    <!-- SECTION 01 INTRO QUOTE -->
    <div class="section-01 pt-4 pb-4 text-white">
        <div class="grid">
            <h2 class="text-1 text-center">Roberta Zanlucchi nata a Trento, Italia nel 1965.</h2>
            <p class="text-2 text-center justified-text">"Sono una scrittrice appassionata e desidero condividere con voi
                le mie storie e il mio mondo creativo"</p>
        </div>
    </div>

    <!-- SECTION 02 BOOKS -->
    <div id="libri"></div>
    <div class="section-02 pt-4 pb-4">

        <!-- MEDIA TEXT 01 -->
        <div class="grid pb-4">
            <div class="col-40">
                <img src="<?php echo get_stylesheet_directory_uri();?>/media/libro-quadrato-le-stelle-guardiane.jpg" class="img-res" alt="libro le stelle guardiane">
            </div>
            <div class="col-40 v-center">
                <h2 class="text-1">Le stelle guardiane.</h2>
                <p class="text-3 justified-text">Il suo primo romanzo “Le stelle guardiane” offre uno sguardo sugli anni difficili
                    degli anni Sessanta, visto con gli occhi di un bambino migrante.
                    Una buona parte dei lavoratori italiani si trovarono costretti a lasciare l’Italia in cerca di
                    migliori opportunità, molti verso la Svizzera, dove trovarono ad accoglierli disagi e leggi molto
                    dure soprattutto verso i bambini.
                </p>
                <h3 class="text-3 pt-1">Edito da Bookabook Milano</h3>
            </div>
        </div>

        <!-- MEDIA TEXT 02 -->
        <div class="grid">
            <div class="col-40 v-center">
                <h2 class="text-1">Ottavia.</h2>
                <p class="text-3 justified-text">Il secondo romanzo “Ottavia” racconta la storia di un amore vissuto a cavallo tra
                    l’avvicinarsi della Seconda guerra mondiale e la sua conclusione.
                    Un amore sincero, giovanile e puro, ma prepotente e discutibile per quell’epoca.
                </p>
                <h3 class="text-3 pt-1">Edito da Michael Edizioni Treviso</h3>
            </div>

            <div class="col-40">
                <img src="<?php echo get_stylesheet_directory_uri();?>/media/libro-quadrato-ottavia.jpg" class="img-res" alt="libro ottavia">
            </div>
        </div>
    </div>

    <!-- SECTION 03 QUOTE -->
    <div class="section-03 pt-4 pb-4 text-white">

        <!-- MEDIA TEXT 03 -->
        <div id="media-text-03" class="grid mt-1 mb-1">

            <!-- ABOVE QUOTE POS : ABSOLUTE -->
            <div id="media-text-03-quote" class="text-center">
                <p class="text-3 ">"Coloro che sognano di giorno sanno molte cose
                    che sfuggono a chi sogna soltanto di notte".
                </p>
                <h4>- Edgar Allan Poe -</h4>
            </div>

            <!-- DUMMY LEFT COL x DISPLAY FLEX -->
            <div class="col-40"></div>

            <!-- RIGHT COL x DISPLAY FLEX -->
            <div class="col-40">
                <img src="<?php echo get_stylesheet_directory_uri();?>/media/macchina-da-scrivere-su-desk.jpg" class="img-res" alt="macchina da scrivere">
            </div>


        </div>
    </div>

    <!-- SECTION-04 BEHIND BOOKS -->
    <div class="section-04 pt-4 pb-4">
        <!-- GRID HEADINGS -->
        <div class="grid">
            <div class="col-30">
                <div>
                    <h3 class="text-2">DIETRO I LIBRI</h3>
                    <p class="text-3">"COME CREO LA MIA STORIA"</p>
                </div>
            </div>
            <div class="col-50">
                <div class="text-center">
                    <h3 class="text-2">“L’ispirazione non dà preavvisi.“</h3>
                    <p class="text-3">(Gabriel García Márquez)</p>
                </div>
            </div>
        </div>

        <!-- GRID MEDIA TEXT -->
        <div class="grid mt-1">
            <div class="col-30">
                <div>
                    <img id="flowers" class="img-res" src="<?php echo get_stylesheet_directory_uri();?>/media/flowers.jpg" alt="fiori">
                </div>
            </div>
            <div class="col-50 v-center">
                <div>
                    <h3>Inspirazione.</h3>
                    <p class="justified-text">Nulla di più vero.<br>
                        Posso in quel momento essere lontano anni luce dal pensiero della scrittura, magari
                        sto sbucciando una mela.<br><br>
                        Ma qualcosa si impiglia nel mio cervello, un’idea, una visione.<br>
                        Porto con me quel frammento come fosse una fiammella di una candela, riparandola dai pensieri
                        quotidiani.<br><br>
                        Forse è una storia. Forse rimarrà solo un’idea.<br>
                        La corteggio come fosse una persona da conoscere, voglio vedere se io e lei siamo
                        compatibili.<br><br>
                        Cosa mi ispira... a volte guardo le persone e penso che sarebbero perfette in qualche libro, a
                        volte ascolto i fatti veri della vita che qualcuno mi racconta o che leggo da qualche
                        parte.<br><br>
                        Penso che possa venire da qualsiasi cosa in realtà risvegli un interesse, anche una sola parola
                        può mettere in moto la voglia di raccontare.</p>
                </div>
                <div>
                    <h3 class="mt-2">Scrittura.</h3>
                    <p class="justified-text">Lo scrivere ha i suoi momenti.<br>
                        Spesso sono quelli sbagliati, quando hai troppi impegni e dovresti essere magari in uffici o dal
                        commercialista.<br><br>
                        È comunque qualcosa che deve trovare sfogo, e allora basta un foglietto spiegazzato, un quaderno
                        acquistato al volo (l’ennesimo...).<br><br>
                        Ho bisogno di vedere qualcosa di scritto, qualcosa che comincia.<br><br>
                        Quel frammento di pensiero prova a diventare storia, a volte supera delle barriere invisibili,
                        mi permette di essere raccontato.</p>
                </div>
                <div>
                    <h3 class="mt-2">Revisione.</h3>
                    <p class="justified-text">Chi mi vuole bene lo sa.<br><br>
                        È il momento dell’euforia e forse allo stesso tempo della tristezza.<br>
                        Come un figlio che vedi cresciuto e sai che andrà per la sua strada.<br><br>
                        La revisione ruba tempo, a volte mi fa soffrire.<br><br>
                        Come cercare quel vecchio maglione adorato e non riuscire a trovarlo.
                        Le parole sono così, a volte si nascondono.</p>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>