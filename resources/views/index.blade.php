<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aniza Helwa Mahanani - Creative Portfolio</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=EB+Garamond:ital,wght@0,400;0,700;0,800;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* PEMETAAN FONT RESMI FIGMA HELWA */
        .font-decorative {
            font-family: 'Monsieur La Doulaise', cursive;
        }
        .font-classic {
            font-family: 'EB Garamond', serif;
        }
        .font-simple {
            font-family: 'Inter', sans-serif;
        }

        /* PALETTE WARNA RESMI FIGMA HELWA */
        .bg-espresso { background-color: #1E100F; }
        .bg-cream { background-color: #F6F3E4; }
        .bg-wine { background-color: #30050E; }
        .bg-maroon-accent { background-color: #4D0C12; }

        .text-espresso { color: #1E100F; }
        .text-cream { color: #F6F3E4; }
        .text-wine { color: #30050E; }
    </style>
</head>
<body class="bg-espresso text-cream font-simple antialiased">

    <nav class="w-full pt-8 pb-6 px-6 flex justify-center items-center bg-[#1E100F]/90 sticky top-0 z-50 backdrop-blur-md border-b border-[#F6F3E4]/5 transition-all duration-300">
        <div class="flex space-x-12 md:space-x-20 text-base md:text-xl tracking-[0.25em] font-classic uppercase">
            <a href="#" data-nav="home" class="nav-link text-cream font-bold transition duration-300 pb-1 border-b-2 border-transparent">Home</a>
            <a href="#about" data-nav="about" class="nav-link text-cream opacity-75 hover:opacity-100 font-bold transition duration-300 pb-1 border-b-2 border-transparent">About Me</a>
            
            <a href="{{ route('portfolio.pillars') }}" class="text-cream opacity-75 hover:opacity-100 font-bold transition duration-300 pb-1 border-b-2 border-transparent">The Pillars</a>
            <a href="{{ route('portfolio.missions') }}" class="text-cream opacity-75 hover:opacity-100 font-bold transition duration-300 pb-1 border-b-2 border-transparent">The Missions</a>
        </div>
    </nav>

    <section class="min-h-[55vh] md:min-h-[60vh] px-6 text-center bg-espresso flex flex-col justify-center items-center">
        <h1 class="font-decorative text-7xl md:text-9xl text-cream tracking-wide mb-2 opacity-95 leading-none">
            Aniza Helwa Mahanani
        </h1>
        
        <h2 class="font-classic text-4xl md:text-6xl tracking-[0.3em] font-medium text-cream mb-8 leading-none">
            CREATIVE PORTFOLIO
        </h2>
        
        <p class="font-simple opacity-80 text-xs md:text-base tracking-wider max-w-2xl font-normal leading-relaxed">
            For me, growth is never about reaching perfection, but it is about<br class="hidden md:inline">
            how we learn, evolve, and create meaningful impact for others.
        </p>
    </section>

    <div class="w-full bg-cream py-10 px-6 text-center flex justify-center items-center shadow-inner">
        <p class="font-simple text-espresso font-bold text-xl md:text-sm tracking-[0.12em] lg:tracking-[0.18em] leading-relaxed max-w-5xl uppercase">
            Informatics Engineering @UB &nbsp;|&nbsp; Google Student Ambassador 2026 &nbsp;|&nbsp; <br class="hidden lg:inline">
            TEDx Speaker &nbsp;|&nbsp; Teladan Scholar
        </p>
    </div>

    <div class="w-full bg-maroon-accent py-12 px-6 text-center flex justify-center items-center">
        <a href="{{ url('/projects') }}" class="font-simple bg-cream text-espresso font-bold text-xs md:text-sm tracking-[0.2em] uppercase px-14 py-4 rounded-xl hover:scale-105 transition duration-300 shadow-xl border border-cream/10">
            See Project & Achievements
        </a>
    </div>


    <section id="about" class="bg-cream text-espresso py-24 px-8 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-7 space-y-12">
                
                <div class="space-y-4">
                    <h3 class="font-classic text-4xl md:text-5xl tracking-[0.1em] font-extrabold text-espresso uppercase">
                            ABOUT <span class="italic font-normal">ME</span>
                    </h3>
                    <p class="font-simple text-sm md:text-base lg:text-lg leading-relaxed text-espresso/90 text-justify tracking-wide">
                        Hello, I’m Aniza Helwa Mahanani. I’m an Informatics Student at Brawijaya University who is also a Teladan by Tanoto Foundation Scholar, a Google Student Ambassador for 2026, and a TEDx Speaker for 2026.
                    </p>
                </div>

                <div class="space-y-4">
                    <h4 class="font-classic text-4xl md:text-5xl tracking-[0.1em] font-extrabold text-espresso uppercase">
                        PERSONAL <span class="italic font-normal">ESSENCE</span>
                    </h4>
                    <p class="font-simple text-sm md:text-base lg:text-lg leading-relaxed text-espresso/90 text-justify tracking-wide">
                        I’ve always likened myself to a Crystal Lantern, a lantern that doesn’t just shine for itself, but also illuminates the world around it. The crystal inside represents a process of self-reflection that continuously radiates spirit, hope, and passion aligned with my core values as I face challenges, opportunities, and aspirations.
                    </p>
                </div>

            </div>

            <div class="lg:col-span-5 flex justify-center lg:justify-end w-full">
                <div class="w-full max-w-md bg-[#30050E] rounded-t-[5rem] rounded-b-2xl p-3 shadow-xl aspect-[4/5] flex items-end overflow-hidden">
                    <img src="{{ asset('images/profile_hero.png') }}" alt="Aniza Helwa Mahanani" class="w-full h-full object-cover rounded-t-[4.5rem] rounded-b-xl opacity-100 transition duration-300 hover:scale-[1.02]">
                </div>
            </div>

        </div>
    </section>


    <section id = "about" class="grid grid-cols-1 md:grid-cols-2 w-full overflow-hidden">
        
        <div class="bg-maroon-accent flex justify-center items-center p-12 md:p-16 lg:p-20 aspect-square md:aspect-auto min-h-[450px]">
            <div class="relative w-full max-w-[320px] md:max-w-[350px] aspect-square flex justify-center items-center rounded-3xl bg-[#F6F3E4] p-8 shadow-2xl overflow-hidden group border border-[#F6F3E4]/20 hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-tr from-[#4D0C12]/15 to-transparent opacity-60"></div>
                <img src="{{ asset('images/lantern.png') }}" alt="Crystal Lantern Illustration" class="w-full h-full object-contain relative z-10 group-hover:scale-110 transition duration-1000 ease-in-out">
            </div>
        </div>

        <div class="bg-espresso flex flex-col justify-center p-10 md:p-20 lg:p-24 border-b border-[#1E100F]/5">
            <p class="font-simple text-2xl md:text-xl lg:text-2xl text-cream leading-tight tracking-wide font-medium">
                <span class="text-4xl lg:text-3xl">"</span>A crystal lantern: evolving through self-reflection, burning with passion, and casting a meaningful impact to the world around.<span class="text-4xl lg:text-3xl">"</span>
            </p>
        </div>

    </section>

    <section id = "about">
        <div class="grid grid-cols-1 md:grid-cols-10 w-full overflow-hidden">
        
            <div class="bg-[#F6F3E4] flex flex-col justify-center p-10 md:p-20 lg:p-24 md:col-span-7">
                <p class="font-simple text-[#1E100F] text-sm md:text-base lg:text-xl leading-relaxed text-justify tracking-wide opacity-95">
                    As a student driven by curiosity, I often dedicate part of my time to exploring the intersection between technology and its social impact. One issue that particularly captures my attention is the misuse of AI-generated animations and deepfakes, which can spread misleading information and create harmful public assumptions, especially among people who are less familiar with technology.
                </p>
            </div>

            <div class="bg-[#1E100F] overflow-hidden min-h-[350px] md:min-h-[450px] relative group md:col-span-3">
                <img src="{{ asset('images/book_reading.jpg') }}" alt="Technology and Social Research" class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition duration-1000 ease-in-out">
                <div class="absolute inset-0 bg-[#1E100F]/20 group-hover:bg-transparent transition duration-700"></div>
            </div>

        </div>
    </section>


    <section id = "about" class="grid grid-cols-1 md:grid-cols-12 w-full overflow-hidden border-t border-[#F6F3E4]/10">
        
        <div class="md:col-span-4 bg-[#1E100F] overflow-hidden min-h-[350px] md:min-h-[400px] relative">
            <img src="{{ asset('images/profile_flowers.jpg') }}" alt="Aniza Focus Area" class="w-full h-full object-cover opacity-95">
        </div>

        <div class="md:col-span-8 bg-[#30050E] flex flex-col justify-center p-10 md:p-16 lg:p-20">
            <div class="w-full max-w-2xl md:pl-20 lg:pl-32">
                <p class="font-simple text-[#F6F3E4] text-sm md:text-base lg:text-xl leading-relaxed text-justify tracking-wide opacity-90">
                    One issue that has drawn significant attention is the surge in deepfake-related fraud cases in Indonesia, which increased by 1,550% between 2022 and 2023 (Al Buchory et al., 2024). This trend highlights the growing need for public awareness and vigilance against deepfake-based content that is used for personal gain and can cause harm to individuals or communities.
                </p>
            </div>
        </div>

    </section>

    <section id = "about" class="bg-[#F6F3E4] text-[#1E100F] py-24 px-8 md:px-16 text-center">
        <div class="max-w-3xl mx-auto space-y-8">
            <p class="font-simple text-sm md:text-base lg:text-xl font-medium leading-relaxed tracking-wide opacity-95">
                This is where I believe I can make a difference. With my background in computer science and strong public speaking skills, I can help people better understand technology and reduce the negative impacts caused by its misuse.
            </p>
            
            <p class="font-simple text-sm md:text-base lg:text-xl font-medium leading-relaxed tracking-wide opacity-95">
                As technology continues to evolve rapidly, many people still find it difficult to keep up with these changes. That is why I believe solutions should be delivered in a simple and relatable way. Instead of focusing on technical terms, I prefer approaches that are easy to understand, especially for those who are not yet familiar with technology.
            </p>
        </div>
    </section>


    <section id = "about" class="bg-[#1E100F] py-24 px-6 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-center items-center gap-12 md:gap-8 relative">
            
            <div class="bg-[#F6F3E4] text-[#1E100F] p-8 md:p-12 rounded-lg w-full max-w-[420px] aspect-[3/4] flex flex-col justify-center items-center text-center shadow-2xl">
                <div class="space-y-6 font-simple text-xs md:text-sm leading-relaxed tracking-wide text-center">
                    <p>
                        I believe technology should be accessible to everyone. By simplifying complex topics such as AI and deepfakes into easy-to-understand explanations, I aim to help people become more aware of both the benefits and risks of emerging technologies.
                    </p>
                    <p>
                        This ability is shaped by my experiences and self-development journey with TELADAN. Combining strong communication skills with self-awareness allows me to connect with diverse audiences, communicate ideas effectively, and maintain professionalism while balancing multiple responsibilities.
                    </p>
                </div>
            </div>

            <div class="hidden md:block w-[1px] h-80 bg-[#F6F3E4]/30 mx-4"></div>

            <div class="bg-[#F6F3E4] text-[#1E100F] p-8 md:p-12 rounded-lg w-full max-w-[420px] aspect-[3/4] flex flex-col justify-center items-center text-center shadow-2xl">
                <div class="space-y-6 font-simple text-xs md:text-sm leading-relaxed tracking-wide text-center">
                    <p>
                        I am a proactive individual who is committed to giving my best in everything I start. I enjoy exploring facts, understanding root causes, and gaining deeper insights before developing solutions. This mindset encourages me to take initiative, embrace challenges, and create collaborative environments where every voice is heard.
                    </p>
                    <p>
                        At the same time, I value a structured and detail-oriented approach. Combined with my strength in logical and mathematical thinking, I am able to solve problems systematically and make data-driven decisions.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id = "about" class="bg-[#F6F3E4] py-20 px-6 md:px-16 text-center border-b border-[#1E100F]/10">
        <div class="max-w-4xl mx-auto">
            <p class="font-classic text-[#30050E] text-lg md:text-xl lg:text-2xl font-extrabold leading-relaxed tracking-wide max-w-3xl mx-auto">
                The combination of these experiences, skills, and values has shaped who I am today. As I continue to learn and grow, I hope to use my knowledge and abilities to create meaningful impact and contribute positively to society.
            </p>
        </div>
    </section>

    <footer class="bg-wine text-cream py-12 px-6 md:px-16 lg:px-24">
        <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-8">
            
            <div class="text-center sm:text-left">
                <h5 class="font-classic text-xl md:text-3xl font-bold tracking-wider leading-snug">
                    Let's Connect &<br class="hidden sm:inline"> Collaborate
                </h5>
            </div>

            <div class="flex items-center space-x-7 md:space-x-10">
                <a href="https://www.linkedin.com/in/aniza-helwa-mahanani-76a76b317?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" class="w-16 h-16 rounded-full bg-[#F6F3E4] flex justify-center items-center text-wine hover:scale-110 transition duration-300 shadow-xl">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="https://www.instagram.com/anizahelwa?igsh=ejNmdm5ob2N1eW1k" target="_blank" class="w-16 h-16 rounded-full bg-[#F6F3E4] flex justify-center items-center text-wine hover:scale-110 transition duration-300 shadow-xl">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
                <a href="https://www.tiktok.com/@anizahelwa?_r=1&_t=ZS-97ImrqsLzF7" target="_blank" class="w-16 h-16 rounded-full bg-[#F6F3E4] flex justify-center items-center text-wine hover:scale-110 transition duration-300 shadow-xl">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.05 1.7 4.14 1.05.99 2.49 1.52 3.86 1.6v3.82c-1.49-.05-2.98-.55-4.14-1.47-.13-.1-.23-.2-.34-.31v6.71c.02 4.19-2.65 7.97-6.71 8.94-4.52 1.15-9.3-1.46-10.4-5.96-1.19-4.51 1.34-9.36 5.8-10.61 1.14-.32 2.33-.42 3.51-.3v3.83c-1.92-.4-3.95.42-4.94 2.11-.98 1.63-.78 3.81.49 5.2 1.25 1.41 3.42 1.83 5.12 1.01 1.62-.75 2.58-2.48 2.51-4.27v-14.8zm0 0"/></svg>
                </a>
                <a href="https://github.com" target="_blank" class="w-16 h-16 rounded-full bg-[#F6F3E4] flex justify-center items-center text-wine hover:scale-110 transition duration-300 shadow-xl">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </div>

        </div>
    </footer>

    <!-- SCRIPT -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('section, footer');

            function changeActiveNav() {
                let scrollPosition = window.scrollY || document.documentElement.scrollTop;
                scrollPosition += 150; // Offset penyesuaian area

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');

                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            // Hapus paksa semua garis aktif saat scroll berpindah
                            link.classList.remove('border-cream', 'opacity-100');
                            link.classList.add('border-transparent', 'opacity-75');
                            
                            if (link.getAttribute('data-nav') === sectionId) {
                                link.classList.remove('border-transparent', 'opacity-75');
                                link.classList.add('border-cream', 'opacity-100');
                            }
                        });
                    }
                });

                // KUNCI AMAN: Jika posisi scroll berada di puncak paling atas (Hero / Home Area)
                if (window.scrollY < 200) {
                    navLinks.forEach(link => {
                        link.classList.remove('border-cream', 'opacity-100');
                        link.classList.add('border-transparent', 'opacity-75');
                        
                        // Paksa pasang garis HANYA di menu home
                        if (link.getAttribute('data-nav') === 'home') {
                            link.classList.remove('border-transparent', 'opacity-75');
                            link.classList.add('border-cream', 'opacity-100');
                        }
                    });
                }
            }

            window.addEventListener('scroll', changeActiveNav);
            changeActiveNav(); // Eksekusi instan saat halaman dimuat ulang
        });
    </script>
</body>
</html>