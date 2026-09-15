<?php
// Dynamische data (voorbeeld – pas aan naar jouw gegevens)
$studentNaam = "Shiwan Garib";
$leerjaar = "2e jaars";
$opleiding = "Software Developer";
$schooljaar = "2026-2027";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Developer | Curio – Open Dag</title>
    <meta name="description" content="Ontdek de opleiding Software Developer bij Curio. Praktijkgericht, modern en vol mogelijkheden.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Vaste Curio-template bovenaan (zoals in het moduleboekje) -->
    <header class="curio-header">
        <div class="curio-header__inner">
            <div class="curio-header__logo">
                <span class="curio-logo">curio</span>
            </div>
            <div class="curio-header__info">
                <p class="curio-header__made">Gemaakt door <strong><?php echo htmlspecialchars($studentNaam); ?></strong></p>
                <p class="curio-header__year"><?php echo htmlspecialchars($leerjaar); ?> · <?php echo htmlspecialchars($schooljaar); ?></p>
            </div>
        </div>
    </header>

    <!-- Navigatie -->
    <nav class="main-nav" id="mainNav">
        <div class="container nav-inner">
            <a href="#top" class="nav-logo">Software Developer</a>
            <button class="nav-toggle" aria-label="Menu openen" id="navToggle">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="#opleiding">Opleiding</a></li>
                <li><a href="#vakken">Vakken</a></li>
                <li><a href="#rooster">Rooster & Blokken</a></li>
                <li><a href="#toekomst">Na de opleiding</a></li>
                <li><a href="#sfeer">Sfeer</a></li>
            </ul>
        </div>
    </nav>

    <main id="top">

        <!-- Hero -->
        <section class="hero">
            <div class="container hero-content">
                <h1>Word Software Developer bij Curio</h1>
                <p class="hero-lead">Praktijkgericht leren, moderne technieken en volop ruimte om te groeien. Ontdek wat de opleiding Software Development jou te bieden heeft.</p>
                <a href="#opleiding" class="btn btn-primary">Ontdek de opleiding</a>
            </div>
        </section>

        <!-- Over de opleiding -->
        <section id="opleiding" class="section">
            <div class="container">
                <h2>Over de opleiding</h2>
                <div class="grid-2">
                    <div>
                        <p>Bij de opleiding <strong>Software Developer</strong> van Curio leer je hoe je moderne webapplicaties, apps en systemen bouwt. Je werkt met actuele technologieën zoals HTML, CSS, JavaScript, PHP, databases en versiebeheer met Git.</p>
                        <p>De opleiding is sterk praktijkgericht: je werkt aan echte projecten, leert samenwerken in teams en krijgt de kans om te versnellen als je dat wilt.</p>
                        <p>Aspirant-studenten waarderen vooral de sfeer op de afdeling en de betrokkenheid van docenten en medestudenten.</p>
                    </div>
                    <div class="card highlight-card">
                        <h3>In het kort</h3>
                        <ul class="checklist">
                            <li>Niveau 4 MBO</li>
                            <li>Duur: 3 of 4 jaar (versnellen mogelijk)</li>
                            <li>Praktijkgericht & projectmatig</li>
                            <li>Focus op webdevelopment & software</li>
                            <li>Goede doorstroom naar hbo of werk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vakken -->
        <section id="vakken" class="section section-alt">
            <div class="container">
                <h2>Vakken in het eerste jaar</h2>
                <p class="section-intro">In het eerste jaar leg je een stevige basis. Dit zijn de belangrijkste vakken:</p>
                <div class="cards-grid">
                    <article class="card">
                        <h3>Web Development</h3>
                        <p>HTML, CSS, responsive design, flexbox, grid en de basis van JavaScript. Je bouwt je eerste professionele websites.</p>
                    </article>
                    <article class="card">
                        <h3>Programmeren</h3>
                        <p>Logisch denken, algoritmes en de basis van PHP. Je leert code schrijven die werkt en onderhoudbaar is.</p>
                    </article>
                    <article class="card">
                        <h3>Databases</h3>
                        <p>SQL, relationele databases en hoe je data netjes opslaat en ophaalt voor je applicaties.</p>
                    </article>
                    <article class="card">
                        <h3>Versiebeheer & Git</h3>
                        <p>Samenwerken aan code met Git en GitHub. Commits, branches en het oplossen van conflicten.</p>
                    </article>
                    <article class="card">
                        <h3>Projectmatig werken</h3>
                        <p>Scrum-achtige methodes, plannen, ontwerpen (wireframes) en opleveren van werkende producten.</p>
                    </article>
                    <article class="card">
                        <h3>Generieke vakken</h3>
                        <p>Nederlands, Engels, rekenen en loopbaan & burgerschap – belangrijk voor je diploma en verdere carrière.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Rooster & Blokken -->
        <section id="rooster" class="section">
            <div class="container">
                <h2>Rooster, blokken & versnellen</h2>
                <div class="grid-2">
                    <div>
                        <h3>Hoe ziet een week eruit?</h3>
                        <p>Een typische week bestaat uit een mix van klassikale lessen, praktijklessen en zelfstandig werken. Je hebt meestal 3 tot 4 dagen school per week, afhankelijk van het blok.</p>
                        <p>Er is voldoende ruimte voor huiswerk en projecten. De docenten begeleiden je actief, maar je leert ook zelfstandig plannen.</p>
                    </div>
                    <div>
                        <h3>Indeling van de blokken</h3>
                        <p>Het schooljaar is opgedeeld in blokken. Elk blok heeft een eigen focus en eindigt met een beoordeling of oplevering.</p>
                        <ul class="simple-list">
                            <li><strong>Blok A & B</strong> – Basis webdevelopment & programmeren</li>
                            <li><strong>Blok C</strong> – Dieper in projecten en PHP</li>
                            <li><strong>Blok D</strong> – Afronding en voorbereiding op stage/werk</li>
                        </ul>
                    </div>
                </div>
                <div class="card info-card">
                    <h3>Versnellen is mogelijk</h3>
                    <p>Heb je al ervaring of leer je snel? In overleg met je docent kun je bepaalde onderdelen versnellen. Zo kun je eerder stage lopen of sneller doorstromen naar het hbo.</p>
                </div>
            </div>
        </section>

        <!-- Wat kun je erna doen -->
        <section id="toekomst" class="section section-alt">
            <div class="container">
                <h2>Wat kun je na deze opleiding?</h2>
                <p class="section-intro">Met een diploma Software Developer heb je volop keuzes:</p>
                <div class="cards-grid three">
                    <article class="card">
                        <h3>Direct aan het werk</h3>
                        <p>Junior webdeveloper, frontend- of backend-developer, applicatiebeheerder of support engineer bij bedrijven in de regio of landelijk.</p>
                    </article>
                    <article class="card">
                        <h3>Doorstromen naar hbo</h3>
                        <p>Veel studenten stromen door naar hbo-opleidingen zoals Informatica, Software Engineering of Business IT & Management.</p>
                    </article>
                    <article class="card">
                        <h3>Zelfstandig verder</h3>
                        <p>Freelance websites bouwen, eigen projecten starten of specialiseren in bijvoorbeeld React, Laravel of mobile development.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Sfeer & groepen -->
        <section id="sfeer" class="section">
            <div class="container">
                <h2>Sfeer op de afdeling</h2>
                <div class="grid-2">
                    <div>
                        <p>De sfeer op de afdeling Software Development is open, behulpzaam en informeel. Studenten helpen elkaar graag en docenten zijn benaderbaar.</p>
                        <p>Je werkt regelmatig in groepen. Dat leert je communiceren, taken verdelen en feedback geven – precies wat je later in het werkveld nodig hebt.</p>
                        <p>Er is aandacht voor zowel de snelle als de iets rustiger lerende student. Iedereen krijgt de kans om te groeien.</p>
                    </div>
                    <div class="card quote-card">
                        <blockquote>
                            “De combinatie van praktijkopdrachten, samenwerken en moderne tools maakt deze opleiding echt leuk. Je ziet meteen resultaat van wat je leert.”
                        </blockquote>
                        <p class="quote-author">— Kailash</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Extra info -->
        <section class="section section-alt">
            <div class="container">
                <h2>Praktische informatie</h2>
                <div class="cards-grid three">
                    <article class="card">
                        <h3>Huiswerk</h3>
                        <p>Je krijgt regelmatig opdrachten mee. De hoeveelheid is haalbaar als je goed plant. Projecten vragen soms meer tijd in de week van oplevering.</p>
                    </article>
                    <article class="card">
                        <h3>Vakanties & planning</h3>
                        <p>De jaarplanning volgt de landelijke schoolvakanties. Exacte data vind je op de Curio-website of via je mentor.</p>
                    </article>
                    <article class="card">
                        <h3>Zak/slaag-regeling</h3>
                        <p>Voor de generieke vakken gelden de landelijke eisen. Je docent legt dit duidelijk uit aan het begin van het jaar.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- Call to action -->
        <section class="cta">
            <div class="container">
                <h2>Kom kijken op een Open Dag</h2>
                <p>Wil je de sfeer zelf ervaren? Kom naar een Open Avond of Open Dag van Curio. Studenten en docenten vertellen je graag meer.</p>
                <a href="https://www.curio.nl/" class="btn btn-primary" target="_blank" rel="noopener">Naar Curio.nl</a>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <p>Deze pagina is gemaakt in het kader van Praktijkopdracht C1 – Open dag-website · Opleiding Software Developer · Curio</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
    