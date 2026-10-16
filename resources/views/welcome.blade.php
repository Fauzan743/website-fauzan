<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fauzan Maulana, S.Tr.T. | Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #0b0f19;
            color: #f5f5f5;
            line-height: 1.6;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: auto;
        }

        /* =========================
           NAVBAR
        ========================= */

        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(11, 15, 25, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #1f2937;
        }

        .nav-content {
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
        }

        .logo span {
            color: #ff4d43;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            list-style: none;
        }

        .nav-links a {
            color: #cbd5e1;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: #ff4d43;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 60px;
            align-items: center;
        }

        .hello {
            color: #ff4d43;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .hero h1 {
            font-size: clamp(42px, 7vw, 72px);
            line-height: 1.05;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #ff4d43;
        }

        .hero p {
            color: #94a3b8;
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 13px 24px;
            border-radius: 8px;
            border: 1px solid #ff4d43;
            transition: 0.3s;
            cursor: pointer;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: #ff4d43;
            color: white;
        }

        .btn-primary:hover {
            background: #e63229;
            transform: translateY(-2px);
        }

        .btn-outline {
            color: #ff4d43;
        }

        .btn-outline:hover {
            background: #ff4d43;
            color: white;
            transform: translateY(-2px);
        }

        .btn-whatsapp {
            background: #25D366;
            color: white;
            border-color: #25D366;
        }

        .btn-whatsapp:hover {
            background: #128C7E;
            transform: translateY(-2px);
        }

        /* =========================
           FOTO PROFIL
        ========================= */

        .photo-wrapper {
            display: flex;
            justify-content: center;
        }

        .photo {
            width: 310px;
            height: 310px;
            border-radius: 50%;
            border: 4px solid #ff4d43;
            background: #111827;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            box-shadow: 0 0 50px rgba(255, 77, 67, 0.15);
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 40%;
            display: block;
        }

        /* =========================
           SECTION
        ========================= */

        section {
            padding: 100px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .section-title p {
            color: #94a3b8;
        }

        /* =========================
           ABOUT
        ========================= */

        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .card {
            background: #111827;
            border: 1px solid #1f2937;
            border-radius: 15px;
            padding: 30px;
        }

        .card h3 {
            margin-bottom: 20px;
            font-size: 22px;
        }

        .card p {
            color: #94a3b8;
        }

        .biodata {
            display: grid;
            gap: 14px;
        }

        .biodata div {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            border-bottom: 1px solid #1f2937;
            padding-bottom: 10px;
        }

        .biodata span:first-child {
            color: #94a3b8;
        }

        .biodata strong {
            text-align: right;
        }

        /* =========================
           SKILLS
        ========================= */

        .skills {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .skill {
            background: #111827;
            border: 1px solid #1f2937;
            padding: 25px;
            border-radius: 12px;
            transition: 0.3s;
        }

        .skill:hover {
            transform: translateY(-5px);
            border-color: #ff4d43;
        }

        .skill h3 {
            margin-bottom: 8px;
        }

        .skill p {
            color: #94a3b8;
        }

        /* =========================
           PROJECT
        ========================= */

        .projects {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .project {
            background: #111827;
            border: 1px solid #1f2937;
            border-radius: 15px;
            padding: 30px;
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }

        .project:hover {
            transform: translateY(-5px);
            border-color: #ff4d43;
        }

        .project-number {
            color: #ff4d43;
            font-size: 14px;
            font-weight: bold;
        }

        .project h3 {
            font-size: 23px;
            margin: 10px 0;
        }

        .project p {
            color: #94a3b8;
            flex-grow: 1;
        }

        .tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .tag {
            background: #1f2937;
            color: #cbd5e1;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 13px;
        }

        .project-link {
            margin-top: 20px;
            padding: 10px 20px;
            background: #ff4d43;
            color: white;
            border-radius: 8px;
            text-align: center;
            transition: 0.3s;
            display: inline-block;
        }

        .project-link:hover {
            background: #e63229;
            transform: translateY(-2px);
        }

        /* =========================
           CONTACT
        ========================= */

        .contact {
            text-align: center;
        }

        .contact p {
            color: #94a3b8;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .contact-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            border-top: 1px solid #1f2937;
            padding: 25px 0;
            text-align: center;
            color: #64748b;
        }

        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .nav-links {
                display: none;
            }

            .hero {
                padding: 70px 0;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .buttons {
                justify-content: center;
            }

            .photo-wrapper {
                order: -1;
            }

            .photo {
                width: 230px;
                height: 230px;
            }

            .about,
            .skills,
            .projects {
                grid-template-columns: 1fr;
            }

            .biodata div {
                flex-direction: column;
                gap: 3px;
            }

            .biodata strong {
                text-align: left;
            }

            section {
                padding: 70px 0;
            }

            .contact-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    <nav>
        <div class="container nav-content">

            <div class="logo">
                Fauzan Maulana, S.Tr.T<span>.</span>
            </div>

            <ul class="nav-links">
                <li>
                    <a href="#home">Home</a>
                </li>

                <li>
                    <a href="#about">Tentang</a>
                </li>

                <li>
                    <a href="#skills">Keahlian</a>
                </li>

                <li>
                    <a href="#projects">Project</a>
                </li>

                <li>
                    <a href="#contact">Kontak</a>
                </li>
            </ul>

        </div>
    </nav>


    <!-- =========================
         HERO
    ========================= -->

    <section class="hero" id="home">

        <div class="container hero-content">

            <div>

                <div class="hello">
                    Halo, saya
                </div>

                <h1>
                    Fauzan Maulana,<br>
                    <span>S.Tr.T.</span>
                </h1>

                <p>
                    Selamat datang di website portfolio pribadi saya.
                    Jelajahi keahlian, project, dan pengalaman saya di bidang teknologi.
                </p>

                <div class="buttons">

                    <a href="#projects" class="btn btn-primary">
                        Lihat Project
                    </a>

                    <a href="#contact" class="btn btn-outline">
                        Hubungi Saya
                    </a>

                </div>

            </div>


            <!-- FOTO FAUZAN -->

            <div class="photo-wrapper">

                <div class="photo">

                    <img
                        src="/images/foto-fauzan.jpg"
                        alt="Foto Fauzan Maulana, S.Tr.T."
                    >

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         TENTANG SAYA
    ========================= -->

    <section id="about">

        <div class="container">

            <div class="section-title">

                <h2>Tentang Saya</h2>

                <p>
                    Profil dan informasi singkat tentang saya.
                </p>

            </div>


            <div class="about">

                <div class="card">

                    <h3>Profil</h3>

                    <p>
                        Saya adalah lulusan <strong>Politeknik Negeri Lhokseumawe</strong>, 
                        Jurusan <strong>Teknologi Informasi dan Komputer</strong>, Program Studi 
                        <strong>Teknologi Rekayasa Komputer dan Jaringan</strong>, yang memiliki 
                        passion dalam pengembangan <strong>aplikasi mobile</strong>, 
                        <strong>website</strong>, dan <strong>jaringan komputer</strong>.
                    </p>

                    <br>

                    <p>
                        Dengan latar belakang pendidikan di bidang teknologi informasi, 
                        saya berkomitmen untuk terus mengembangkan skill dan menciptakan 
                        solusi teknologi yang inovatif. Saya percaya bahwa teknologi yang 
                        baik adalah teknologi yang dapat memberikan nilai tambah dan 
                        memudahkan kehidupan pengguna.
                    </p>

                </div>


                <div class="card">

                    <h3>Biodata</h3>

                    <div class="biodata">

                        <div>
                            <span>Nama</span>
                            <strong>Fauzan Maulana, S.Tr.T.</strong>
                        </div>

                        <div>
                            <span>Pendidikan</span>
                            <strong>
                                Politeknik Negeri Lhokseumawe
                            </strong>
                        </div>

                        <div>
                            <span>Jurusan</span>
                            <strong>Teknologi Informasi dan Komputer</strong>
                        </div>

                        <div>
                            <span>Program Studi</span>
                            <strong>Teknologi Rekayasa Komputer Jaringan</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         KEAHLIAN
    ========================= -->

    <section id="skills">

        <div class="container">

            <div class="section-title">

                <h2>Keahlian</h2>

                <p>
                    Beberapa bidang yang saya pelajari.
                </p>

            </div>


            <div class="skills">

                <div class="skill">

                   <h3>🌐 Computer Networking</h3>

                    <p>
                        Konfigurasi jaringan, troubleshooting,
                        dan pemahaman dasar infrastruktur jaringan.
                    </p>

                </div>


                <div class="skill">

                    <h3>📱 Mobile App Development</h3>

                    <p>
                        Pengembangan aplikasi mobile menggunakan
                        Flutter dan teknologi backend berbasis cloud.
                    </p>

                </div>


                <div class="skill">

                    <h3>💻 Web Development</h3>

                    <p>
                        Pengembangan website menggunakan framework Laravel.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         PROJECT
    ========================= -->

    <section id="projects">

        <div class="container">

            <div class="section-title">

                <h2>Project</h2>

                <p>
                    Beberapa project yang pernah saya kerjakan.
                </p>

            </div>


            <div class="projects">

                <div class="project">

                    <div class="project-number">
                        PROJECT 01
                    </div>

                    <h3>
                        Aplikasi Manajemen Inventaris Laboratorium
                    </h3>

                    <p>
                        Aplikasi mobile untuk membantu pengelolaan inventaris laboratorium
                        secara <strong>real-time</strong> di <strong>Jurusan Teknologi Informasi dan Komputer</strong>,
                        <strong>Politeknik Negeri Lhokseumawe</strong>.
                    </p>

                    <div class="tags">

                     <span class="tag">Flutter</span>
<span class="tag">Cloud</span>
<span class="tag">Real-Time</span>

                    </div>

                    <a href="https://aplikasi-inventaris-cb59a.web.app" 
                       target="_blank" 
                       class="project-link">
                       Lihat Project →
                    </a>

                </div>


                <div class="project">

                    <div class="project-number">
                        PROJECT 02
                    </div>

                    <h3>
                        Aplikasi Pendeteksi Link Phising
                    </h3>

                    <p>
                        Aplikasi deteksi phishing yang menganalisis URL untuk mengidentifikasi 
                        kemungkinan website phishing menggunakan <strong>machine learning</strong> 
                        dengan algoritma Random Forest.
                    </p>

                    <div class="tags">

                        <span class="tag">
                            Python
                        </span>

                        <span class="tag">
                            Machine Learning
                        </span>

                        <span class="tag">
                            Random Forest
                        </span>

                    </div>

                    <a href="https://phising-b55a5.web.app/" 
                       target="_blank" 
                       class="project-link">
                       Lihat Project →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         KONTAK
    ========================= -->

    <section id="contact">

        <div class="container contact">

            <div class="section-title">

                <h2>Hubungi Saya</h2>

                <p>
                    Tertarik untuk berdiskusi atau bekerja sama? 
                    Silakan hubungi saya melalui email atau WhatsApp.
                </p>

            </div>

            <div class="contact-buttons">
                <a
                    href="mailto:fauzan78888@gmail.com"
                    class="btn btn-primary"
                >
                    📧 Email 
                </a>

                <a
                    href="https://wa.me/6282158112230"
                    target="_blank"
                    class="btn btn-whatsapp"
                >
                    💬 WhatsApp
                </a>
            </div>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================= -->

    <footer>

        <div class="container">

            © 2026 Fauzan Maulana, S.Tr.T.
            All Rights Reserved.

        </div>

    </footer>

</body>
</html>