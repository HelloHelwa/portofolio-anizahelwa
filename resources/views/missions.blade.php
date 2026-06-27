<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Missions - Aniza Helwa Mahanani</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=EB+Garamond:ital,wght@0,400;0,700;0,800;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-decorative { font-family: 'Monsieur La Doulaise', cursive; }
        .font-classic { font-family: 'EB Garamond', serif; }
        .font-simple { font-family: 'Inter', sans-serif; }

        /* PALETTE WARNA RESMI FIGMA HELWA */
        .bg-espresso { background-color: #1E100F; }
        .bg-cream { background-color: #F6F3E4; }
        .bg-wine { background-color: #30050E; }
        .bg-maroon-accent { background-color: #4D0C12; }

        .text-espresso { color: #1E100F; }
        .text-cream { color: #F6F3E4; }
        .text-wine { color: #30050E; }
        .text-maroon-accent { color: #4D0C12; }

        html,
        body {
            overflow-x: hidden;
        }

        .nav-menu {
            gap: clamp(0.85rem, 4vw, 5rem);
            justify-content: center;
            row-gap: 0.85rem;
        }

        .nav-menu > * {
            margin-left: 0 !important;
        }

        .missions-hero-title {
            font-size: clamp(3.3rem, 10.5vw, 8rem);
            white-space: normal;
            overflow-wrap: anywhere;
        }

        .missions-hero-copy {
            font-size: clamp(1.15rem, 3.4vw, 2.5rem);
            text-wrap: pretty;
        }

        .mission-heading,
        .value-heading {
            text-wrap: balance;
        }

        .mission-copy,
        .value-copy {
            text-wrap: pretty;
        }

        @media (max-width: 767px) {
            nav {
                padding: 1.1rem 1rem 1rem !important;
            }

            .nav-menu {
                display: grid !important;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                width: 100%;
                max-width: 28rem;
                font-size: 0.78rem !important;
                letter-spacing: 0.12em !important;
                text-align: center;
            }

            .nav-menu a {
                padding: 0.4rem 0.25rem;
                line-height: 1.2;
            }

            .missions-hero {
                min-height: auto !important;
                padding: 4.5rem 1rem 3.75rem !important;
            }

            .missions-hero > div {
                gap: 1.5rem !important;
            }

            .missions-hero-title {
                font-size: 3rem !important;
                line-height: 0.9 !important;
                margin-left: 0 !important;
                transform: none !important;
            }

            .missions-hero-copy {
                font-size: 1rem !important;
                line-height: 1.25 !important;
                letter-spacing: 0.04em !important;
            }

            .mission-section {
                padding-top: 2.75rem !important;
            }

            .mission-container {
                padding-inline: 0.85rem !important;
            }

            .mission-grid {
                grid-template-columns: minmax(7.5rem, 38%) minmax(0, 62%) !important;
                gap: 0.9rem !important;
                align-items: stretch !important;
            }

            .mission-grid.reverse-mobile {
                grid-template-columns: minmax(0, 62%) minmax(7.5rem, 38%) !important;
            }

            .mission-grid.reverse-mobile .mission-text {
                order: 1 !important;
            }

            .mission-grid.reverse-mobile .mission-visual {
                order: 2 !important;
            }

            .mission-visual {
                min-height: 18rem !important;
                justify-content: center !important;
            }

            .mission-photo-wrap {
                width: 7.5rem !important;
            }

            .mission-photo-bg {
                height: 13.5rem !important;
                border-top-left-radius: 4rem !important;
                border-top-right-radius: 4rem !important;
            }

            .mission-photo {
                width: 5.5rem !important;
                height: 17rem !important;
                border-top-left-radius: 3.25rem !important;
                border-top-right-radius: 3.25rem !important;
            }

            .mission-text {
                padding-top: 0.25rem !important;
                padding-bottom: 2.25rem !important;
            }

            .mission-heading {
                font-size: 0.98rem !important;
                line-height: 1.15 !important;
                white-space: normal !important;
                text-align: left !important;
                letter-spacing: 0.03em !important;
            }

            .mission-copy-wrap {
                margin-top: 1.25rem !important;
            }

            .mission-copy {
                font-size: 0.68rem !important;
                line-height: 1.5 !important;
                text-align: left !important;
                letter-spacing: 0.01em !important;
            }

            .values-section {
                padding-top: 3.25rem !important;
                padding-bottom: 2.75rem !important;
            }

            .values-heading-wrap {
                margin-bottom: 2.5rem !important;
            }

            .values-heading-wrap h3 {
                font-size: 1.2rem !important;
            }

            .value-stack {
                gap: 0.85rem !important;
            }

            .value-title-box {
                width: min(70vw, 18rem) !important;
                padding: 0.65rem 1.25rem !important;
            }

            .value-title-box h4 {
                font-size: 1.2rem !important;
                line-height: 1.1 !important;
            }

            .value-body-box {
                width: min(92vw, 34rem) !important;
                padding: 1.5rem 1.25rem !important;
            }

            .value-copy {
                font-size: 0.82rem !important;
                line-height: 1.55 !important;
                text-align: left !important;
                letter-spacing: 0.01em !important;
            }

            footer .w-16 {
                width: 3.25rem;
                height: 3.25rem;
            }
        }

        @media (min-width: 768px) and (max-width: 1023px) {
            .nav-menu {
                flex-wrap: wrap;
                font-size: 0.95rem !important;
                letter-spacing: 0.16em !important;
            }

            .missions-hero {
                min-height: auto !important;
                padding-block: 5.5rem !important;
            }

            .mission-container,
            .values-container {
                padding-inline: 3rem !important;
            }

            .mission-photo-wrap {
                width: 17rem !important;
            }

            .mission-photo-bg {
                height: 22rem !important;
            }

            .mission-photo {
                width: 12.5rem !important;
                height: 27rem !important;
            }

            .mission-copy-wrap {
                margin-top: 3rem !important;
            }

            .value-title-box {
                width: 55vw !important;
            }

            .value-body-box {
                width: 90vw !important;
            }
        }
    </style>
</head>
<body class="bg-maroon-accent text-cream font-simple antialiased">

    <nav class="w-full pt-8 pb-6 px-6 flex justify-center items-center bg-maroon-accent sticky top-0 z-50 shadow-sm transition-all duration-300">
        <div class="nav-menu flex flex-wrap space-x-12 md:space-x-20 text-base md:text-xl tracking-[0.25em] font-classic uppercase">
            <a href="{{ route('portfolio.index') }}" class="text-cream opacity-70 hover:opacity-100 font-bold transition duration-300 pb-1">Home</a>
            <a href="{{ route('portfolio.index') }}#about" class="text-cream opacity-70 hover:opacity-100 font-bold transition duration-300 pb-1">About Me</a>
            <a href="{{ route('portfolio.pillars') }}" class="text-cream opacity-70 hover:opacity-100 font-bold transition duration-300 pb-1">The Pillars</a>
            <a href="#" class="text-cream font-bold border-b-2 border-cream pb-1 transition duration-300">The Missions</a>
        </div>
    </nav>

    <main class="missions-hero min-h-[85vh] flex flex-col justify-center items-center px-4 py-20 text-center overflow-hidden">
        <div class="w-full max-w-7xl mx-auto flex flex-col items-center justify-center space-y-12">
            
            <h3 class="missions-hero-title font-decorative text-6xl sm:text-7xl md:text-8xl lg:text-9xl text-cream leading-none select-none whitespace-nowrap text-center block w-full transform scale-95 md:scale-100 origin-center -ml-4 md:-ml-8 lg:-ml-12">
                Turning Knowledge into Impact
            </h3>

            <p class="missions-hero-copy font-classic text-2xl md:text-4xl lg:text-4xl font-extrabold text-cream leading-tight max-w-5xl mx-auto tracking-wide text-center block">
                “I use technology and communication to turn innovation into meaningful impact.”
            </p>

        </div>
    </main>


    <!-- BAGIAN 1 -->
<section class="mission-section w-full bg-cream pt-20 pb-0 relative">
    <div class="mission-container max-w-7xl mx-auto px-8 md:px-16 lg:px-24">
        
        <div class="mission-grid grid grid-cols-1 md:grid-cols-12 gap-12 items-stretch relative">
            
            <div class="mission-visual md:col-span-5 flex justify-center md:justify-start relative min-h-[500px] z-10">
                <div class="mission-photo-wrap relative w-[340px] h-full flex items-end">
                    
                    <div class="mission-photo-bg absolute bottom-0 left-0 w-full h-[400px] bg-maroon-accent rounded-t-[10rem]"></div>

                    <img src="{{ asset('images/missions_1.jpeg') }}" 
                         alt="Google Student Ambassador" 
                         class="mission-photo absolute bottom-0 left-1/2 -translate-x-1/2 w-[240px] h-[500px] object-cover rounded-t-[8rem] z-10 shadow-xl">
                
                </div>
            </div>

            <div class="mission-text md:col-span-7 flex flex-col justify-start pt-6 pb-16">
                <div class="border-t-2 border-[#4D0C12] w-full"></div>
                <div class="py-6 w-full">
                    <h4 class="mission-heading font-classic text-xl md:text-2xl lg:text-3xl font-extrabold text-maroon-accent tracking-wide leading-tight whitespace-nowrap text-center">
                        Promoting Digital Literacy <span class="italic font-normal">for Everyone</span>
                    </h4>
                </div>
                <div class="border-t-2 border-[#4D0C12] w-full"></div>
                <div class="mission-copy-wrap w-full mt-20 text-justify">
                    <p class="mission-copy font-simple text-sm md:text-base leading-relaxed text-maroon-accent font-medium tracking-wide">
                        I believe technology should be accessible to everyone. By combining computer science and
                        communication, I create educational content that helps people understand and use digital
                        tools more effectively. Through initiatives such as sharing practical AI applications,
                        I aim to encourage responsible technology use and strengthen digital literacy within the
                        community.
                    </p>
                </div>
            </div>   

        </div>
    </div>
</section>


<section class="mission-section w-full bg-maroon-accent pt-20 pb-0 relative text-cream">
    <div class="mission-container max-w-7xl mx-auto px-8 md:px-16 lg:px-24">
        
        <div class="mission-grid reverse-mobile grid grid-cols-1 md:grid-cols-12 gap-12 items-stretch relative">
            
            <div class="mission-text md:col-span-7 flex flex-col justify-start pt-6 pb-16 order-first">
                <div class="border-t-2 border-[#F6F3E4] w-full"></div>
                <div class="py-6 w-full">
                    <h4 class="mission-heading font-classic text-xl md:text-2xl lg:text-3xl font-extrabold text-[#F6F3E4] tracking-wide leading-tight whitespace-nowrap text-left">
                        Leading with <span class="italic font-normal">Empathy and Integrity</span>
                    </h4>
                </div>
                <div class="border-t-2 border-[#F6F3E4] w-full"></div>
                <div class="mission-copy-wrap w-full mt-20 text-justify">
                    <p class="mission-copy font-simple text-sm md:text-base leading-relaxed text-[#F6F3E4]/90 font-medium tracking-wide">
                        I believe leadership is not about authority, but about bringing people together toward a shared purpose. 
                        I am committed to lead with empathy, integrity, and openness by creating environments where every 
                        voice is valued and every learning process is respected. Beyond achieving goals, I always try to 
                        encourage collaboration, growth, and meaningful impact for everyone involved.
                    </p>
                </div>
            </div>   

            <div class="mission-visual md:col-span-5 flex justify-center md:justify-end relative min-h-[500px] z-10">
                <div class="mission-photo-wrap relative w-[340px] h-full flex items-end">
                    
                    <div class="mission-photo-bg absolute bottom-0 left-0 w-full h-[400px] bg-[#F6F3E4] rounded-t-[10rem]"></div>

                    <img src="{{ asset('images/missions_2.jpeg') }}" 
                         alt="Empathy and Integrity Leadership Group" 
                         class="mission-photo absolute bottom-0 left-1/2 -translate-x-1/2 w-[240px] h-[500px] object-cover rounded-t-[8rem] z-10 shadow-xl">
                
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ANIZA HELWA VALUES -->
<section class="values-section w-full bg-cream pt-24 pb-12 text-maroon-accent">
    <div class="values-container max-w-7xl mx-auto px-8 md:px-16 lg:px-24">
        
        <div class="values-heading-wrap relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw] mb-20">
            
            <div class="border-t-2 border-maroon-accent w-full"></div>
            
            <div class="py-4 text-center px-8 md:px-16 lg:px-24">
                <h3 class="font-classic text-xl md:text-2xl lg:text-3xl font-extrabold tracking-wide text-maroon-accent">
                    Aniza Helwa’s <span class="italic font-normal">Values</span>
                </h3>
            </div>
            
            <div class="border-t-2 border-maroon-accent w-full"></div>

        </div>

        <div class="value-stack relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw] flex flex-col items-start space-y-6">
            
            <!-- Sub Judul -->
            <div class="value-title-box bg-maroon-accent text-cream py-3 pl-16 md:pl-48 lg:pl-64 pr-12 shadow-sm w-[40vw]">
                <h4 class="value-heading font-classic text-xl md:text-3xl font-extrabold tracking-wide">
                    Integrity
                </h4>
            </div>

            <!-- Deskripsi -->
            <div class="value-body-box bg-maroon-accent text-cream py-10 pl-16 md:pl-48 lg:pl-64 pr-8 md:pr-16 shadow-md w-[85vw] max-w-5xl">
                <p class="value-copy font-simple text-base md:text-lg leading-relaxed text-cream font-medium tracking-wide text-justify">
                    I believe that honesty and consistency are the foundation of meaningful impact.
                    By staying true to my values, taking responsibility for my actions, and committing
                    to every journey I begin, I’m always trying to lead with authenticity and purpose.
                </p>
            </div>

        </div>

    </div>
</section>


<section class="values-section w-full bg-maroon-accent py-16 text-cream">
    <div class="values-container max-w-7xl mx-auto px-8 md:px-16 lg:px-24">

        <div class="value-stack relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw] flex flex-col items-end space-y-6">

            <!-- Sub Judul -->
            <div class="value-title-box bg-cream text-maroon-accent py-3 pr-16 md:pr-48 lg:pr-64 pl-12 shadow-sm w-[40vw] text-right">
                <h4 class="value-heading font-classic text-xl md:text-3xl font-extrabold tracking-wide">
                    Continuous Growth
                </h4>
            </div>

            <!-- Deskripsi -->
            <div class="value-body-box bg-cream text-maroon-accent py-10 pr-16 md:pr-48 lg:pr-64 pl-8 md:pl-16 shadow-md w-[85vw] max-w-5xl">
                <p class="value-copy font-simple text-base md:text-lg leading-relaxed text-maroon-accent font-medium tracking-wide text-justify">
                    I see every experience as an opportunity to learn, improve, and discover new possibilities.
                    By embracing challenges and valuing the learning process, I continuously grow while
                    transforming lessons and setbacks into meaningful achievements.
                </p>
            </div>

        </div>

    </div>
</section>

<section class="values-section w-full bg-cream pt-24 pb-12 text-maroon-accent">
    <div class="values-container max-w-7xl mx-auto px-8 md:px-16 lg:px-24">
        <div class="value-stack relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw] flex flex-col items-start space-y-6">
            <!-- Sub Judul -->
            <div class="value-title-box bg-maroon-accent text-cream py-3 pl-16 md:pl-48 lg:pl-64 pr-12 shadow-sm w-[40vw]">
                <h4 class="value-heading font-classic text-xl md:text-3xl font-extrabold tracking-wide">
                    Inclusivity
                </h4>
            </div>
            <!-- Deskripsi -->
            <div class="value-body-box bg-maroon-accent text-cream py-10 pl-16 md:pl-48 lg:pl-64 pr-8 md:pr-16 shadow-md w-[85vw] max-w-5xl">
                <p class="value-copy font-simple text-base md:text-lg leading-relaxed text-cream font-medium tracking-wide text-justify">
                    I believe that every voice deserves to be heard. Through open dialogue, empathy, and 
                    accessible communication, I aim to create spaces where people can learn, grow, and 
                    collaborate together while ensuring technology remains beneficial and accessible to everyone.
                </p>
            </div>
        </div>
    </div>

    <div class="w-full mt-16 space-y-6">
        <div class="border-t-2 border-maroon-accent w-full"></div>
        <div class="border-t-2 border-maroon-accent w-full"></div>
    </div>
</section>

</body>

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
                <a href="https://github.com/AnizaHelwa" target="_blank" class="w-16 h-16 rounded-full bg-[#F6F3E4] flex justify-center items-center text-wine hover:scale-110 transition duration-300 shadow-xl">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </div>

        </div>
    </footer>
</html>
