<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products — D' Cozy Brew Café</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        coffee: {
                            dark: '#4A2C2A',
                            DEFAULT: '#6F4E37',
                            light: '#A67B5B',
                            cream: '#FDF6E9',
                            warm: '#F8E9D0'
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-coffee-cream text-coffee-dark">

    <!-- NAVBAR -->
    <nav class="bg-coffee-dark text-white py-4 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">
                <i class="fas fa-mug-hot mr-2"></i>D' Cozy Brew
            </a>
            <div class="space-x-8 text-lg">
                <a href="/" class="hover:text-coffee-light transition">Home</a>
                <a href="/about" class="hover:text-coffee-light transition">About</a>
                <a href="/products" class="text-coffee-light font-semibold">Products</a>
                <a href="/contact" class="hover:text-coffee-light transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <section class="py-16 px-6 text-center">
        <h1 class="text-4xl font-bold text-coffee-dark mb-4">Our Menu ☕</h1>
        <p class="text-xl text-coffee-light">Handcrafted drinks & treats made with love</p>
    </section>

    <!-- PRODUCTS GRID — 6 ITEMS! -->
    <section class="pb-20 px-6">
        <div class="container mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <i class="fas fa-coffee text-5xl text-coffee mb-4"></i>
                    <h3 class="text-xl font-bold text-coffee-dark mb-2">Classic Espresso</h3>
                    <p class="text-coffee-light mb-4">Rich and bold — the perfect start to your day.</p>
                    <span class="text-lg font-bold text-coffee">₱120</span>
                </div>
                <!-- Product 2 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <i class="fas fa-mug-hot text-5xl text-coffee mb-4"></i>
                    <h3 class="text-xl font-bold text-coffee-dark mb-2">Creamy Latte</h3>
                    <p class="text-coffee-light mb-4">Smooth espresso with steamed milk and foam.</p>
                    <span class="text-lg font-bold text-coffee">₱150</span>
                </div>
                <!-- Product 3 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <i class="fas fa-ice-cream text-5xl text-coffee mb-4"></i>
                    <h3 class="text-xl font-bold text-coffee-dark mb-2">Iced Caramel Macchiato</h3>
                    <p class="text-coffee-light mb-4">Sweet, creamy, and refreshing — perfect for Laguna heat.</p>
                    <span class="text-lg font-bold text-coffee">₱170</span>
                </div>
                <!-- Product 4 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <i class="fas fa-leaf text-5xl text-coffee mb-4"></i>
                    <h3 class="text-xl font-bold text-coffee-dark mb-2">Cappuccino</h3>
                    <p class="text-coffee-light mb-4">Espresso with equal parts milk and fluffy foam.</p>
                    <span class="text-lg font-bold text-coffee">₱150</span>
                </div>
                <!-- Product 5 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <i class="fas fa-chart-area text-5xl text-coffee mb-4"></i>
                    <h3 class="text-xl font-bold text-coffee-dark mb-2">Mocha Java</h3>
                    <p class="text-coffee-light mb-4">Espresso meets rich chocolate and steamed milk.</p>
                    <span class="text-lg font-bold text-coffee">₱165</span>
                </div>
                <!-- Product 6 -->
                <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl transition">
                    <i class="fas fa-bread-slice text-5xl text-coffee mb-4"></i>
                    <h3 class="text-xl font-bold text-coffee-dark mb-2">Cinnamon Bun</h3>
                    <p class="text-coffee-light mb-4">Warm, soft, and sweet — the perfect coffee partner.</p>
                    <span class="text-lg font-bold text-coffee">₱85</span>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-coffee-dark text-white py-6 text-center">
        <p>© 2026 D' Cozy Brew — Pila, Laguna. All rights reserved.</p>
    </footer>

</body>
</html>