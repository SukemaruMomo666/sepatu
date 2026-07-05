<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Momokick - Sepatu Terbaik Subang | Official</title>
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
                    <a href="#" class="font-heading text-xl sm:text-3xl tracking-wide uppercase flex items-center gap-2 sm:gap-2">
                        <span class="w-8 h-8 sm:w-10 sm:h-10 bg-black text-white rounded flex items-center justify-center text-xl sm:text-2xl pb-1">M</span>
                        MOMOKICKS
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8 sm:flex-1 sm:justify-center font-bold text-sm tracking-widest uppercase">
                    <a href="/products" class="text-black hover:text-gray-500 transition-colors">Produk</a>
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
                <a href="/products" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300">Produk</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300">Konfirmasi Pembayaran</a>
                <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative w-full h-[85vh] mt-16 sm:mt-20 bg-gray-900 overflow-hidden group">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1491553895911-0055eca6402d?q=80&w=2070&auto=format&fit=crop" alt="Hero Shoes" class="w-full h-full object-cover object-center opacity-80 transition-transform duration-700 group-hover:scale-105">
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-black/50"></div>
        
        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-6 mt-16">
            <h1 class="text-white font-heading text-5xl sm:text-7xl md:text-9xl tracking-tight uppercase leading-none drop-shadow-2xl">
                Langkah Sang <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Pemenang</span>
            </h1>
            <p class="mt-6 text-white/90 text-sm sm:text-lg max-w-2xl font-medium tracking-wide uppercase">
                Toko Sepatu & Apparel Terbaik dari Subang untuk Indonesia.
            </p>
            <div class="mt-10 flex gap-4">
                <a href="#good-deals" class="bg-white text-black font-heading text-xl uppercase px-10 py-4 hover:bg-gray-200 transition-colors transform hover:-translate-y-1">Belanja Sekarang</a>
                <a href="#" class="bg-transparent border-2 border-white text-white font-heading text-xl uppercase px-10 py-4 hover:bg-white hover:text-black transition-colors transform hover:-translate-y-1">Lihat Koleksi</a>
            </div>
        </div>
    </div>

    <!-- Category Banner Text -->
    <div class="w-full text-center py-16 bg-white border-b-2 border-black">
        <h2 class="font-heading text-4xl sm:text-6xl tracking-widest uppercase">Kategori</h2>
    </div>

    <!-- Collection Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 h-[600px]">
            <!-- Large Left -->
            <div class="relative group overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1514989940723-e8e51635b782?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Outerwear">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-500"></div>
                <div class="absolute bottom-10 left-0 right-0 flex flex-col items-center">
                    <h3 class="text-white font-heading text-4xl uppercase mb-3 drop-shadow-md">Sepatu</h3>
                    <button class="border border-white text-white px-8 py-2 font-bold tracking-wider text-sm hover:bg-white hover:text-black transition-colors">Lihat Produk</button>
                </div>
            </div>
            <!-- Large Right -->
            <div class="relative group overflow-hidden cursor-pointer">
                <img src="https://images.unsplash.com/photo-1550246140-5119ae4790b8?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="Shirt">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-500"></div>
                <div class="absolute bottom-10 left-0 right-0 flex flex-col items-center">
                    <h3 class="text-white font-heading text-4xl uppercase mb-3 drop-shadow-md">Pakaian</h3>
                    <button class="border border-white text-white px-8 py-2 font-bold tracking-wider text-sm hover:bg-white hover:text-black transition-colors">Lihat Produk</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Designed for the bold -->
    <div class="w-full bg-black text-white text-center py-24 sm:py-32 my-10 relative overflow-hidden flex items-center justify-center">
        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1550684848-fac1c5b4e853?q=80&w=2070&auto=format&fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-50" alt="Dark Texture">
        <div class="absolute inset-0 bg-black/40"></div>
        
        <h2 class="relative z-10 font-heading text-4xl sm:text-6xl md:text-8xl lg:text-[8rem] tracking-tight sm:tracking-tighter uppercase px-6 drop-shadow-2xl">Diciptakan Untuk<br>Para Pemberani.</h2>
    </div>

    <!-- Good Deals Section -->
    <div id="good-deals" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="font-heading text-3xl sm:text-4xl tracking-[0.2em] uppercase">Penawaran Terbaik</h2>
            <div class="w-20 h-1 bg-black mx-auto mt-6"></div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-12 sm:gap-x-8">
            
            <!-- Product 1 -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#F5F5F5] aspect-square flex items-center justify-center p-6 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-green-600 text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?q=80&w=1000&auto=format&fit=crop" alt="Red Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 group-hover:-rotate-3">
                </div>
                <h3 class="font-heading text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors">Momokick Crimson Runner (Stock Terbatas)</h3>
                <div class="flex flex-col">
                    <span class="text-gray-400 line-through text-sm font-semibold">Rp 2.308.500</span>
                    <span class="text-blue-900 font-bold text-lg">Rp 1.615.950</span>
                </div>
            </a>

            <!-- Product 2 -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#F5F5F5] aspect-square flex items-center justify-center p-6 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-green-600 text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?q=80&w=1000&auto=format&fit=crop" alt="Black Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <h3 class="font-heading text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors">Momokick Stealth Max (Black Edition)</h3>
                <div class="flex flex-col">
                    <span class="text-gray-400 line-through text-sm font-semibold">Rp 1.895.000</span>
                    <span class="text-blue-900 font-bold text-lg">Rp 1.450.000</span>
                </div>
            </a>

            <!-- Product 3 -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#F5F5F5] aspect-square flex items-center justify-center p-6 overflow-hidden mb-4">
                    <span class="absolute top-0 left-0 bg-red-600 text-white font-bold text-xs px-3 py-1 uppercase z-10">Habis</span>
                    <img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?q=80&w=1000&auto=format&fit=crop" alt="White Sneaker" class="w-full h-auto object-contain mix-blend-multiply grayscale opacity-50">
                </div>
                <h3 class="font-heading text-xl uppercase leading-tight mb-2 text-gray-500">Momokick Pure White Low</h3>
                <div class="flex flex-col">
                    <span class="text-gray-500 font-bold text-lg">Rp 1.250.000</span>
                </div>
            </a>

            <!-- Product 4 -->
            <a href="#" class="group block cursor-pointer">
                <div class="relative bg-[#F5F5F5] aspect-square flex items-center justify-center p-6 overflow-hidden mb-4">
                    <span class="absolute top-0 right-0 bg-green-600 text-white font-bold text-xs px-3 py-1 uppercase z-10">Sale</span>
                    <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?q=80&w=1000&auto=format&fit=crop" alt="Sports Sneaker" class="w-full h-auto object-contain mix-blend-multiply transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <h3 class="font-heading text-xl uppercase leading-tight mb-2 group-hover:text-gray-600 transition-colors">Momokick Trail Blazer (Desert Sand)</h3>
                <div class="flex flex-col">
                    <span class="text-gray-400 line-through text-sm font-semibold">Rp 2.150.000</span>
                    <span class="text-blue-900 font-bold text-lg">Rp 1.555.000</span>
                </div>
            </a>

        </div>
        
        <div class="mt-16 text-center">
            <a href="#" class="inline-block bg-[#59697d] hover:bg-slate-800 text-white font-bold text-sm tracking-widest uppercase px-12 py-3 transition-colors">Lihat Semua</a>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="w-full bg-[url('https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center bg-fixed relative mt-10 py-24">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 max-w-2xl mx-auto px-4 text-center">
            <h2 class="text-white font-heading text-4xl mb-4 tracking-wider">Dapatkan Info Terbaru dan Penawaran Eksklusif</h2>
            <form class="flex mt-8 max-w-lg mx-auto">
                <input type="email" placeholder="Alamat email Anda" class="flex-1 px-4 py-3 bg-white text-black outline-none font-medium text-sm">
                <button type="submit" class="bg-black text-white px-8 font-bold text-sm tracking-widest uppercase hover:bg-gray-800 transition-colors border border-black border-l-0">Berlangganan</button>
            </form>
        </div>
    </div>

    <!-- Footer Minimal -->
    <footer class="bg-white border-t border-gray-200 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="md:col-span-1">
                    <a href="#" class="font-heading text-3xl tracking-wide uppercase flex items-center gap-2 mb-6">
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
    <div class="sm:hidden fixed bottom-0 left-0 right-0 bg-black text-white h-16 pb-[env(safe-area-inset-bottom)] box-content flex justify-around items-center z-50 rounded-t-3xl border-t border-gray-800 shadow-[0_-5px_20px_rgba(0,0,0,0.3)]">
        <a href="/" class="flex flex-col items-center justify-center w-full h-full text-white">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
        </a>
        <a href="/products" class="flex flex-col items-center justify-center w-full h-full text-gray-500 relative">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
        </a>
        <a href="#" class="flex flex-col items-center justify-center w-full h-full text-gray-500">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
        </a>
        <a href="#" class="flex flex-col items-center justify-center w-full h-full text-gray-500">
            <svg class="w-6 h-6 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </a>
    </div>

    <!-- Auto Deploy Triggered -->
</body>
</html>
