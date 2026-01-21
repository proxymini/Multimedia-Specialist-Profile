<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNSPRODUCTION - Creative Multimedia Agency</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@1,600&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                fontFamily: {
                    sans: ['Montserrat', 'sans-serif'],
                    serif: ['Playfair Display', 'serif'],
                },
                extend: {
                    colors: {
                        'jns-pink': '#f472b6',
                        'jns-dark': '#111827',
                        'jns-gray': '#F9FAFB',
                    },
                    backgroundImage: {
                        'grid-pattern': "url('https://www.transparenttextures.com/patterns/cubes.png')",
                    },
                    animation: {
                        'shine': 'shine 3s infinite',
                    },
                    keyframes: {
                        shine: {
                            '0%': { transform: 'translateX(-100%)' },
                            '20%': { transform: 'translateX(100%)' },
                            '100%': { transform: 'translateX(100%)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .clip-text-image { 
            background-clip: text; -webkit-background-clip: text; color: transparent; 
            background-image: url('https://images.unsplash.com/photo-1550684848-fac1c5b4e853?q=80&w=1000'); background-size: cover; 
        }
        @media (min-width: 768px) {
            .clip-path-slant { clip-path: polygon(25% 0%, 100% 0, 100% 100%, 0% 100%); }
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee { display: flex; animation: marquee 20s linear infinite; }
        
        /* Utility untuk Bahasa */
        .lang-en.hidden, .lang-id.hidden { display: none !important; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased overflow-x-hidden">

    <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 py-4 transition-all duration-300 shadow-sm">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 group">
                <img src="logo-jns.png" alt="JNS Logo" class="h-10 md:h-12 object-contain group-hover:scale-105 transition duration-300">
            </a>
            
            <div class="hidden md:flex items-center space-x-8 text-xs font-bold tracking-[0.2em] uppercase text-gray-600">
                <a href="#home" class="hover:text-jns-pink transition">Home</a>
                <a href="#about" class="hover:text-jns-pink transition">About</a>
                <a href="#services" class="hover:text-jns-pink transition">Services</a>
                <a href="#work" class="hover:text-jns-pink transition">Portfolio</a>
                
                <div class="flex items-center gap-2 border-l pl-6 border-gray-300">
                    <button onclick="switchLang('id')" class="lang-btn hover:text-jns-pink transition text-jns-pink font-extrabold" id="btn-id">ID</button>
                    <span class="text-gray-300">|</span>
                    <button onclick="switchLang('en')" class="lang-btn hover:text-jns-pink transition" id="btn-en">EN</button>
                </div>
            </div>

            <a href="#contact" class="hidden md:flex items-center gap-2 px-6 py-2 bg-jns-dark text-white rounded-full font-bold text-xs uppercase tracking-widest hover:bg-jns-pink transition transform hover:-translate-y-1 shadow-lg group">
                <span class="lang-id">Mulai Project</span>
                <span class="lang-en hidden">Start Project</span>
            </a>
        </div>
    </nav>

    <section id="home" class="relative min-h-[90vh] flex items-center pt-24 pb-12 overflow-hidden bg-white">
        <div class="absolute right-0 top-0 w-full md:w-3/5 h-full bg-jns-dark clip-path-slant hidden md:block z-0 pointer-events-none">
            <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?q=80&w=1920&auto=format&fit=crop" class="w-full h-full object-cover opacity-30 mix-blend-luminosity">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-transparent to-transparent"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="md:w-1/2 pt-10">
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-gray-100 border border-gray-200 rounded-full mb-8 shadow-sm" data-aos="fade-down">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-gray-600">Based in Bali, Indonesia</span>
                </div>
                
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-6 text-jns-dark" data-aos="fade-right" data-aos-delay="200">
                    <span class="lang-id">Kami Ciptakan <br><span class="font-serif italic text-transparent bg-clip-text bg-gradient-to-r from-jns-pink to-purple-600">Segalanya.</span></span>
                    <span class="lang-en hidden">We Craft <br><span class="font-serif italic text-transparent bg-clip-text bg-gradient-to-r from-jns-pink to-purple-600">Everything.</span></span>
                </h1>
                
                <p class="text-lg text-gray-500 mb-10 max-w-lg leading-relaxed font-medium border-l-4 border-jns-pink pl-6 bg-white/80 backdrop-blur-sm md:bg-transparent" data-aos="fade-right" data-aos-delay="400">
                    <span class="lang-id">JNSPRODUCTION adalah One-Stop Multimedia Solution. Dari Video Cinematic, Fotografi, hingga Motion Graphic & Ilustrasi Digital.</span>
                    <span class="lang-en hidden">JNSPRODUCTION is your One-Stop Multimedia Solution. From Cinematic Video, Photography, to Motion Graphics & Digital Illustrations.</span>
                </p>
                
                <div class="flex flex-col md:flex-row gap-4" data-aos="fade-up" data-aos-delay="600">
                    <a href="#services" class="relative overflow-hidden px-8 py-4 bg-jns-dark text-white rounded-lg font-bold shadow-lg hover:shadow-xl hover:-translate-y-1 transition duration-300 text-center group">
                        <div class="absolute inset-0 -translate-x-full group-hover:animate-shine bg-gradient-to-r from-transparent via-white/20 to-transparent z-10"></div>
                        <span class="relative z-20 flex items-center justify-center gap-2">
                            <span class="lang-id">Lihat Layanan</span>
                            <span class="lang-en hidden">Explore Services</span>
                        </span>
                    </a>
                    <a href="https://wa.me/628123456789" class="px-8 py-4 border-2 border-gray-200 text-gray-700 rounded-lg font-bold hover:border-jns-pink hover:text-jns-pink transition flex items-center justify-center gap-2 bg-white hover:shadow-lg">
                        <i class="fa-brands fa-whatsapp text-lg"></i> 
                        <span class="lang-id">Chat Admin</span>
                        <span class="lang-en hidden">Chat Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-jns-pink text-white py-3 overflow-hidden border-y-4 border-white relative z-20 shadow-lg">
        <div class="animate-marquee whitespace-nowrap flex gap-10 font-bold text-sm tracking-[0.3em] uppercase">
            <span>Videography</span> • <span>Photography</span> • <span>Motion Graphic</span> • <span>Poster Design</span> • <span>Illustration</span> •
            <span>Videography</span> • <span>Photography</span> • <span>Motion Graphic</span> • <span>Poster Design</span> • <span>Illustration</span> •
        </div>
    </div>

    <section id="about" class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2 relative" data-aos="fade-right">
                    <div class="relative z-10 p-4">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000&auto=format&fit=crop" alt="JNS Team" class="rounded-2xl shadow-2xl relative z-10 w-full">
                        <div class="absolute top-8 left-0 w-full h-full border-4 border-jns-pink/30 rounded-2xl -z-0 transform translate-x-4 translate-y-4"></div>
                        <div class="absolute -top-4 -right-2 md:-right-6 bg-white p-4 rounded-xl shadow-lg border border-gray-100 z-20">
                            <p class="text-3xl md:text-4xl font-bold text-jns-pink">5+</p>
                            <p class="text-[10px] md:text-xs font-bold text-gray-500 uppercase">Years Exp.</p>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2" data-aos="fade-left">
                    <h4 class="text-jns-pink font-bold tracking-widest uppercase mb-4 text-xs">Who We Are</h4>
                    <h2 class="text-4xl font-bold mb-6 text-jns-dark leading-tight">
                        <span class="lang-id">We Are a Collective of <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-jns-pink to-purple-600 font-serif italic">Creative Minds.</span></span>
                        <span class="lang-en hidden">We Are a Collective of <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-jns-pink to-purple-600 font-serif italic">Creative Minds.</span></span>
                    </h2>
                    
                    <p class="text-gray-500 mb-6 leading-relaxed text-lg">
                        <span class="lang-id">Berbasis di <span class="font-bold text-gray-800">Bali, Indonesia</span>, JNSPRODUCTION lahir dari hasrat untuk menggabungkan seni dan teknologi.</span>
                        <span class="lang-en hidden">Based in <span class="font-bold text-gray-800">Bali, Indonesia</span>, JNSPRODUCTION was born from a passion to merge art and technology.</span>
                    </p>
                    
                    <p class="text-gray-500 mb-8 leading-relaxed">
                        <span class="lang-id">Tim kami terdiri dari Videographer, Fotografer, Illustrator, dan Animator yang berdedikasi. Kami percaya bahwa setiap brand memiliki cerita unik.</span>
                        <span class="lang-en hidden">Our team consists of dedicated Videographers, Photographers, Illustrators, and Animators. We believe every brand has a unique story.</span>
                    </p>

                    <div class="grid grid-cols-2 gap-6 border-t border-gray-100 pt-8 mt-8">
                        <div>
                            <h4 class="text-2xl font-bold text-jns-dark">300+</h4>
                            <p class="text-sm text-gray-400">Projects Completed</p>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold text-jns-dark">98%</h4>
                            <p class="text-sm text-gray-400">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 bg-gray-50 bg-grid-pattern border-y border-gray-200">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-jns-pink font-bold text-xs tracking-widest uppercase">What We Do</span>
                <h3 class="text-3xl font-bold text-jns-dark mt-2">Creative Services</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transform transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-red-50 rounded-2xl flex items-center justify-center text-jns-pink text-2xl mb-6 group-hover:bg-jns-pink group-hover:text-white transition-all duration-500 transform group-hover:scale-110 group-hover:rotate-6 shadow-sm">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-jns-pink transition">Videography</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        <span class="lang-id">TVC, Company Profile, Music Video, dan Dokumentasi Event 4K.</span>
                        <span class="lang-en hidden">TVC, Company Profile, Music Video, and 4K Event Documentation.</span>
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transform transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-500 text-2xl mb-6 group-hover:bg-blue-500 group-hover:text-white transition-all duration-500 transform group-hover:scale-110 group-hover:-rotate-6 shadow-sm">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-blue-500 transition">Photography</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        <span class="lang-id">Foto Produk, Fashion Editorial, Food, dan Wedding.</span>
                        <span class="lang-en hidden">Product Photography, Fashion Editorial, Food, and Wedding.</span>
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transform transition-all duration-500 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center text-purple-500 text-2xl mb-6 group-hover:bg-purple-500 group-hover:text-white transition-all duration-500 transform group-hover:scale-110 group-hover:rotate-6 shadow-sm">
                        <i class="fa-solid fa-cube"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-purple-500 transition">Motion Graphic</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        <span class="lang-id">Animasi logo, Explainer Video 2D/3D, dan Visual Effect.</span>
                        <span class="lang-en hidden">Logo Animation, Explainer Video 2D/3D, and Visual Effects.</span>
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transform transition-all duration-500 group" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-14 h-14 bg-yellow-50 rounded-2xl flex items-center justify-center text-yellow-600 text-2xl mb-6 group-hover:bg-yellow-500 group-hover:text-white transition-all duration-500 transform group-hover:scale-110 group-hover:-rotate-6 shadow-sm">
                        <i class="fa-solid fa-pen-nib"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-yellow-500 transition">Poster & Design</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        <span class="lang-id">Desain Poster, Social Media Feeds, dan Branding Identity.</span>
                        <span class="lang-en hidden">Poster Design, Social Media Feeds, and Branding Identity.</span>
                    </p>
                </div>

                <div class="p-8 bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transform transition-all duration-500 group" data-aos="fade-up" data-aos-delay="500">
                    <div class="w-14 h-14 bg-green-50 rounded-2xl flex items-center justify-center text-green-500 text-2xl mb-6 group-hover:bg-green-500 group-hover:text-white transition-all duration-500 transform group-hover:scale-110 group-hover:rotate-6 shadow-sm">
                        <i class="fa-solid fa-paintbrush"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 group-hover:text-green-500 transition">Illustration</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        <span class="lang-id">Digital Painting, Character Design, dan Storyboard.</span>
                        <span class="lang-en hidden">Digital Painting, Character Design, and Storyboard.</span>
                    </p>
                </div>
                
                 <div class="p-8 bg-jns-dark rounded-2xl shadow-sm border border-gray-100 hover:shadow-2xl hover:-translate-y-3 transform transition-all duration-500 flex flex-col justify-center items-center text-center text-white group" data-aos="fade-up" data-aos-delay="600">
                    <div class="mb-6 transform transition-all duration-500 group-hover:scale-110 group-hover:rotate-12">
                        <i class="fa-solid fa-rocket text-4xl text-jns-pink"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">
                        <span class="lang-id">Butuh Custom?</span>
                        <span class="lang-en hidden">Need Custom?</span>
                    </h3>
                    <p class="text-gray-400 text-sm mb-6">
                        <span class="lang-id">Konsultasikan ide liarmu bersama tim kami.</span>
                        <span class="lang-en hidden">Consult your wild ideas with our team.</span>
                    </p>
                    <a href="https://wa.me/628123456789" class="px-8 py-3 bg-white text-jns-dark rounded-full font-bold text-sm hover:bg-jns-pink hover:text-white transition-all duration-300 shadow-md hover:shadow-lg hover:scale-105 active:scale-95">
                        <span class="lang-id">Hubungi Kami</span>
                        <span class="lang-en hidden">Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="work" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4" data-aos="fade-down">
                <div>
                    <h4 class="text-jns-pink font-bold tracking-widest uppercase mb-2 text-xs">Our Works</h4>
                    <h2 class="text-4xl font-bold text-jns-dark">Recent Projects</h2>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($projects as $index => $project)
                <div class="group relative cursor-pointer" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="overflow-hidden rounded-2xl shadow-lg aspect-[4/3] bg-gray-200 relative border border-gray-100">
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-in-out">
                        <div class="absolute inset-0 bg-jns-dark/70 opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col items-center justify-center text-center p-4">
                            <span class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center text-white text-lg border border-white mb-4 backdrop-blur-sm">
                                <i class="fa-solid fa-plus"></i>
                            </span>
                            <p class="text-white text-[10px] font-bold uppercase tracking-widest mb-1">{{ $project->category }}</p>
                        </div>
                    </div>
                    <div class="mt-4 px-2">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="w-2 h-2 rounded-full bg-jns-pink"></span>
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">{{ $project->category }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 group-hover:text-jns-pink transition">{{ $project->title }}</h3>
                    </div>
                </div>
                @empty
                <div class="col-span-3 py-24 text-center bg-white rounded-3xl border border-dashed border-gray-300">
                    <p class="text-gray-400 text-lg">Belum ada project.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="connect" class="py-20 bg-gray-50 border-t border-gray-100">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h4 class="text-jns-pink font-bold tracking-widest uppercase mb-4 text-xs">Social Media</h4>
            <h2 class="text-3xl md:text-4xl font-bold mb-10 text-jns-dark">
                <span class="lang-id">Hubungi Kami</span>
                <span class="lang-en hidden">Connect With Us</span>
            </h2>
            
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <a href="https://instagram.com/" class="group w-full md:w-auto flex items-center gap-4 px-8 py-5 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 min-w-[300px]">
                    <div class="w-12 h-12 bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-500 rounded-full flex items-center justify-center text-white text-2xl group-hover:rotate-12 transition">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="text-left">
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Follow Us</p>
                        <p class="text-lg font-bold text-jns-dark group-hover:text-jns-pink transition">@jnsproduction</p>
                    </div>
                </a>
                <a href="https://wa.me/628123456789" class="group w-full md:w-auto flex items-center gap-4 px-8 py-5 bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 min-w-[300px]">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white text-2xl group-hover:rotate-12 transition">
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                    <div class="text-left">
                        <p class="text-[10px] text-gray-400 font-bold uppercase tracking-wider">Fast Response</p>
                        <p class="text-lg font-bold text-jns-dark group-hover:text-green-600 transition">+62 812-3456-7890</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-jns-dark text-white pt-20 pb-10">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <div class="col-span-1 md:col-span-2">
                <img src="logo-jns.png" alt="Logo White" class="h-10 mb-8 brightness-0 invert opacity-90">
                <p class="text-gray-400 max-w-sm leading-relaxed text-sm mb-6">
                    JNSPRODUCTION<br>
                    Creative Multimedia Agency based in Bali.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-sm uppercase tracking-widest text-white">Contact</h4>
                <ul class="space-y-4 text-sm text-gray-400">
                    <li>hello@jnsproduction.com</li>
                    <li>+62 812 3456 7890</li>
                    <li>Bali, Indonesia</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 pt-8 text-center text-xs text-gray-600">
            <p>&copy; 2026 JNSPRODUCTION. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true, offset: 50 });

        // LOGIKA SWITCH BAHASA
        function switchLang(lang) {
            if(lang === 'en') {
                // Tampilkan Inggris, Sembunyikan Indo
                document.querySelectorAll('.lang-en').forEach(el => el.classList.remove('hidden'));
                document.querySelectorAll('.lang-id').forEach(el => el.classList.add('hidden'));
                
                // Ubah gaya tombol
                document.getElementById('btn-en').classList.add('text-jns-pink', 'font-extrabold');
                document.getElementById('btn-id').classList.remove('text-jns-pink', 'font-extrabold');
            } else {
                // Tampilkan Indo, Sembunyikan Inggris
                document.querySelectorAll('.lang-id').forEach(el => el.classList.remove('hidden'));
                document.querySelectorAll('.lang-en').forEach(el => el.classList.add('hidden'));

                // Ubah gaya tombol
                document.getElementById('btn-id').classList.add('text-jns-pink', 'font-extrabold');
                document.getElementById('btn-en').classList.remove('text-jns-pink', 'font-extrabold');
            }
        }
    </script>
</body>
</html>