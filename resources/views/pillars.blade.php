<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pillars - Aniza Helwa Mahanani</title>
    
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
<body class="bg-cream text-wine font-simple antialiased">

    <nav class="w-full pt-8 pb-6 px-6 flex justify-center items-center bg-cream sticky top-0 z-50 shadow-sm transition-all duration-300">
        <div class="flex space-x-12 md:space-x-20 text-base md:text-xl tracking-[0.25em] font-classic uppercase">
            <a href="{{ route('portfolio.index') }}" class="text-wine opacity-70 hover:opacity-100 font-bold transition duration-300 pb-1 border-b-2 border-transparent">Home</a>
            <a href="{{ route('portfolio.index') }}#about" class="text-wine opacity-70 hover:opacity-100 font-bold transition duration-300 pb-1 border-b-2 border-transparent">About Me</a>
            <a href="#" class="text-wine font-bold border-b-2 border-wine pb-1 transition duration-300">The Pillars</a>
            <a href="{{ route('portfolio.missions') }}" class="text-wine opacity-70 hover:opacity-100 font-bold transition duration-300 pb-1 border-b-2 border-transparent">The Missions</a>
        </div>
    </nav>

    <main class="min-h-[85vh] flex flex-col justify-center items-center px-4 py-20 text-center overflow-hidden">
        <div class="w-full max-w-7xl mx-auto space-y-12">
            
            <h3 class="font-decorative text-6xl sm:text-7xl md:text-8xl lg:text-9xl text-wine leading-none tracking-wide select-none whitespace-nowrap transform scale-95 md:scale-100 origin-center">
                Impact Through Innovation
            </h3>

            <p class="font-classic text-2xl md:text-4xl lg:text-4xl font-extrabold text-wine leading-tight max-w-5xl mx-auto tracking-wide pt-4">
                “Combining computer science, communication, and social impact to create technology that matters.”
            </p>

        </div>
    </main>

    
    <section class="relative w-full bg-[#1E100F] text-[#F6F3E4] font-simple overflow-hidden">

    <!-- Vertical Lines -->
    <div class="absolute top-0 bottom-0 left-[12%] w-[1px] bg-[#F6F3E4]"></div>
    <div class="absolute top-0 bottom-0 right-[12%] w-[1px] bg-[#F6F3E4]"></div>

    <div class="relative max-w-7xl mx-auto">

        <!-- TOP DOUBLE LINE -->
        <div class="w-screen relative left-1/2 -translate-x-1/2 pt-20 pb-8">
            <div class="border-t border-[#F6F3E4]"></div>
            <!-- <div class="border-t border-[#F6F3E4] mt-16"></div> -->
        </div>

        <!-- SECTION 1 -->
        <div class="py-20 px-8 md:px-16 lg:px-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                <!-- LEFT TEXT -->
                <div class="lg:col-span-4 text-center lg:text-right flex flex-col justify-start h-full">
                    <h4 class="font-classic text-xl md:text-2xl lg:text-3xl font-bold lg:whitespace-nowrap mt-8">
                        Making Technology Easy to
                    </h4>

                    <p class="mt-6 text-base leading-relaxed text-[#F6F3E4]/80 text-justify lg:text-right">
                        Through my journey in technology, I have realized that while many people can build technology, only a few can explain complex ideas in a way that everyone can understand.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="lg:col-span-4 flex justify-center">
                    <div
                        class="w-full max-w-[240px] aspect-[4/5] bg-[#F6F3E4] p-2.5 rounded-t-[4rem] rounded-b-[2rem] overflow-hidden shadow-xl hover:scale-105 transition duration-500">

                        <img
                            src="{{ asset('images/pillar_1.jpg') }}"
                            alt="Terascerita Community Presentation"
                            class="w-full h-full object-cover rounded-t-[3.7rem] rounded-b-[1.7rem]">
                    </div>
                </div>

                <!-- RIGHT TEXT -->
                <div class="lg:col-span-4 text-center lg:text-left flex flex-col justify-start h-full">
                    <h4 class="font-classic text-xl md:text-2xl lg:text-3xl font-bold italic lg:whitespace-nowrap mt-8">
                        Understand for Everyone
                    </h4>

                    <p class="mt-6 text-base leading-relaxed text-[#F6F3E4]/80 text-justify lg:text-left">
                        By combining my background in computer science and public speaking, I aim to bridge the gap between technology and society, making technical concepts more accessible while helping people become more aware of the opportunities and risks that technology brings.
                    </p>
                </div>

            </div>
        </div>

        <!-- DIVIDER -->
        <div class="w-screen relative left-1/2 -translate-x-1/2 py-8">
            <div class="border-t border-[#F6F3E4]"></div>
            <div class="border-t border-[#F6F3E4] mt-16"></div>
        </div>

        <!-- SECTION 2 -->
        <div class="py-20 px-8 md:px-16 lg:px-24">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-16 items-center">

                <!-- IMAGE -->
                <div class="md:col-span-4 flex justify-center">
                    <div
                        class="w-full max-w-[240px] aspect-[4/5] bg-[#F6F3E4] p-2.5 rounded-t-[4rem] rounded-b-[2rem] overflow-hidden shadow-xl hover:scale-105 transition duration-500">

                        <img
                            src="{{ asset('images/pillar_2.jpeg') }}"
                            alt="Robotics and Engineering Project Team"
                            class="w-full h-full object-cover rounded-t-[3.7rem] rounded-b-[1.7rem]">
                    </div>
                </div>

                <!-- TEXT -->
                <div class="md:col-span-8">
                    <h4 class="font-classic text-xl md:text-2xl lg:text-3xl font-bold leading-tight">
                        Learning New Things Quickly and
                        <span class="italic font-normal">
                            Having High Curiosity
                        </span>
                    </h4>

                    <p class="mt-6 text-sm md:text-base leading-relaxed text-[#F6F3E4]/80 text-justify">
                        I am driven by curiosity and a strong willingness to learn new things. Even without any experience in IoT or Computer Vision, I challenged myself to join a robotics organization and successfully complete projects in both fields within a limited timeframe. I see every challenge as an opportunity to grow, expand my skills, and build a broader portfolio.
                    </p>
                </div>

            </div>
        </div>

        <!-- DIVIDER -->
        <div class="w-screen relative left-1/2 -translate-x-1/2 py-8">
            <div class="border-t border-[#F6F3E4]"></div>
            <div class="border-t border-[#F6F3E4] mt-16"></div>
        </div>

        <!-- SECTION 3 -->
        <div class="py-20 px-8 md:px-16 lg:px-24">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-16 items-center">

                <!-- TEXT -->
                <div class="md:col-span-8 order-2 md:order-1">
                    <h4 class="font-classic text-xl md:text-2xl lg:text-3xl font-bold leading-tight">
                        Leading with Proactivity and
                        <span class="italic font-normal">
                            a Highly Structured Plan
                        </span>
                    </h4>

                    <p class="mt-6 text-sm md:text-base leading-relaxed text-[#F6F3E4]/80 text-justify">
                        I believe that success is not only defined by results, but also by integrity, the learning process, and a genuine commitment to growing together. I approach decisions thoughtfully and systematically, staying organized and calm under pressure to make well-considered choices. Through empathetic leadership, I strive to ensure that every initiative and technology solution I contribute to creates a positive impact on the people and communities around it.
                    </p>
                </div>

                <!-- IMAGE -->
                <div class="md:col-span-4 flex justify-center md:justify-end order-1 md:order-2">
                    <div
                        class="w-full max-w-[240px] aspect-[4/5] bg-[#F6F3E4] p-2.5 rounded-t-[4rem] rounded-b-[2rem] overflow-hidden shadow-xl hover:scale-105 transition duration-500">

                        <img
                            src="{{ asset('images/pillar_3.jpg') }}"
                            alt="Community Engagement and Leadership Activity"
                            class="w-full h-full object-cover rounded-t-[3.7rem] rounded-b-[1.7rem]">
                    </div>
                </div>

            </div>
        </div>

        <!-- BOTTOM DOUBLE LINE -->
        <div class="w-screen relative left-1/2 -translate-x-1/2 pt-8 pb-20">
            <div class="border-t border-[#F6F3E4]"></div>
            <!-- <div class="border-t border-[#F6F3E4] mt-16"></div> -->
        </div>

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

</body>
</html>