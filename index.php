<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untuk Zetanyaa Atuu 💖</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Fredoka & Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        hkPink: '#ffb6c1',
                        hkSoftPink: '#fff0f3',
                        hkDeepPink: '#ff69b4',
                        hkRed: '#ff3366',
                    },
                    fontFamily: {
                        fredoka: ['Fredoka', 'sans-serif'],
                        quicksand: ['Quicksand', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #fff0f3;
            background-image: radial-gradient(#ffb6c1 1px, transparent 1px);
            background-size: 24px 24px;
        }
        .perspective-1000 {
            perspective: 1000px;
        }
        .transform-style-3d {
            transform-style: preserve-3d;
        }
        .backface-hidden {
            backface-visibility: hidden;
        }
        .rotate-y-180 {
            transform: rotateY(180deg);
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-between p-4 sm:p-6 overflow-x-hidden text-gray-700">

    <!-- Floating Hello Kitty Bow Elements (Decorative) -->
    <div class="fixed top-4 left-4 text-hkDeepPink text-2xl animate-bounce pointer-events-none opacity-70">🎀</div>
    <div class="fixed top-10 right-8 text-hkRed text-2xl animate-pulse pointer-events-none opacity-70">💖</div>
    <div class="fixed bottom-8 left-10 text-hkDeepPink text-3xl animate-pulse pointer-events-none opacity-70">🌸</div>
    <div class="fixed bottom-12 right-6 text-hkDeepPink text-2xl animate-bounce pointer-events-none opacity-70">🎀</div>

    <!-- Main Container -->
    <main class="w-full max-w-md mx-auto flex flex-col items-center my-auto space-y-6 z-10">

        <!-- Header / Title -->
        <div class="text-center space-y-2">
            <span class="inline-block bg-white/80 backdrop-blur-sm text-hkDeepPink text-xs font-bold px-3 py-1 rounded-full shadow-sm mb-1 border border-pink-200">
                🎀 Special Message For You 🎀
            </span>
            <h1 class="text-3xl sm:text-4xl font-fredoka font-bold text-hkRed tracking-wide drop-shadow-sm">
                Surat Klarifikasi
            </h1>
        </div>

        <!-- Photo Frame (Hello Kitty Style) -->
        <div class="relative group">
            <div class="absolute -top-3 -right-2 text-3xl z-20 animate-bounce">🎀</div>
            <div class="w-36 h-36 sm:w-40 sm:h-40 rounded-full p-2 bg-white border-4 border-hkDeepPink shadow-lg overflow-hidden relative flex items-center justify-center bg-pink-50">
                <!-- Clickable Image Upload Feature -->
                <label for="photoInput" class="w-full h-full rounded-full overflow-hidden cursor-pointer relative block group">
                    <img id="myPhoto" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80" alt="Foto Profil" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white text-xs font-bold text-center p-1">
                        Ganti Foto 📷
                    </div>
                </label>
                <input type="file" id="photoInput" accept="image/*" class="hidden" onchange="loadFile(event)">
            </div>
            <div class="absolute -bottom-2 -left-2 text-2xl z-20">🌸</div>
        </div>

        <!-- Interactive Cards Section (Flip Card) -->
        <div class="w-full perspective-1000 h-80 sm:h-88 cursor-pointer" onclick="toggleCard()">
            <div id="cardInner" class="relative w-full h-full duration-700 transform-style-3d shadow-xl rounded-3xl">
                
                <!-- Front Side of Card -->
                <div class="absolute inset-0 w-full h-full bg-white border-4 border-hkPink rounded-3xl p-6 flex flex-col justify-between backface-hidden shadow-md">
                    <div class="flex justify-between items-center text-hkDeepPink">
                        <span class="text-lg">💌</span>
                        <span class="text-xs font-bold uppercase tracking-wider bg-pink-100 px-3 py-1 rounded-full">Ketuk untuk Membuka</span>
                        <span class="text-lg">✨</span>
                    </div>
                    <div class="text-center my-auto space-y-3">
                        <h2 class="text-2xl font-fredoka font-bold text-hkRed">Untuk: zetanyaa atuu</h2>
                        <p class="text-sm text-gray-500 italic">"Ada pesan penting yang harus dibaca nih..."</p>
                    </div>
                    <div class="text-center text-xs text-pink-400 font-semibold">
                        Tap kartu ini ya! 👇
                    </div>
                </div>

                <!-- Back Side of Card (Content) -->
                <div class="absolute inset-0 w-full h-full bg-white border-4 border-hkDeepPink rounded-3xl p-5 sm:p-6 flex flex-col justify-between backface-hidden rotate-y-180 overflow-y-auto shadow-md">
                    <div class="text-right text-xs font-bold text-pink-400">11/11/26</div>
                    <div class="space-y-2 text-xs sm:text-sm text-gray-600 leading-relaxed my-auto">
                        <p>izin klarifikasi dan meminta maaf disini karena bibuu udah minum es kemarin dan menyebabkan tenggorokan bibu sakit.</p>
                        <p>dan disini bibu minta maaf sama bibiy kalo buat bibi marah dan bibuu ga bakal minum es lagi selama sakit.</p>
                        <p>bibuu minta maaf yaaa samaa bibiyyyyy btw ini uda minum vitamin ko sama obat.</p>
                        <p class="font-bold text-hkRed pt-1">terimakasih banyak sudah di ingatkan yaa zetanya atuu!</p>
                    </div>
                    <div class="text-center text-xs text-pink-500 font-bold pt-1">
                        🔄 Ketuk untuk membalik surat
                    </div>
                </div>

            </div>
        </div>

        <!-- Action Question & Buttons -->
        <div class="w-full bg-white/90 backdrop-blur-sm border-2 border-pink-200 rounded-3xl p-5 text-center space-y-4 shadow-md">
            <h3 class="font-fredoka font-bold text-base text-gray-700">Dimaafin kan? 🥺</h3>
            <div class="flex items-center justify-center gap-4 relative h-12">
                <!-- Yes Button -->
                <button onclick="showSuccessModal()" class="bg-hkRed hover:bg-red-500 text-white font-fredoka font-bold px-6 py-2.5 rounded-full shadow-md transition-transform active:scale-95">
                    dimaafin aja 💖
                </button>
                <!-- Running / Escaping No Button -->
                <button id="noBtn" onmouseover="moveButton()" onclick="moveButton()" class="bg-gray-200 hover:bg-gray-300 text-gray-600 font-fredoka font-bold px-6 py-2.5 rounded-full shadow-sm transition-all absolute right-4 sm:right-8">
                    Enggak 😜
                </button>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="mt-6 text-center text-xs text-pink-600 z-10">
        <p>Dibuat bener bener dibuat <b>Bibuu</b> untuk <b>zetanyaa atuu</b> (11/11/26) 💖</p>
    </footer>

    <!-- Success Modal Pop-up -->
    <div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 hidden z-50">
        <div class="bg-white border-4 border-hkDeepPink rounded-3xl p-6 max-w-xs w-full text-center space-y-4 shadow-2xl animate-bounce-short">
            <div class="text-5xl">🎉✨</div>
            <h3 class="font-fredoka font-bold text-xl text-hkRed">Yeayy Dimaafin! 🥰</h3>
            <p class="text-xs text-gray-600">Makasih banyak yaa zetanyaa atuu tersayang! Bibuu janji ga minum es lagi deh pokoknya! 🥳💖</p>
            <button onclick="closeModal()" class="bg-hkDeepPink hover:bg-pink-600 text-white font-fredoka font-bold px-8 py-3 rounded-full shadow-md">
                Tutup & Senyum Lagi 🌸
            </button>
        </div>
    </div>

    <!-- JavaScript Interactions -->
    <script>
        // Flip Card Logic
        let isFlipped = false;
        function toggleCard() {
            isFlipped = !isFlipped;
            const cardInner = document.getElementById('cardInner');
            if (isFlipped) {
                cardInner.style.transform = 'rotateY(180deg)';
            } else {
                cardInner.style.transform = 'rotateY(0deg)';
            }
        }

        // Runaway Button Logic
        function moveButton() {
            const btn = document.getElementById('noBtn');
            const x = Math.random() * 160 - 80;
            const y = Math.random() * 80 - 40;
            btn.style.transform = `translate(${x}px, ${y}px)`;
        }

        // Modal Logic
        function showSuccessModal() {
            document.getElementById('successModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
        }

        // Photo Upload Preview
        function loadFile(event) {
            const image = document.getElementById('myPhoto');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>
</html>
