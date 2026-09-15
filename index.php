<?php
$jaar = date("Y");
$opleiding = "Software Development";
$curioUrl = "https://www.curio.nl/mbo/ict/ict/software-developer";
$aanmeldenUrl = "https://www.curio.nl/mbo/aanmelden";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ontdek de opleiding Software Development bij Curio. Leer programmeren, apps en software ontwikkelen en werk aan echte projecten.">
    <title><?= $opleiding ?> | Curio</title>

    <style>
        :root{
            --blue:#142b4a;
            --green:#65b846;
            --purple:#60449a;
            --light:#f4f7f5;
            --white:#fff;
            --text:#263238;
            --muted:#65727b;
        }

        *{box-sizing:border-box;margin:0;padding:0}
        html{scroll-behavior:smooth}
        body{font-family:Arial,sans-serif;color:var(--text);background:var(--light);line-height:1.6}
        a{text-decoration:none;color:inherit}
        .container{width:min(1150px,92%);margin:auto}

        /* Navigatie */
        header{
            background:var(--white);
            position:sticky;
            top:0;
            z-index:10;
            box-shadow:0 2px 15px #0001
        }

        nav{
            min-height:72px;
            display:flex;
            align-items:center;
            justify-content:space-between;
            gap:25px
        }

        .logo{font-size:28px;font-weight:900;color:var(--blue)}
        .logo span{color:var(--green)}
        .nav-links{display:flex;gap:25px;list-style:none;font-weight:700}
        .nav-links a:hover{color:var(--green)}
        .menu{display:none;font-size:28px;cursor:pointer}

        .button{
            display:inline-block;
            background:var(--green);
            color:#102414;
            padding:13px 22px;
            border-radius:8px;
            font-weight:800;
            transition:.2s
        }

        .button:hover{transform:translateY(-2px);filter:brightness(.95)}
        .button.dark{background:var(--blue);color:var(--white)}

        /* Hero */
        .hero{
            background:linear-gradient(135deg,var(--blue),#213d61);
            color:var(--white);
            padding:100px 0
        }

        .hero-grid{
            display:grid;
            grid-template-columns:1.1fr .9fr;
            gap:60px;
            align-items:center
        }

        .label{
            color:var(--green);
            text-transform:uppercase;
            letter-spacing:2px;
            font-weight:800;
            font-size:14px
        }

        h1{
            font-size:clamp(45px,7vw,76px);
            line-height:1;
            margin:15px 0 25px
        }

        h1 span{color:var(--green)}
        .hero p{font-size:19px;max-width:650px;margin-bottom:30px;color:#e7edf2}

        /* Code visual */
        .code-box{
            background:#0c1828;
            border-radius:16px;
            padding:25px;
            box-shadow:0 20px 50px #0004;
            font-family:Consolas,monospace;
            color:#dce7f1;
            font-size:15px
        }

        .code-top{color:#75879b;margin-bottom:18px}
        .code-green{color:#78d353}
        .code-purple{color:#c6a7ff}
        .code-blue{color:#77bdfb}
        .code-comment{color:#6d7e8e}

        /* Algemene secties */
        section{padding:85px 0}
        .title{text-align:center;max-width:700px;margin:0 auto 45px}
        .title h2{font-size:40px;color:var(--blue);margin-bottom:10px}
        .title p{color:var(--muted)}

        .cards{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:22px
        }

        .card{
            background:var(--white);
            padding:30px;
            border-radius:14px;
            box-shadow:0 5px 20px #142b4a12;
            border-top:4px solid var(--green)
        }

        .icon{
            font-size:34px;
            margin-bottom:15px
        }

        .card h3{color:var(--blue);margin-bottom:8px}
        .card p{color:var(--muted)}

        /* Skills */
        .skills{background:var(--white)}
        .skill-grid{
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:20px
        }

        .skill{
            padding:24px;
            border:1px solid #dce4df;
            border-radius:12px
        }

        .skill strong{display:block;color:var(--blue);margin-bottom:5px}

        /* Project */
        .project{
            background:var(--purple);
            color:var(--white)
        }

        .project-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:50px;
            align-items:center
        }

        .project h2{font-size:40px;margin-bottom:15px}
        .project p{color:#eee;margin-bottom:20px}

        .terminal{
            background:#10141b;
            padding:25px;
            border-radius:14px;
            font-family:Consolas,monospace;
            color:#b8e7a6
        }

        /* Info */
        .info-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:18px
        }

        .info{
            background:var(--white);
            padding:25px;
            border-radius:12px;
            text-align:center
        }

        .info strong{display:block;font-size:28px;color:var(--blue)}
        .info span{color:var(--muted)}

        /* FAQ */
        .faq{background:var(--white)}
        .faq-wrap{max-width:850px;margin:auto}
        .faq-item{border-bottom:1px solid #ddd}
        .question{
            width:100%;
            padding:20px 5px;
            background:none;
            border:0;
            display:flex;
            justify-content:space-between;
            text-align:left;
            font-size:17px;
            font-weight:800;
            color:var(--blue);
            cursor:pointer
        }

        .answer{
            display:none;
            padding:0 5px 20px;
            color:var(--muted)
        }

        .faq-item.active .answer{display:block}
        .faq-item.active .question span{transform:rotate(180deg)}

        /* CTA */
        .cta{
            text-align:center;
            background:var(--blue);
            color:var(--white);
            padding:80px 20px
        }

        .cta h2{font-size:45px;margin-bottom:10px}
        .cta p{color:#d9e2e9;margin-bottom:25px}

        /* Footer */
        footer{background:#0b1d32;color:var(--white);padding:30px 0}
        .footer{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:20px
        }

        .footer small{color:#b9c5ce}

        /* Responsive */
        @media(max-width:900px){
            .nav-links{display:none}
            .nav-links.open{
                display:flex;
                position:absolute;
                top:72px;
                left:0;
                right:0;
                background:var(--white);
                padding:25px;
                flex-direction:column
            }

            .menu{display:block}
            .nav-button{display:none}
            .hero-grid,.project-grid{grid-template-columns:1fr}
            .cards{grid-template-columns:1fr 1fr}
            .info-grid{grid-template-columns:1fr 1fr}
        }

        @media(max-width:600px){
            .hero{padding:70px 0}
            section{padding:60px 0}
            .cards,.skill-grid,.info-grid{grid-template-columns:1fr}
            .title h2,.project h2{font-size:32px}
            .cta h2{font-size:35px}
            .footer{flex-direction:column;text-align:center}
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <nav>
            <a href="#" class="logo">curio<span>.</span></a>

            <ul class="nav-links">
                <li><a href="#opleiding">Opleiding</a></li>
                <li><a href="#leren">Wat leer je?</a></li>
                <li><a href="#projecten">Projecten</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>

            <a class="button nav-button" href="<?= $aanmeldenUrl ?>" target="_blank" rel="noopener">
                Aanmelden
            </a>

            <div class="menu">☰</div>
        </nav>
    </div>
</header>

<main>

<section class="hero" id="opleiding">
    <div class="container hero-grid">

        <div>
            <div class="label">Curio · ICT · niveau 4</div>

            <h1>Maak ideeën<br><span>werkend.</span></h1>

            <p>
                Ontdek Software Development: leer programmeren, apps en software
                ontwikkelen en bouw oplossingen voor echte problemen.
            </p>

            <a class="button" href="#leren">Ontdek de opleiding ↓</a>
        </div>

        <div class="code-box">
            <div class="code-top">// jouw eerste stap als developer</div>
            <div><span class="code-purple">function</span> <span class="code-blue">createFuture</span>() {</div>
            <div>&nbsp;&nbsp;<span class="code-purple">const</span> skills = [</div>
            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-green">"PHP"</span>, <span class="code-green">"JavaScript"</span>,</div>
            <div>&nbsp;&nbsp;&nbsp;&nbsp;<span class="code-green">"HTML"</span>, <span class="code-green">"CSS"</span></div>
            <div>&nbsp;&nbsp;];</div>
            <div>&nbsp;&nbsp;<span class="code-purple">return</span> skills;</div>
            <div>}</div>
            <br>
            <div class="code-comment">// build. test. improve.</div>
        </div>

    </div>
</section>

<section>
    <div class="container">

        <div class="title">
            <h2>Waarom Software Development?</h2>
            <p>
                Je leert niet alleen programmeren. Je leert problemen analyseren,
                oplossingen bouwen en software testen en verbeteren.
            </p>
        </div>

        <div class="cards">
            <article class="card">
                <div class="icon">💻</div>
                <h3>Programmeren</h3>
                <p>Leer werken met programmeertalen zoals PHP en JavaScript.</p>
            </article>

            <article class="card">
                <div class="icon">📱</div>
                <h3>Apps & software</h3>
                <p>Ontwikkel apps, websites en andere digitale toepassingen.</p>
            </article>

            <article class="card">
                <div class="icon">🧩</div>
                <h3>Problemen oplossen</h3>
                <p>Werk samen aan oplossingen die aansluiten bij een klant of opdracht.</p>
            </article>
        </div>

    </div>
</section>

<section class="skills" id="leren">
    <div class="container">

        <div class="title">
            <h2>Wat leer je?</h2>
            <p>
                Bij Curio werk je veel met projecten en leer je software ontwikkelen
                door het in de praktijk toe te passen.
            </p>
        </div>

        <div class="skill-grid">
            <div class="skill">
                <strong>01 · Applicaties ontwikkelen</strong>
                Apps en software ontwerpen, bouwen en verbeteren.
            </div>

            <div class="skill">
                <strong>02 · Webdevelopment</strong>
                Websites ontwikkelen met HTML, CSS, JavaScript en PHP.
            </div>

            <div class="skill">
                <strong>03 · Frameworks</strong>
                Kennismaken met frameworks zoals Laravel, Vue, React en Bootstrap.
            </div>

            <div class="skill">
                <strong>04 · Testen & veiligheid</strong>
                Software controleren en aandacht besteden aan veilige digitale producten.
            </div>
        </div>

    </div>
</section>

<section class="project" id="projecten">
    <div class="container project-grid">

        <div>
            <div class="label">Leren door te doen</div>
            <h2>Bouw echte projecten.</h2>
            <p>
                Tijdens de opleiding werk je aan projecten. Samen met andere studenten
                zet je projecten op en ontwikkel je apps en software.
            </p>
            <a class="button" href="<?= $curioUrl ?>" target="_blank" rel="noopener">
                Bekijk de opleiding bij Curio →
            </a>
        </div>

        <div class="terminal">
            <div>$ git init project</div>
            <div>$ code app.php</div>
            <div>$ test --all</div>
            <br>
            <div>✓ code werkt</div>
            <div>✓ probleem opgelost</div>
            <div>✓ klaar voor de volgende stap</div>
        </div>

    </div>
</section>

<section>
    <div class="container">

        <div class="title">
            <h2>Opleiding in het kort</h2>
            <p>De belangrijkste informatie overzichtelijk bij elkaar.</p>
        </div>

        <div class="info-grid">
            <div class="info">
                <strong>4</strong>
                <span>Niveau</span>
            </div>

            <div class="info">
                <strong>3–4</strong>
                <span>Jaar</span>
            </div>

            <div class="info">
                <strong>BOL</strong>
                <span>Leerweg</span>
            </div>

            <div class="info">
                <strong>BBL</strong>
                <span>Leerweg</span>
            </div>
        </div>

    </div>
</section>

<section class="faq" id="faq">
    <div class="container">

        <div class="title">
            <h2>Veelgestelde vragen</h2>
            <p>Twijfel je of Software Development bij je past?</p>
        </div>

        <div class="faq-wrap">

            <div class="faq-item">
                <button class="question">
                    Waar kan ik de opleiding volgen?
                    <span>⌄</span>
                </button>
                <div class="answer">
                    De opleiding Software developer is volgens Curio te volgen in
                    Breda en Bergen op Zoom.
                </div>
            </div>

            <div class="faq-item">
                <button class="question">
                    Welke leerwegen zijn er?
                    <span>⌄</span>
                </button>
                <div class="answer">
                    Curio biedt de opleiding aan als BOL en BBL.
                </div>
            </div>

            <div class="faq-item">
                <button class="question">
                    Wat kun je na de opleiding?
                    <span>⌄</span>
                </button>
                <div class="answer">
                    Je kunt bijvoorbeeld aan de slag bij ICT-, software development-
                    of consultancybedrijven. Ook kun je doorstuderen aan het hbo.
                </div>
            </div>

            <div class="faq-item">
                <button class="question">
                    Welke programmeertalen leer je?
                    <span>⌄</span>
                </button>
                <div class="answer">
                    Curio noemt onder andere C#, PHP en JavaScript.
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <h2>Klaar om jouw code te schrijven?</h2>
        <p>Bekijk de officiële opleidingsinformatie en ontdek of Software Development bij jou past.</p>

        <a class="button" href="<?= $aanmeldenUrl ?>" target="_blank" rel="noopener">
            Bekijk aanmelden bij Curio →
        </a>
    </div>
</section>

</main>

<footer>
    <div class="container footer">
        <div class="logo">curio<span>.</span></div>
        <small>© <?= $jaar ?> · Website voor de opleiding Software Development</small>
    </div>
</footer>

<script>
const menu = document.querySelector(".menu");
const nav = document.querySelector(".nav-links");

menu.onclick = () => nav.classList.toggle("open");

document.querySelectorAll(".question").forEach(button => {
    button.onclick = () => {
        button.parentElement.classList.toggle("active");
    };
});

document.querySelectorAll(".nav-links a").forEach(link => {
    link.onclick = () => nav.classList.remove("open");
});
</script>

</body>
</html>
