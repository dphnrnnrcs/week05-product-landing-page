<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D' Cozy Brew Café — Pila, Laguna</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome para sa Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Colors -->
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
                    },
                    fontFamily: {
                        sans: ['Segoe UI', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-coffee-cream text-coffee-dark font-sans">

    <!-- ✅ NAVBAR — AYOS NA ANG MGA LINK! -->
    <nav class="bg-coffee-dark text-white py-4 shadow-md">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">
                <i class="fas fa-mug-hot mr-2"></i>D' Cozy Brew
            </a>
            <div class="space-x-8 text-lg">
                <a href="/" class="hover:text-coffee-light transition">Home</a>
                <a href="/about" class="hover:text-coffee-light transition">About</a>
                <a href="/products" class="hover:text-coffee-light transition">Products</a>
                <a href="/contact" class="hover:text-coffee-light transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- ✅ HERO SECTION -->
    <section class="py-24 px-6 text-center">
        <h1 class="text-5xl font-bold text-coffee-dark mb-6">Welcome to D' Cozy Brew ☕</h1>
        <p class="text-xl text-coffee-light mb-8 max-w-2xl mx-auto">
            Your daily dose of cozy — serving the finest coffee in Pila, Laguna since 2020.
        </p>
        <a href="/products" class="inline-block bg-coffee text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-coffee-dark transition">
            View Our Menu
        </a>
    </section>

    <!-- ✅ ABOUT SECTION (Preview lang — buong About nasa /about page) -->
    <section class="py-20 px-6 bg-coffee-warm">
        <div class="container mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold text-coffee-dark mb-6">About Us</h2>
            <p class="text-lg text-coffee-light mb-4">
                D' Cozy Brew is a cozy café located in the heart of Pila, Laguna. We serve premium coffee, handcrafted beverages, and delicious pastries in a warm and welcoming atmosphere.
            </p>
            <p class="text-lg text-coffee-light mb-6">
                <i class="fas fa-map-marker-alt mr-2"></i> Gen. Luna St., Brgy. Bulilan Norte, Pila, Laguna
            </p>
            <a href="/about" class="inline-block bg-coffee text-white px-6 py-2 rounded-full font-semibold hover:bg-coffee-dark transition">
                Read More →
            </a>
        </div>
    </section>

    <!-- ✅ PRODUCTS SECTION -->
    <section class="py-20 px-6">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-coffee-dark text-center mb-12">Our Best Sellers</h2>
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
            </div>
        </div>
    </section>

    <!-- ✅ CONTACT SECTION (Preview lang — buong Contact nasa /contact page) -->
    <section class="py-20 px-6 bg-coffee-warm">
        <div class="container mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold text-coffee-dark mb-6">Visit Us</h2>
            <div class="space-y-3 text-lg text-coffee-light mb-6">
                <p><i class="fas fa-map-marker-alt mr-3"></i> Gen. Luna St., Brgy. Bulilan Norte, Pila, Laguna</p>
                <p><i class="fas fa-clock mr-3"></i> Sunday–Thursday: 10AM–10PM | Friday–Saturday: 10AM–11PM</p>
                <p><i class="fas fa-phone mr-3"></i> +63 920 989 2123</p>
            </div>
            <a href="/contact" class="inline-block bg-coffee text-white px-6 py-2 rounded-full font-semibold hover:bg-coffee-dark transition">
                Contact Us →
            </a>
        </div>
    </section>

    <!-- ✅ FOOTER -->
    <footer class="bg-coffee-dark text-white py-6 text-center">
        <p>© 2026 D' Cozy Brew — Pila, Laguna. All rights reserved.</p>
    </footer>

</body>
</html>