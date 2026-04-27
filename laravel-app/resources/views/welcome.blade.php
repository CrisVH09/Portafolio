<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portafolio | Tu Nombre</title>
        <meta name="description" content="Portafolio personal hecho con Laravel.">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="header-row">
                    <a class="logo" href="/">Tu Nombre</a>
                    <nav class="nav">
                        <a href="#inicio">Inicio</a>
                        <a href="#proyectos">Proyectos</a>
                        <a href="#sobre-mi">Sobre mi</a>
                        <a href="#contacto">Contacto</a>
                    </nav>
                </div>
            </div>
        </header>

        <main>
            <section class="hero" id="inicio">
                <div class="container">
                    <h1>Hola, soy Tu Nombre</h1>
                    <p class="hero-text">
                        Soy desarrollador web y este es mi portafolio personal. Aqui puedes poner una
                        descripcion breve sobre ti, tu experiencia y el tipo de proyectos que haces.
                    </p>
                    <div class="hero-actions">
                        <a class="button button-primary" href="#proyectos">Ver proyectos</a>
                        <a class="button button-secondary" href="#contacto">Contactarme</a>
                    </div>
                </div>
            </section>

            <section class="section" id="proyectos">
                <div class="container">
                    <h2>Proyectos</h2>
                    <div class="cards">
                        <article class="card">
                            <h3>Proyecto 1</h3>
                            <p>Descripcion breve del proyecto, tecnologias usadas y resultado principal.</p>
                        </article>

                        <article class="card">
                            <h3>Proyecto 2</h3>
                            <p>Descripcion breve del proyecto, tecnologias usadas y problema que resolvio.</p>
                        </article>

                        <article class="card">
                            <h3>Proyecto 3</h3>
                            <p>Descripcion breve del proyecto, tecnologias usadas y valor que aporto.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="section section-light" id="sobre-mi">
                <div class="container">
                    <h2>Sobre mi</h2>
                    <p>
                        Aqui puedes escribir quien eres, que tecnologias manejas, que experiencia tienes
                        y que tipo de trabajo estas buscando o ofreciendo.
                    </p>
                </div>
            </section>

            <section class="section" id="contacto">
                <div class="container">
                    <h2>Contacto</h2>
                    <p>Puedes reemplazar este texto por tu correo, telefono, GitHub o LinkedIn.</p>
                    <p class="contact-link">
                        <a href="mailto:tu-correo@ejemplo.com">tu-correo@ejemplo.com</a>
                    </p>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="container">
                <p>&copy; <span data-year></span> Tu Nombre. Todos los derechos reservados.</p>
            </div>
        </footer>
    </body>
</html>
