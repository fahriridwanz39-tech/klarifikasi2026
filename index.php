<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Klarifikasi Khusus Alzena Fausta Azalia 🎀</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts: Fredoka & Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600;700&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <!-- Canvas Confetti Library -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        hkPink: '#ffb6c1',
                        hkDeepPink: '#ff69b4',
                        hkLightBg: '#fff0f5',
                        hkRed: '#ff4d6d',
                        hkPurple: '#e0b0ff'
                    },
                    fontFamily: {
                        fredoka: ['Fredoka', 'sans-serif'],
                        quicksand: ['Quicksand', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #fff0f5;
            background-image: radial-gradient(#ffb6c1 1.5px, transparent 1.5px), radial-gradient(#ffb6c1 1.5px, #fff0f5 1.5px);
            background-size: 60px 60px;
            background-position: 0 0, 30px 30px;
            overflow-x: hidden;
        }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(3deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Heart animation */
        @keyframes heartBeat {
            0% { transform: scale(1); }
            14% { transform: scale(1.15); }
            28% { transform: scale(1); }
            42% { transform: scale(1.15); }
            70% { transform: scale(1); }
        }
        .animate-heartbeat {
            animation: heartBeat 2.5s infinite;
        }

        /* Envelope Flip & Card Effects */
        .perspective {
            perspective: 1000px;
        }
        .card-inner {
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }
        .card-inner.is-flipped {
            transform: rotateY(180deg);
        }
        .card-front, .card-back {
            backface-visibility: hidden;
        }
        .card-back {
            transform: rotateY(180deg);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #fff0f5;
        }
        ::-webkit-scrollbar-thumb {
            background: #ffb6c1;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #ff69b4;
        }
    </style>
</head>
<body class="min-h-screen text-gray-800 relative pb-16">

    <!-- Floating Background Decor Items -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-10 left-8 text-hkDeepPink opacity-40 text-4xl animate-float" style="animation-delay: 0s;">🎀</div>
        <div class="absolute top-1/4 right-10 text-hkPink opacity-50 text-5xl animate-float" style="animation-delay: 1s;">✨</div>
        <div class="absolute bottom-1/3 left-12 text-hkRed opacity-40 text-4xl animate-float" style="animation-delay: 2s;">💖</div>
        <div class="absolute bottom-20 right-16 text-hkDeepPink opacity-40 text-4xl animate-float" style="animation-delay: 1.5s;">🌸</div>
    </div>

    <!-- Main Container -->
    <div class="max-w-4xl mx-auto px-4 py-8 relative z-10">

        <!-- Header Hello Kitty -->
        <header class="text-center mb-10">
            <!-- Hello Kitty Bow SVG Banner -->
            <div class="flex justify-center mb-3">
                <svg width="80" height="60" viewBox="0 0 100 80" class="drop-shadow-md animate-bounce">
                    <!-- Ribbon Bow -->
                    <path d="M 50 40 C 30 20, 10 30, 20 50 C 30 65, 45 45, 50 40 Z" fill="#ff4d6d" />
                    <path d="M 50 40 C 70 20, 90 30, 80 50 C 70 65, 55 45, 50 40 Z" fill="#ff4d6d" />
                    <circle cx="50" cy="40" r="10" fill="#ff758f" />
                    <circle cx="50" cy="40" r="7" fill="#ffb6c1" />
                </svg>
            </div>
            
            <h1 class="font-fredoka text-3xl md:text-5xl font-bold text-hkDeepPink drop-shadow-sm mb-2">
                Surat Klarifikasi Spesial 🎀
            </h1>
        </header>

        <!-- Photo & Hello Kitty Mascot Card -->
        <div class="bg-white/90 backdrop-blur-md rounded-3xl p-6 md:p-8 border-4 border-pink-300 shadow-xl mb-12 relative">
            <div class="flex flex-col md:flex-row items-center justify-around gap-6">
                
                <!-- Hello Kitty Illustration Left -->
                <div class="w-32 h-32 md:w-40 md:h-40 flex-shrink-0 flex items-center justify-center bg-pink-100 rounded-full border-4 border-pink-300 relative shadow-inner">
                    <!-- Hello Kitty SVG Icon -->
                    <svg class="w-24 h-24" viewBox="0 0 100 100">
                        <ellipse cx="50" cy="55" rx="38" ry="30" fill="white" stroke="#333" stroke-width="3"/>
                        <path d="M 20 35 L 12 15 L 35 28 Z" fill="white" stroke="#333" stroke-width="3"/>
                        <path d="M 80 35 L 88 15 L 65 28 Z" fill="white" stroke="#333" stroke-width="3"/>
                        <path d="M 22 24 C 15 15, 8 20, 18 30 C 22 35, 26 28, 28 25 Z" fill="#ff4d6d" stroke="#333" stroke-width="2"/>
                        <path d="M 34 24 C 41 15, 48 20, 38 30 C 34 35, 30 28, 28 25 Z" fill="#ff4d6d" stroke="#333" stroke-width="2"/>
                        <circle cx="28" cy="25" r="4" fill="#ff758f" stroke="#333" stroke-width="2"/>
                        <ellipse cx="33" cy="55" rx="3.5" ry="5" fill="#333"/>
                        <ellipse cx="67" cy="55" rx="3.5" ry="5" fill="#333"/>
                        <ellipse cx="50" cy="61" rx="4" ry="3" fill="#ffeb3b" stroke="#333" stroke-width="1.5"/>
                        <line x1="12" y1="50" x2="24" y2="53" stroke="#333" stroke-width="2"/>
                        <line x1="10" y1="58" x2="23" y2="58" stroke="#333" stroke-width="2"/>
                        <line x1="13" y1="66" x2="24" y2="63" stroke="#333" stroke-width="2"/>
                        <line x1="88" y1="50" x2="76" y2="53" stroke="#333" stroke-width="2"/>
                        <line x1="90" y1="58" x2="77" y2="58" stroke="#333" stroke-width="2"/>
                        <line x1="87" y1="66" x2="76" y2="63" stroke="#333" stroke-width="2"/>
                    </svg>
                    <!-- Floating heart tag -->
                    <span class="absolute -top-2 -right-2 bg-hkRed text-white text-xs px-2 py-1 rounded-full font-bold shadow">FOR Zetanya atuu </span>
                </div>

                <!-- Alzena's Photo Frame -->
                <div class="text-center relative">
                    <div class="relative inline-block">
                        <div class="w-44 h-44 md:w-52 md:h-52 rounded-2xl border-4 border-dashed border-pink-400 p-2 bg-pink-50 shadow-md relative overflow-hidden group">
                            <img id="alzenaPhoto" 
                                 src="https://placehold.co/400x400/ffb6c1/ffffff?text=Foto+Bibiy🎀" 
                                 alt="Bibiy zeta" 
                                 class="w-full h-full object-cover rounded-xl transition duration-300 group-hover:scale-105">
                        </div>
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-hkRed text-white text-xl px-3 py-1 rounded-full shadow-lg">
                            🎀
                        </div>
                    </div>

                    <!-- Change Photo Button & Upload Input -->
                    <div class="mt-3">
                        <label for="uploadPhoto" class="cursor-pointer text-xs font-bold text-pink-600 bg-pink-100 hover:bg-pink-200 px-3 py-1.5 rounded-full border border-pink-300 transition duration-200 inline-flex items-center gap-1 shadow-sm">
                            <i class="fa-solid fa-camera"></i> Ganti Foto Bibiy 
                        </label>
                        <input type="file" id="uploadPhoto" accept="image/*" class="hidden" onchange="previewImage(event)">
                        <p class="text-[11px] text-gray-400 mt-1">*Klik tombol di atas untuk memasukkan foto Bibiy yang paling cantik!</p>
                    </div>
                </div>

                <!-- Hello Kitty Illustration Right -->
                <div class="hidden md:flex w-36 h-36 flex-shrink-0 items-center justify-center bg-pink-100 rounded-full border-4 border-pink-300 relative shadow-inner">
                    <span class="text-6xl animate-bounce">💖</span>
                    <span class="absolute bottom-2 text-xs font-fredoka font-bold text-pink-600">For Bibiy 🌸</span>
                </div>

            </div>
        </div>

        <!-- Section Instructions -->
        <div class="text-center mb-6">
            <p class="font-fredoka text-xl text-pink-700 font-semibold animate-pulse">
                👇 Klik 2 Surat Rahasia Di Bawah Ini Untuk Membuka Surat Klarifikasi Bibuu 👇
            </p>
        </div>

        <!-- 2 Clarification Cards Grid -->
        <div class="grid md:grid-cols-2 gap-8 mb-14">
            
            <!-- CARD 1 -->
            <div class="perspective cursor-pointer" onclick="toggleCard('card1')">
                <div id="card1" class="card-inner relative w-full h-80 rounded-3xl shadow-xl bg-white border-4 border-pink-300">
                    
                    <!-- Card 1 Front -->
                    <div class="card-front absolute inset-0 rounded-3xl p-6 bg-gradient-to-br from-pink-100 via-white to-pink-200 flex flex-col justify-between items-center text-center">
                        <div class="bg-hkRed text-white text-xs font-bold px-4 py-1 rounded-full shadow">
                            KLARIFIKASI MINUM ES 🥤 (11/11/26)
                        </div>
                        <div class="my-auto">
                            <div class="text-6xl mb-3 animate-float">🍧</div>
                            <h3 class="font-fredoka text-2xl font-bold text-hkDeepPink">
                                Surat Klarifikasi Bibuu
                            </h3>
                            <p class="text-xs text-gray-500 mt-2 font-medium">Klik surat ini untuk membaca surat asli... 💌</p>
                        </div>
                        <span class="text-xs bg-pink-300 text-pink-800 font-bold px-3 py-1 rounded-full">Buka Surat ✨</span>
                    </div>

                    <!-- Card 1 Back (Content) -->
                    <div class="card-back absolute inset-0 rounded-3xl p-6 bg-white border-2 border-pink-400 flex flex-col justify-between text-left overflow-y-auto">
                        <div>
                            <div class="flex items-center justify-between border-b pb-2 mb-3 border-pink-200">
                                <h4 class="font-fredoka font-bold text-hkDeepPink text-base">bibuu 11 november 2026 🎀</h4>
                                <span class="text-xs bg-pink-100 text-pink-600 font-bold px-2 py-0.5 rounded-full">11/11/26</span>
                            </div>
                            <p class="text-sm text-gray-700 leading-relaxed font-medium bg-pink-50 p-3 rounded-2xl border border-pink-200 italic">
                                "bibuu 11 november 2026. izin klarifikasi dan menjelaskan disini karena bibu udah minum es kemarin dan menyebabkan tenggorokan bibu sakit, dan disini bibu cerita sama zetanya kalo buat khawatir/marah dan bibuu ga bakal minum es lagi selama sakit. bibuu minta maaf yaaa samaa zetanya btw ini uda minum vitamin ko sama obat."
                            </p>
                        </div>
                        <div class="text-right mt-2">
                            <span class="text-xs font-bold text-pink-500 bg-pink-50 px-3 py-1 rounded-full border border-pink-200">Klik lagi untuk tutup</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- CARD 2 -->
            <div class="perspective cursor-pointer" onclick="toggleCard('card2')">
                <div id="card2" class="card-inner relative w-full h-80 rounded-3xl shadow-xl bg-white border-4 border-pink-300">
                    
                    <!-- Card 2 Front -->
                    <div class="card-front absolute inset-0 rounded-3xl p-6 bg-gradient-to-br from-pink-100 via-white to-pink-200 flex flex-col justify-between items-center text-center">
                        <div class="bg-hkRed text-white text-xs font-bold px-4 py-1 rounded-full shadow">
                            CATATAN BIBUU 💊 (11/11/26)
                        </div>
                        <div class="my-auto">
                            <div class="text-6xl mb-3 animate-float" style="animation-delay: 1s;">💊</div>
                            <h3 class="font-fredoka text-2xl font-bold text-hkDeepPink">
                                Catatan Kesehatan
                            </h3>
                            <p class="text-xs text-gray-500 mt-2 font-medium">Klik surat ini untuk membaca surat kedua... 💌</p>
                        </div>
                        <span class="text-xs bg-pink-300 text-pink-800 font-bold px-3 py-1 rounded-full">Buka Surat ✨</span>
                    </div>

                    <!-- Card 2 Back (Content) -->
                    <div class="card-back absolute inset-0 rounded-3xl p-6 bg-white border-2 border-pink-400 flex flex-col justify-between text-left overflow-y-auto">
                        <div>
                            <div class="flex items-center justify-between border-b pb-2 mb-3 border-pink-200">
                                <h4 class="font-fredoka font-bold text-hkDeepPink text-base">Catatan Sehat Bibuu 🌷</h4>
                                <span class="text-xs bg-pink-100 text-pink-600 font-bold px-2 py-0.5 rounded-full">11/11/26</span>
                            </div>
                            <p class="text-sm text-gray-700 leading-relaxed font-medium">
                                Bibuu pastikan bakal rajin minum obat sama vitaminnya sampai sembuh total, dan gak bakal nyentuh es sama sekali selama sakit! Terima kasih banyak sudah diingatkan yaa Zetanya atuu! 💖🌸✨
                            </p>
                        </div>
                        <div class="text-right mt-2">
                            <span class="text-xs font-bold text-pink-500 bg-pink-50 px-3 py-1 rounded-full border border-pink-200">Klik lagi untuk tutup</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Interactive Forgiveness Section -->
        <div class="bg-gradient-to-r from-pink-200 via-white to-pink-200 rounded-3xl p-8 border-4 border-pink-400 shadow-2xl text-center relative overflow-hidden">
            
            <h2 class="font-fredoka text-2xl md:text-3xl font-bold text-hkDeepPink mb-3">
                Apakah Zetanya atu Mau Menerima Klarifikasi & Membuka Hati Untuk Bibuu? 🥺
            </h2>
            <p class="text-gray-600 text-sm mb-8 font-medium">
                Pilih jawaban bibiy secara jujur yaa di bawah ini! (11/11/26) 👇
            </p>

            <!-- Buttons Area -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 min-h-[80px] relative" id="buttonContainer">
                
                <!-- Accept Button -->
                <button onclick="acceptApology()" 
                        class="bg-gradient-to-r from-pink-500 to-hkRed text-white font-fredoka font-bold text-xl px-10 py-4 rounded-full shadow-lg hover:shadow-2xl hover:scale-110 active:scale-95 transition duration-200 animate-heartbeat flex items-center gap-2 z-20">
                    <span>dimaafin aja 💖</span>
                    <span>🎀</span>
                </button>

                <!-- Reject Runaway Button -->
                <button id="runawayBtn" 
                        onmouseover="moveButton()" 
                        onclick="moveButton()" 
                        class="bg-gray-200 text-gray-600 font-fredoka font-bold text-lg px-8 py-3 rounded-full shadow border-2 border-gray-300 transition-all duration-150 z-10">
                    Enggak 😜
                </button>

            </div>
        </div>

        <!-- Celebration Modal Pop-up -->
        <div id="celebModal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 flex items-center justify-center p-4 hidden">
            <div class="bg-white rounded-3xl p-8 max-w-md w-full border-4 border-pink-400 text-center shadow-2xl relative transform animate-bounce-once">
                
                <div class="text-6xl mb-4">🎉 🎀 🥳</div>
                
                <h3 class="font-fredoka text-3xl font-bold text-hkDeepPink mb-2">
                    YAYYYY! MAKASIH ZETANYA ATUU! 💖
                </h3>
                
                <p class="text-gray-700 font-medium mb-6 leading-relaxed">
                    Makasih banyak yaaa <span class="font-bold text-hkRed">Zetanya atuu</span>! Bibuu janji gak minum es lagi pas sakit dan bakal selalu ingat pesan bibiy minum obat sama vitamin 🎀✨🌸
                </p>

                <!-- Dance Hello Kitty Gift -->
                <div class="bg-pink-100 rounded-2xl p-4 mb-6 border-2 border-pink-300 flex justify-center items-center gap-2">
                    <span class="text-3xl animate-bounce">🎀</span>
                    <span class="font-fredoka text-pink-600 font-bold text-sm">Hello Kitty Approved: Fahri & zeta </span>
                    <span class="text-3xl animate-bounce" style="animation-delay: 0.2s;">🐱</span>
                </div>

                <button onclick="closeModal()" 
                        class="bg-hkDeepPink hover:bg-pink-600 text-white font-fredoka font-bold px-8 py-3 rounded-full shadow-md transition duration-200">
                    Tutup & Senyum Lagi 🫂
                </button>
            </div>
        </div>

        <!-- Footer & GitHub Tutorial Section -->
        <footer class="mt-16 text-center text-xs text-pink-600">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 border border-pink-200 shadow-sm max-w-2xl mx-auto mb-4 text-left">
                <h5 class="font-bold text-pink-700 text-sm mb-2 flex items-center gap-1">
                    <i class="fa-brands fa-github"></i> Panduan Upload Website Ini ke GitHub Pages:
                </h5>
                <ol class="list-decimal list-inside space-y-1 text-gray-600">
                    <li>Buat akun & repository baru di <b>GitHub.com</b> (contoh nama repo: <code class="bg-pink-100 px-1 rounded">buat-zetanya</code>).</li>
                    <li>Upload file ini dan beri nama file <b><code class="bg-pink-100 px-1 rounded">index.html</code></b>.</li>
                    <li>Buka menu <b>Settings</b> > <b>Pages</b> pada repository GitHub Anda.</li>
                    <li>Pada bagian <i>Branch</i>, pilih <b>main</b> / <b>master</b> lalu klik <b>Save</b>.</li>
                    <li>Tunggu 1-2 menit, link website Hello Kitty untuk Zetanya siap dikirim! 🎀</li>
                </ol>
            </div>
            <p>Dibuat bener bener dibuat <b>Bibuu</b> untuk <b>Zetanya atuu</b> (11/11/26) 💖</p>
        </footer>

    </div>

    <!-- JavaScript Interactions -->
    <script>
        // Flip Card Logic
        function toggleCard(cardId) {
            const card = document.getElementById(cardId);
            card.classList.toggle('is-flipped');
            // Trigger light heart confetti on card open
            confetti({
                particleCount: 15,
                spread: 40,
                origin: { y: 0.6 },
                colors: ['#ffb6c1', '#ff69b4', '#ff4d6d']
            });
        }

        // Preview uploaded photo for Alzena
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function(){
                const output = document.getElementById('alzenaPhoto');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }

        // Runaway "Enggak" Button Logic
        function moveButton() {
            const btn = document.getElementById('runawayBtn');
            const container = document.getElementById('buttonContainer');
            
            // Calculate random positions within screen bounds
            const x = Math.random() * (window.innerWidth - 120) - (window.innerWidth / 2 - 60);
            const y = Math.random() * 200 - 100;

            btn.style.position = 'relative';
            btn.style.transform = `translate(${x}px, ${y}px)`;
        }

        // Forgiveness Acceptance & Celebration
        function acceptApology() {
            // Show Modal
            document.getElementById('celebModal').classList.remove('hidden');

            // Trigger Massive Heart Confetti
            var count = 200;
            var defaults = {
                origin: { y: 0.7 }
            };

            function fire(particleRatio, opts) {
                confetti(Object.assign({}, defaults, opts, {
                    particleCount: Math.floor(count * particleRatio)
                }));
            }

            fire(0.25, {
                spread: 26,
                startVelocity: 55,
                colors: ['#ff4d6d', '#ff69b4']
            });
            fire(0.2, {
                spread: 60,
                colors: ['#ffffff', '#ffb6c1']
            });
            fire(0.35, {
                spread: 100,
                decay: 0.91,
                scalar: 0.8
            });
            fire(0.1, {
                spread: 120,
                startVelocity: 25,
                decay: 0.92,
                colors: ['#e0b0ff', '#ff4d6d']
            });
            fire(0.1, {
                spread: 120,
                startVelocity: 45,
            });
        }

        function closeModal() {
            document.getElementById('celebModal').classList.add('hidden');
        }
    </script>
</body>
</html>