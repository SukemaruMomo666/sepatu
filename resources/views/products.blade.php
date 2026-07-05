<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produk - Momokick Subang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans antialiased text-black bg-white selection:bg-black selection:text-white pb-20">

    <!-- Navbar -->
    <nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-md border-b border-gray-200 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 sm:h-20 items-center">
                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden">
                    <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-black hover:text-gray-500 hover:bg-gray-100 focus:outline-none">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center justify-center flex-1 sm:justify-start">
                    <a href="/" class="font-heading text-xl sm:text-3xl tracking-wide uppercase flex items-center gap-2 sm:gap-2">
                        <span class="w-8 h-8 sm:w-10 sm:h-10 bg-black text-white rounded flex items-center justify-center text-xl sm:text-2xl pb-1">M</span>
                        MOMOKICK
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8 sm:flex-1 sm:justify-center font-bold text-sm tracking-widest uppercase">
                    <a href="/products" class="text-black border-b-2 border-black pb-1 hover:text-gray-500 transition-colors">Produk</a>
                    <a href="#" class="text-black hover:text-gray-500 transition-colors">Konfirmasi Pembayaran</a>
                    <a href="#" class="text-black hover:text-gray-500 transition-colors">Hubungi Kami</a>
                </div>

                <!-- Icons right -->
                <div class="flex items-center space-x-5">
                    <a href="#" class="text-black hover:text-gray-600 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </a>
                    <a href="#" class="text-black hover:text-gray-600 transition-colors hidden sm:block">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </a>
                    <a href="#" class="text-black hover:text-gray-600 transition-colors relative group">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <span class="absolute -top-1 -right-2 bg-red-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">2</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu panel -->
        <div x-show="open" class="sm:hidden border-t border-gray-200" style="display: none;">
            <div class="pt-2 pb-4 space-y-1 text-center font-bold tracking-wider uppercase text-sm">
                <a href="/products" class="block pl-3 pr-4 py-2 border-l-4 border-black text-black bg-gray-50">Produk</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300">Konfirmasi Pembayaran</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="pt-32 pb-10 bg-white text-center border-b border-gray-200">
        <h1 class="font-heading text-4xl sm:text-5xl tracking-[0.2em] uppercase">Semua Produk</h1>
        <div class="w-20 h-1 bg-black mx-auto mt-6"></div>
        
        <!-- Filter/Sort (Mockup) -->
        <div class="mt-8 flex flex-wrap justify-center gap-4 text-xs font-bold tracking-widest uppercase text-gray-500">
            <button class="text-black border-b border-black pb-1">Semua</button>
            <button class="hover:text-black transition-colors">Sepatu</button>
            <button class="hover:text-black transition-colors">Apparel</button>
            <button class="hover:text-black transition-colors">Aksesoris</button>
        </div>
    </div>

    <!-- Products Grid Section -->
    <div class="w-full max-w-[1600px] mx-auto px-4 sm:px-6 lg:px-8 py-16">
        
        <!-- Grid layout: 2 cols mobile, 3 cols tablet, 5 cols large desktop -->
        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-x-4 gap-y-12 sm:gap-x-6 sm:gap-y-14">
            
            <!-- Item 1 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1000&auto=format&fit=crop" alt="Momokick Red" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Crimson Runner Pro</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 2.308.500</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 1.615.950</span>
                </div>
            </a>

            <!-- Item 2 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?q=80&w=1000&auto=format&fit=crop" alt="Black Edition" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Stealth Max (Black)</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 2.308.500</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 1.615.950</span>
                </div>
            </a>

            <!-- Item 3 (Sold Out) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 left-0 bg-[#DC2626] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sold out</span>
                    <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?q=80&w=1000&auto=format&fit=crop" alt="White Sneaker" class="w-full h-auto object-contain mix-blend-multiply opacity-50 grayscale transition-transform duration-500 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 text-gray-500 line-clamp-2">Momokick Pure White Low</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 font-bold text-sm sm:text-base">Rp 169.290</span>
                </div>
            </a>

            <!-- Item 4 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1000&auto=format&fit=crop" alt="Yellow Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Speedster (Yellow)</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 1.795.500</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 1.256.850</span>
                </div>
            </a>

            <!-- Item 5 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?q=80&w=1000&auto=format&fit=crop" alt="Green Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Forest Run</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 307.800</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 169.290</span>
                </div>
            </a>
            
            <!-- Item 6 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?q=80&w=1000&auto=format&fit=crop" alt="Trail Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Trail Blazer (Sand)</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 2.150.000</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 1.555.000</span>
                </div>
            </a>

            <!-- Item 7 (Normal) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?q=80&w=1000&auto=format&fit=crop" alt="Vans Style" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Classic Canvas</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-black font-bold text-sm sm:text-base">Rp 899.000</span>
                </div>
            </a>
            
            <!-- Item 8 (Normal) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?q=80&w=1000&auto=format&fit=crop" alt="Boot Style" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Urban Boot</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-black font-bold text-sm sm:text-base">Rp 1.850.000</span>
                </div>
            </a>
            
            <!-- Item 9 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?q=80&w=1000&auto=format&fit=crop" alt="Blue Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Aqua Runner</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 1.500.000</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 1.150.000</span>
                </div>
            </a>
            
            <!-- Item 10 (Sale) -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#cfcfcf] aspect-[4/5] flex items-center justify-center p-4 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-[#22C55E] text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?q=80&w=1000&auto=format&fit=crop" alt="Running Shoes" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 drop-shadow-xl">
                </div>
                <h3 class="font-heading text-lg sm:text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors line-clamp-2">Momokick Marathon Elite</h3>
                <div class="flex flex-col gap-1">
                    <span class="text-gray-500 line-through text-xs font-semibold">Rp 2.800.000</span>
                    <span class="text-[#3b5998] font-bold text-sm sm:text-base">Rp 1.999.000</span>
                </div>
            </a>

        </div>
        
        <!-- Pagination -->
        <div class="mt-20 flex justify-center items-center space-x-2">
            <button class="w-10 h-10 border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition-colors">&laquo;</button>
            <button class="w-10 h-10 bg-black text-white flex items-center justify-center font-bold">1</button>
            <button class="w-10 h-10 border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition-colors font-bold">2</button>
            <button class="w-10 h-10 border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition-colors font-bold">3</button>
            <button class="w-10 h-10 border border-gray-300 flex items-center justify-center hover:bg-black hover:text-white transition-colors">&raquo;</button>
        </div>
    </div>

    <!-- Footer Minimal -->
    <footer class="bg-white border-t border-gray-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-1">
                    <a href="/" class="font-heading text-3xl tracking-wide uppercase flex items-center gap-2 mb-6">
                        <span class="w-8 h-8 bg-black text-white rounded flex items-center justify-center text-xl pb-1">M</span>
                        MOMOKICK
                    </a>
                    <p class="text-gray-500 text-xs leading-relaxed">
                        Lahir di jalanan Subang, diciptakan untuk para pemberani. Kami menyediakan sepatu kualitas terbaik se-Indonesia bagi mereka yang selalu mendobrak batas.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-heading text-lg tracking-widest uppercase mb-6">Tautan Berguna</h4>
                    <ul class="space-y-3 text-xs font-semibold text-gray-600">
                        <li><a href="#" class="hover:text-black">Profil Perusahaan</a></li>
                        <li><a href="#" class="hover:text-black">Jadi Mitra Kami</a></li>
                        <li><a href="#" class="hover:text-black">Tim Kami</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-heading text-lg tracking-widest uppercase mb-6">Informasi</h4>
                    <ul class="space-y-3 text-xs font-semibold text-gray-600">
                        <li><a href="#" class="hover:text-black">Konfirmasi Pembayaran</a></li>
                        <li><a href="#" class="hover:text-black">Lacak Pesanan</a></li>
                        <li><a href="#" class="hover:text-black">Kebijakan Pengembalian</a></li>
                        <li><a href="#" class="hover:text-black">Panduan Ukuran</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-heading text-lg tracking-widest uppercase mb-6">Layanan Pelanggan</h4>
                    <ul class="space-y-2 text-xs text-gray-600">
                        <li>Layanan Pembelian Online</li>
                        <li>Sen - Sab, 09:00 - 17:00 WIB</li>
                        <li class="mt-4 font-bold text-black">WhatsApp: +62 812 3456 7890</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-100 pt-8 flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-400 uppercase tracking-widest">
                <p>&copy; 2026 Momokick Subang. Hak Cipta Dilindungi.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-black">Instagram</a>
                    <a href="#" class="hover:text-black">TikTok</a>
                    <a href="#" class="hover:text-black">YouTube</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Bottom Navigation (App-like feel) -->
    <div class="sm:hidden fixed bottom-0 left-0 right-0 bg-black text-white h-16 flex justify-around items-center z-50 rounded-t-3xl border-t border-gray-800 shadow-[0_-5px_20px_rgba(0,0,0,0.3)]">
        <a href="/" class="flex flex-col items-center justify-center w-full h-full text-gray-500">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        </a>
        <a href="/products" class="flex flex-col items-center justify-center w-full h-full text-white relative">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        </a>
        <a href="#" class="flex flex-col items-center justify-center w-full h-full text-gray-500">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        </a>
        <a href="#" class="flex flex-col items-center justify-center w-full h-full text-gray-500">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </a>
    </div>

</body>
</html>
