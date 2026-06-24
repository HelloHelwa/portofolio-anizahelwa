<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects & Achievements | Aniza Helwa</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monsieur+La+Doulaise&family=EB+Garamond:ital,wght@0,400;0,700;0,800;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
        
        .border-espresso { border-color: #1E100F; }
    </style>
</head>
<body class="bg-[#30050E] text-[#F6F3E4] font-simple overflow-x-hidden">

    <!-- <nav class="p-8">
        <a href="{{ url('/') }}" class="font-classic italic text-lg hover:opacity-70 transition">← Back to Home</a>
    </nav> -->

    <main class="pb-4 bg-maroon-accent">
        <div class="relative w-screen mb-4">
            <div class="py-12 text-center">
                <h1 class="font-decorative text-4xl md:text-6xl lg:text-7xl font-medium">
                    Project <br>
                    <span class="font-classic" >and Achievements</span>
                </h1>
            </div>
        </div>
    </main>


    <!-- TECH SECTION -->
    <section class="w-full bg-espresso pt-16 pb-32 text-cream">
        <div class="max-w-7xl mx-auto px-4 relative group">

            <div class="relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">

            <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>

            <div class="py-4 text-center font-classic text-xl md:text-2xl lg:text-3xl">
                <h2 class="font-bold">
                    TECHNICAL <span class="italic">WORK</span>
                </h2>
            </div>

            <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>

            </div>

            <button class="prevBtn absolute left-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-[#F6F3E4]/80 hover:text-[#F6F3E4]">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </button>

            <div class="overflow-hidden px-16 pt-20">
                <div class="carousel-track flex gap-8 transition-transform duration-500 ease-in-out will-change-transform">

                    <!-- Card 1 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech1.jpg') }}"
                                    alt="Project ML"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Trending Youtube Analysis - EDA
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Analyzed YouTube trending video statistics through data cleaning, feature engineering, 
                                and exploratory data analysis to uncover patterns behind video popularity and audience engagement.
                            </p>
                        </div>

                    </div>

                    <!-- Card 2 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech2.jpg') }}"
                                    alt="Stroke Prediction: Advanced Ensemble Modeling"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Advanced Ensemble Modeling for Stroke Risk Prediction
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Developed an ensemble machine learning model to predict stroke risk using health indicators, 
                                leveraging class balancing and threshold optimization to improve detection performance.
                            </p>
                        </div>

                    </div>

                    <!-- Card 3 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech3.jpg') }}"
                                    alt="Demand Forecasting Through Ensemble Machine Learning"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                               Demand Forecasting Through Ensemble Machine Learning
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Engineered a machine learning forecasting pipeline that blends gradient boosting 
                                models to generate accurate and stable sales predictions for retail demand planning.
                            </p>
                        </div>

                    </div>

                    <!-- Card 4 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech4.jpg') }}"
                                    alt="Machine Learning Foundations and Predictive Modeling"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Machine Learning Foundations and Predictive Modeling
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Explored core machine learning techniques through hands-on projects, progressing from linear regression and logistic 
                                regression to decision trees and random forests for predictive analytics.
                            </p>
                        </div>

                    </div>

                    <!-- Card 5 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech5.jpg') }}"
                                    alt="House Prices Regression Analysis"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Titanic Survival Prediction
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Analyzed housing market data and built a predictive regression model using advanced 
                                preprocessing, feature transformation, and ensemble-based learning techniques.
                            </p>
                        </div>

                    </div>

                    <!-- Card 6 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech6.jpg') }}"
                                    alt="Titanic Survival Prediction"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                House Prices Regression Analysis
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Built a predictive classification model using passenger demographics and 
                                travel information to estimate survival outcomes through machine learning techniques.
                            </p>
                        </div>

                    </div>

                    <!-- Card 7 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech7.jpg') }}"
                                    alt="Arduino Sumo Robot with PS4 Controller Integration"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Arduino Sumo Robot with PS4 Controller Integration
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Developed a competition-ready sumo robot using Arduino and a PS4 controller, featuring multi-speed 
                                motor control, edge detection, and autonomous escape mechanisms for enhanced arena performance.
                            </p>
                        </div>

                    </div>

                    <!-- Card 8 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/tech8.jpg') }}"
                                    alt="Intelligent Fake News Detection System"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Intelligent Fake News Detection System
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Built an NLP-powered machine learning system capable of distinguishing fake and 
                                authentic news articles through text preprocessing, feature engineering, and predictive modeling.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <button class="nextBtn absolute right-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-[#F6F3E4]/80 hover:text-[#F6F3E4]">
                <i class="fa-solid fa-chevron-right text-3xl"></i>
            </button>

            <div class=" mt-16 space-y-6 relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">
                <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>
                <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>
            </div>

        </div>
    </section>

    
    
    <!-- PUBLIC SPEAKING -->
    <section class="w-full bg-cream pt-16 pb-32 text-espresso">
        <div class="max-w-7xl mx-auto px-4 relative group">

            <div class="relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">

            <div class="border-t-2 border-espresso/40 w-full"></div>

            <div class="py-4 text-center font-classic text-xl md:text-2xl lg:text-3xl">
                <h2 class="font-bold">
                    PUBLIC <span class="italic">SPEAKING</span>
                </h2>
            </div>

            <div class="border-t-2 border-espresso/40 w-full"></div>

            </div>

            <button class="prevBtn absolute left-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-espresso/80 hover:text-espresso">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </button>

            <div class="overflow-hidden px-16 pt-20">
                <div class="carousel-track flex gap-8 transition-transform duration-500 ease-in-out will-change-transform">

                    <!-- Card 1 -->

                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps1.jpeg') }}"
                                    alt="Student Speaker"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Student Speaker TEDxUniversitas Brawijaya 2026
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Selected as a Student Speaker at TEDx Universitas Brawijaya 2026, delivering 
                                a talk on fostering psychological safety in academic environments and empowering students 
                                to explore, innovate, and grow without fear of judgment.
                            </p>
                        </div>

                    </div>

                    <!-- Card 2 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps5.jpeg') }}"
                                    alt="Speaker TEDxUB 2026"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Speaker TEDxUB 2026
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Selected as a TEDx Universitas Brawijaya 2026 Speaker, 
                                delivering ideas on fostering psychological safety in academic 
                                environments and empowering students to explore, innovate, 
                                and grow without fear of judgment.
                            </p>
                        </div>

                    </div>

                    <!-- Card 3 -->

                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project_1.jpeg') }}"
                                    alt="MC Project"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                MC-ing First Gathering TSA UB 2026
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as the Master of Ceremonies (MC) for TSA UB 2026's First Gathering, 
                                facilitating event engagement and creating a welcoming atmosphere for new members.
                            </p>
                        </div>

                    </div>

                    

                    <!-- Card 4 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps2.jpeg') }}"
                                    alt="MC Project"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                MC-ing in Malam Keakraban Informatic Engineering 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Hosted the Informatics Engineering 2025 Welcoming Night, ensuring 
                                smooth event execution while creating an engaging and memorable experience for participants.
                            </p>
                        </div>

                    </div>

                    <!-- Card 5 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps4.png') }}"
                                    alt="MC in ACE 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Speaker in TOSCA (Talk About Scholarship) 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Delivered a scholarship-sharing session at TOSCA (Talk About Scholarship) 2025, 
                                providing insights, strategies, and personal experiences to help students pursue scholarship opportunities.
                            </p>
                        </div>

                    </div>

                    <!-- Card 5 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps3.png') }}"
                                    alt="Speaker in TOSCA (Talk About Scholarship) 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                MC in ACE 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as a Master of Ceremonies (MC) for ACE (Academic Completion and Excellence) 2025, 
                                facilitating a series of academic development sessions designed to support 
                                final-year students in navigating their thesis journey.
                            </p>
                        </div>

                    </div>

                    <!-- Card 6 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps7.jpeg') }}"
                                    alt="Filafest Awarding Day 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                MC-ing Filafest Awarding Day 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as the Master of Ceremonies (MC) for FILAFEST 2025 Awarding Day, 
                                facilitating the faculty's largest annual appreciation event and ensuring 
                                an engaging experience for participants throughout the celebration.
                            </p>
                        </div>

                    </div>

                    <!-- Card 7 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps8.jpg') }}"
                                    alt="Schotival 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                MC-ing Schotival 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as the Master of Ceremonies (MC) for SCHOTIVAL (Scholarship Festival), 
                                facilitating scholarship-sharing sessions and fostering an engaging environment 
                                for students exploring educational funding opportunities.
                            </p>
                        </div>
                    </div>
                        

                    <!-- Card 8  -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps6.jpeg') }}"
                                    alt="Speaker in Scholarship On The Go 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Speaker in Scholarship On The Go (SOTG) 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as a speaker at Scholarship On The Go (SOTG) 2025, sharing scholarship application strategies, 
                                essay-writing insights, and interview preparation tips to help students pursue 
                                competitive scholarship opportunities.
                            </p>
                        </div>

                    </div>

                    <!-- Card 9  -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/ps10.jpg') }}"
                                    alt="MC in Intrivia 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                MC-ing Intrivia 2025
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as the Master of Ceremonies (MC) for INTRIVIA, 
                                the orientation program for new Informatics Engineering students, 
                                facilitating event activities and fostering a welcoming environment for incoming students.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <button class="nextBtn absolute right-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-espresso/80 hover:text-espresso">
                <i class="fa-solid fa-chevron-right text-3xl"></i>
            </button>

            <div class=" mt-16 space-y-6 relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">
                <div class="border-t-2 border-espresso/40 w-full"></div>
                <div class="border-t-2 border-espresso/40 w-full"></div>
            </div>

        </div>
    </section>



    <!-- ORGANIZATIONS AND LEADERSHIPS -->
    <section class="w-full bg-espresso pt-16 pb-32 text-cream">
        <div class="max-w-7xl mx-auto px-4 relative group">

            <div class="relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">

            <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>

            <div class="py-4 text-center font-classic text-xl md:text-2xl lg:text-3xl">
                <h2 class="font-bold">
                    ORGANIZATIONS <span class="italic">AND LEADERSHIPS </span>
                </h2>
            </div>

            <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>

            </div>

            <button class="prevBtn absolute left-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-[#F6F3E4]/80 hover:text-[#F6F3E4]">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </button>

            <div class="overflow-hidden px-16 pt-20">
                <div class="carousel-track flex gap-8 transition-transform duration-500 ease-in-out will-change-transform">

                    <!-- Card 1 -->

                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/org1.jpeg') }}"
                                    alt="TSA Brawijaya 2026"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                TSA Brawijaya 2026
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Served as a Macro Project Staff at TSA Brawijaya 2026, contributing to 
                                community service initiatives focused on creating direct social 
                                impact through engagement and empowerment programs.
                            </p>
                        </div>

                    </div>

                    <!-- Card 2 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/org3_gsa.jpg') }}"
                                    alt="Google Student Ambassador 2026"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Google Student Ambassador 2026
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Selected as a Google Student Ambassador 2026, exploring Google technologies and digital 
                                tools while developing skills in content creation, community engagement, 
                                and personal branding through collaboration with student ambassadors nationwide.
                            </p>
                        </div>

                    </div>

                    <!-- Card 3 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/org2.jpeg') }}"
                                    alt="K-RISMA FILKOM UB 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                K-RISMA FILKOM UB 2025
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Joined K-RISMA FILKOM UB in 2025, developing skills in scientific writing, 
                                research, and academic communication while expanding professional 
                                networks and contributing to organizational events and committees.
                            </p>
                        </div>

                    </div>

                    <!-- Card 4 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/lombarobotiik.jpeg') }}"
                                    alt="ROBOTIIK FILKOM UB 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                ROBOTIIK FILKOM UB 2025
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Joined ROBOTIIK FILKOM UB in 2025, contributing to various 
                                robotics projects and competitions while developing technical and leadership skills.
                            </p>
                        </div>

                    </div>

                    <!-- Card 5 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/intern_krisma.jpg') }}"
                                    alt="Intern K-RISMA FILKOM UB 2025"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Intern K-RISMA FILKOM UB 2025
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Participated as an intern at K-RISMA FILKOM UB 2025, gaining hands-on experience 
                                in writing and journals and also contributing to various competitions.
                            </p>
                        </div>

                    </div>

                    <!-- Card 6 -->
                    <div class="bg-cream text-espresso rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">

                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/PPS22.jpg') }}"
                                    alt="Putra Putri SMANTA 2022"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Putra Putri SMANTA 2022
                            </h3>
                        </div>

                        <div class="border-t border-espresso"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Selected as Putri 1 SMANTA 2022, representing SMA Negeri 1 Talun as a student 
                                ambassador while promoting school values, leadership, academic excellence, 
                                and student engagement initiatives.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <button class="nextBtn absolute right-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-[#F6F3E4]/80 hover:text-[#F6F3E4]">
                <i class="fa-solid fa-chevron-right text-3xl"></i>
            </button>

            <div class=" mt-16 space-y-6 relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">
                <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>
                <div class="border-t-2 border-[#F6F3E4]/40 w-full"></div>
            </div>

        </div>
    </section>


    <!-- COMPETITIONS AND OTHERS-->
    <section class="w-full bg-cream pt-16 pb-32 text-espresso">
        <div class="max-w-7xl mx-auto px-4 relative group">

            <div class="relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">

            <div class="border-t-2 border-espresso/40 w-full"></div>

            <div class="py-4 text-center font-classic text-xl md:text-2xl lg:text-3xl">
                <h2 class="font-bold">
                    COMPETITIONS <span class="italic">AND OTHERS</span>
                </h2>
            </div>

            <div class="border-t-2 border-espresso/40 w-full"></div>

            </div>

            <button class="prevBtn absolute left-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-espresso/80 hover:text-espresso">
                <i class="fa-solid fa-chevron-left text-3xl"></i>
            </button>

            <div class="overflow-hidden px-16 pt-20">
                <div class="carousel-track flex gap-8 transition-transform duration-500 ease-in-out will-change-transform">

                    <!-- Card 1 -->

                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/publikasijurnal.png') }}"
                                    alt="MC Project"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                SahabatInklusi: AI-Powered Accessibility Platform for Disability Inclusion 
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                First author of a published research paper 
                                proposing an AI and Computer Vision-based platform to 
                                improve accessibility and disability inclusion.
                            </p>
                        </div>

                    </div>

                    <!-- Card 2 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/honorablemention2024.jpeg') }}"
                                    alt="Paper"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                Honorable Mention in StartUp Academy FILKOM UB 2024 
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Received Honorable Mention in the Health & Medical 
                                category for developing innovative technology-driven 
                                solutions addressing healthcare challenges.
                            </p>
                        </div>

                    </div>

                    <!-- Card 3 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/medali.png') }}"
                                    alt="Competition"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                1st Place — GELASI Essay Competition 2025 
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Won 1st Place in the Ventures & Eco-Tourism category 
                                for presenting innovative ideas and solutions through academic essay writing.
                            </p>
                        </div>

                    </div>

                    <!-- Card 4 -->
                    <div class="bg-espresso text-cream rounded-t-[2.5rem] rounded-b-[1.5rem] overflow-hidden shadow-xl hover:-translate-y-2 transition-all duration-500
                    flex flex-col flex-shrink-0 w-[360px]">
                        <div class="p-3">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-[2rem]">
                                <img src="{{ asset('images/project/medali.png') }}"
                                    alt="Paper"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-4 text-center">
                            <h3 class="font-classic font-extrabold text-base md:text-lg">
                                2nd Place — SELARAS Essay Competition 2025 
                            </h3>
                        </div>

                        <div class="border-t border-cream"></div>

                        <div class="px-5 py-6 text-center flex-grow flex items-start">
                            <p class="font-simple text-xs md:text-sm leading-relaxed w-full">
                                Won 2nd Place at SELARAS Essay Competition 2025 organized by 
                                Politeknik Negeri Jember for presenting innovative ideas through academic essay writing.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <button class="nextBtn absolute right-4 top-[58%] -translate-y-1/2 z-30 p-4 hover:scale-125 transition text-espresso/80 hover:text-espresso">
                <i class="fa-solid fa-chevron-right text-3xl"></i>
            </button>

            <div class=" mt-16 space-y-6 relative left-1/2 right-1/2 -translate-x-1/2 w-[100vw]">
                <div class="border-t-2 border-espresso/40 w-full"></div>
                <div class="border-t-2 border-espresso/40 w-full"></div>
            </div>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('section').forEach(section => {

            const track = section.querySelector('.carousel-track');
            const nextBtn = section.querySelector('.nextBtn');
            const prevBtn = section.querySelector('.prevBtn');

            if (!track || !nextBtn || !prevBtn) return;

            let currentIndex = 0;

            const totalCards = track.children.length;
            const visibleCards = 3;

            if (totalCards <= visibleCards) {
                nextBtn.style.display = 'none';
                prevBtn.style.display = 'none';
            }

            function updateCarousel() {
                const cardWidth =
                    track.children[0].offsetWidth + 32;

                track.style.transform =
                    `translateX(-${currentIndex * cardWidth}px)`;
            }

            nextBtn.addEventListener('click', () => {
                if (currentIndex < totalCards - visibleCards) {
                    currentIndex++;
                    updateCarousel();
                }
            });

            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });

            updateCarousel();

            window.addEventListener('resize', updateCarousel);

        });

        });
    </script>


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
                <a href="https://github.com" target="_blank" class="w-16 h-16 rounded-full bg-[#F6F3E4] flex justify-center items-center text-wine hover:scale-110 transition duration-300 shadow-xl">
                    <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </div>

        </div>
    </footer>
</html>