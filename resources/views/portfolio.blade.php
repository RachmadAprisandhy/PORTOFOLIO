<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#102D35">
    <meta name="description" content="Portofolio Rachmad Aprisandhy — Web, Mobile, dan Machine Learning.">
    <title>Rachmad Aprisandhy — IT Generalist</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio-extra.css') }}">
</head>
<body>
    <a class="skip-link" href="#main">Lewati ke konten</a>
    <header class="site-header">
        <a class="brand" href="#home" aria-label="Kembali ke beranda"><span class="brand-mark">I.</span><span>Portofolio</span></a>
        <button class="menu-toggle" aria-expanded="false" aria-controls="site-nav" aria-label="Buka navigasi"><span></span><span></span></button>
        <nav class="nav" id="site-nav" aria-label="Navigasi utama">
            <a href="#tentang">Tentang</a><a href="#karya">Karya</a><a href="#pengalaman">Pengalaman</a><a class="nav-contact" href="#kontak">Mari terhubung <span>↗</span></a>
        </nav>
    </header>

    <main id="main">
        <section class="hero wrap" id="home">
            <div class="hero-copy">
                <p class="eyebrow"><span class="status-dot"></span> TERBUKA UNTUK KOLABORASI</p>
                <h1>Mengembangkan<br>aplikasi <em>yang bermanfaat.</em></h1>
                <p class="hero-text">Halo, saya <strong>Rachmad Aprisandhy</strong> — IT Generalist yang senang menjembatani ide dan teknologi melalui web, mobile, dan machine learning.</p>
                <div class="hero-actions"><a class="button button-dark" href="#karya">Proyek saya <span>↓</span></a><a class="text-link" href="#tentang">Tentang saya <span>↗</span></a></div>
                <div class="hero-meta"><span>FOKUS BIDANG</span><span>WEB · MOBILE · ML</span></div>
            </div>
            <div class="hero-art" aria-label="Ilustrasi abstrak tiga bidang teknologi" role="img">
                <div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div><div class="art-orbit orbit-three"></div>
                <div class="art-core">
                    @if (file_exists(public_path('images/Foto pribadi.jpeg')))
                        <img class="profile-photo" src="{{ asset('images/Foto%20pribadi.jpeg') }}" alt="Foto Rachmad Aprisandhy">
                    @else
                        <span>IT</span><small>GENERALIST</small>
                    @endif
                </div>
                <span class="art-label label-web">&lt;web /&gt;</span><span class="art-label label-mobile">mobile<span>✳</span></span><span class="art-label label-ml">ML<span>⌁</span></span>
                <span class="art-index">01 — 03</span>
            </div>
            <a class="scroll-cue" href="#tentang"><span></span></a>
        </section>

        <section class="intro-section" id="tentang">
            <div class="wrap intro-grid"><div class="about-aside"><p class="eyebrow section-label">01 / TENTANG SAYA</p><figure class="about-portrait"><img src="{{ asset('images/Foto%20pribadi.jpeg') }}" alt="Foto Rachmad Aprisandhy" loading="lazy"><figcaption><strong>Rachmad Aprisandhy</strong><small>IT GENERALIST · WEB / MOBILE / ML</small></figcaption></figure></div><div><h2>Kekuatan tumbuh dari<br>rasa ingin tahu <em>dan tekad untuk berkontribusi.</em></h2><p class="intro-copy">Ketertarikan saya pada rekayasa perangkat lunak berawal dari keyakinan sederhana: teknologi sebaiknya memberi manfaat nyata. Saya menikmati proses belajar, merancang, dan membangun solusi—mulai dari aplikasi web hingga eksperimen computer vision.</p><p class="intro-copy muted">Saya terus mengembangkan kemampuan sebagai IT Generalist, dengan pengalaman di Laravel, Flutter, Python, dan proyek IoT.</p></div></div>
            <div class="wrap skill-row"><div><span class="skill-number">01</span><h3>Web Development</h3><p>Membangun aplikasi dan pengalaman web yang rapi.</p><div class="tags"><span>Laravel</span><span>PHP</span><span>UI</span></div></div><div><span class="skill-number">02</span><h3>Mobile Development</h3><p>Merancang aplikasi mobile dengan fokus pada kegunaan.</p><div class="tags"><span>Flutter</span><span>Dart</span><span>Mobile</span></div></div><div><span class="skill-number">03</span><h3>Machine Learning</h3><p>Bereksperimen dengan data, model, dan computer vision.</p><div class="tags"><span>Python</span><span>CNN</span><span>Computer Vision</span></div></div></div>
        </section>

        <section class="work-section wrap" id="karya">
            <div class="section-heading"><div><p class="eyebrow section-label">02 / PILIHAN KARYA</p><h2>Belajar lewat<br><em>membangun.</em></h2></div><p class="heading-note">Beberapa proyek yang merangkum eksplorasi saya di berbagai bidang teknologi.</p></div>
            <div class="project-grid">
                <article class="project-card project-kost"><div class="project-visual project-visual--single"><img src="{{ asset('images/applied-informatics-preview.png') }}" alt="Pratinjau halaman galeri dan mitra website Laboratorium Applied Informatics" loading="lazy"></div><div class="project-info"><div><span class="project-type">FRONTEND DEVELOPER · PBL</span><h3>Website Laboratorium Applied Informatics</h3><p>Pengembangan website untuk mendukung kebutuhan informasi dan pengelolaan laboratorium.</p><small class="project-context">Politeknik Negeri Malang · Project-Based Learning</small></div><span class="project-arrow" aria-hidden="true">↗</span></div><div class="project-tags"><span>Frontend</span><span>Website</span><span>PBL</span></div></article>
                <article class="project-card project-banana"><div class="project-visual project-visual--pair project-visual--phone"><img src="{{ asset('images/banana-grading-splash.png') }}" alt="Tampilan pembuka aplikasi BananaGrade" loading="lazy"><img src="{{ asset('images/banana-grading-guide.png') }}" alt="Tampilan panduan fitur aplikasi BananaGrade" loading="lazy"></div><div class="project-info"><div><span class="project-type">PROJECT MANAGER · MACHINE LEARNING</span><h3>Aplikasi Mobile Grading Pisang Berbasis Deep Learning</h3><p>Pengembangan aplikasi mobile untuk klasifikasi kualitas pisang menggunakan model Convolutional Neural Network (CNN).</p><small class="project-context">Politeknik Negeri Malang · Project-Based Learning</small></div><span class="project-arrow" aria-hidden="true">↗</span></div><div class="project-tags"><span>Machine Learning</span><span>CNN</span><span>Mobile App</span></div></article>
                <article class="project-card project-iot"><div class="project-visual project-visual--pair"><img src="{{ asset('images/ternak-lele-beranda.png') }}" alt="Pratinjau beranda website Ternak Lele Saiful" loading="lazy"><img src="{{ asset('images/ternak-lele-katalog.png') }}" alt="Pratinjau katalog produk website Ternak Lele Saiful" loading="lazy"></div><div class="project-info"><div><span class="project-type">BACKEND DEVELOPER · PROJECT MANAGER</span><h3>Website Ternak Lele Saiful</h3><p>Pengembangan website untuk mendukung penyampaian informasi dan kebutuhan digital usaha peternakan lele.</p><small class="project-context">Politeknik Negeri Malang · Project-Based Learning</small></div><span class="project-arrow" aria-hidden="true">↗</span></div><div class="project-tags"><span>Backend</span><span>Project Management</span><span>Website</span></div></article>
            </div>
        </section>

        <section class="experience-section" id="pengalaman">
            <div class="wrap experience-grid">
                <div>
                    <p class="eyebrow section-label">03 / PENGALAMAN</p>
                    <h2>Tumbuh lewat<br><em>kolaborasi.</em></h2>
                    <p class="experience-intro">Organisasi menjadi ruang bagi saya untuk belajar bekerja bersama, menyusun gagasan, dan berkontribusi.</p>
                </div>
                <div class="timeline">
                    <article><span class="timeline-dot"></span><div><span class="project-type">ORGANISASI MAHASISWA</span><h3>Dewan Perwakilan Mahasiswa Politeknik Negeri Malang</h3><p>Koordinator Tim Drafting</p><small>2026 — sekarang</small><p>Staf Muda</p><small>2024 — 2025</small></div></article>
                    <article><span class="timeline-dot"></span><div><span class="project-type">FORMADIKISI · POLITEKNIK NEGERI MALANG</span><h3>Anggota</h3><p>Forum Mahasiswa Bidikmisi/KIP Kuliah dan Afirmasi Pendidikan Politeknik Negeri Malang.</p></div></article>
                    <article><span class="timeline-dot"></span><div><span class="project-type">IPNU</span><h3>Pengurus Anak Cabang</h3><p>Pengurus Ikatan Pelajar Nahdlatul Ulama di tingkat anak cabang.</p></div></article>
                </div>
            </div>
        </section>

        <section class="contact-section" id="kontak">
            <div class="contact-inner wrap">
                <p class="eyebrow section-label">04 / KONTAK</p>
                <div class="contact-content">
                    <p class="contact-kicker">ADA IDE MENARIK?</p>
                    <h2>Mari bekerja<br><em>bersama.</em></h2>
                    <p>Saya terbuka untuk kolaborasi, proyek freelance, dan kesempatan baru.</p>
                    <div class="contact-links">
                        <a href="mailto:rachmadapris@gmail.com" class="contact-chip"><span aria-hidden="true">✉</span>rachmadapris@gmail.com</a>
                        <a href="https://github.com/RachmadAprisandhy/" target="_blank" rel="noopener noreferrer" class="contact-chip"><span aria-hidden="true">⌘</span>GitHub <b>↗</b></a>
                        <a href="https://www.linkedin.com/in/rachmad-aprisandhy-a2b71b446/" target="_blank" rel="noopener noreferrer" class="contact-chip"><span aria-hidden="true">in</span>LinkedIn <b>↗</b></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer wrap"><a class="brand" href="#home"><span class="brand-mark">I.</span><span>Portofolio</span></a><span id="year">2026</span></span><a href="#home">Kembali ke atas ↑</a></footer>
    <script src="{{ asset('js/portfolio.js') }}" defer></script>
</body>
</html>
