<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us — D' Cozy Brew Café</title>
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
                <a href="/about" class="text-coffee-light font-semibold">About</a>
                <a href="/products" class="hover:text-coffee-light transition">Products</a>
                <a href="/contact" class="hover:text-coffee-light transition">Contact</a>
            </div>
        </div>
    </nav>

    <!-- ABOUT HEADER -->
    <section class="py-16 px-6 text-center">
        <h1 class="text-4xl font-bold text-coffee-dark mb-4">About D' Cozy Brew ☕</h1>
        <p class="text-xl text-coffee-light">Get to know our story, our heart, and our team</p>
    </section>

    <!-- COMPANY HISTORY -->
    <section class="py-12 px-6 bg-white">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-2xl font-bold text-coffee-dark mb-4"><i class="fas fa-book-open mr-3"></i>Company History</h2>
            <p class="text-lg text-coffee-light leading-relaxed">
                D' Cozy Brew was founded in 2020 with a simple dream: to bring warmth, comfort, and premium coffee to the heart of Pila, Laguna. What started as a small family passion has grown into a beloved community spot — serving handcrafted beverages, delicious pastries, and unforgettable cozy moments.
            </p>
        </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="py-12 px-6 bg-coffee-warm">
        <div class="container mx-auto max-w-4xl grid md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-coffee-dark mb-4"><i class="fas fa-bullseye mr-3"></i>Our Mission</h2>
                <p class="text-coffee-light">
                    To serve high-quality coffee with warmth, create a cozy space for everyone, and support our local community — one cup at a time.
                </p>
            </div>
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-coffee-dark mb-4"><i class="fas fa-eye mr-3"></i>Our Vision</h2>
                <p class="text-coffee-light">
                    To be the most loved cozy café in Laguna — known for great coffee, genuine hospitality, and a homey atmosphere.
                </p>
            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="py-12 px-6 bg-white">
        <div class="container mx-auto max-w-4xl">
            <h2 class="text-2xl font-bold text-coffee-dark mb-8 text-center"><i class="fas fa-star mr-3"></i>Our Core Values</h2>
            <div class="grid md:grid-cols-4 gap-6 text-center">
                <div class="p-4">
                    <i class="fas fa-heart text-3xl text-coffee mb-3"></i>
                    <h3 class="font-bold text-coffee-dark">Passion</h3>
                </div>
                <div class="p-4">
                    <i class="fas fa-handshake text-3xl text-coffee mb-3"></i>
                    <h3 class="font-bold text-coffee-dark">Integrity</h3>
                </div>
                <div class="p-4">
                    <i class="fas fa-users text-3xl text-coffee mb-3"></i>
                    <h3 class="font-bold text-coffee-dark">Community</h3>
                </div>
                <div class="p-4">
                    <i class="fas fa-leaf text-3xl text-coffee mb-3"></i>
                    <h3 class="font-bold text-coffee-dark">Quality</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="py-12 px-6 bg-coffee-warm">
        <div class="container mx-auto max-w-4xl text-center">
            <h2 class="text-2xl font-bold text-coffee-dark mb-8"><i class="fas fa-user-friends mr-3"></i>Meet Our Team</h2>
            <p class="text-lg text-coffee-light mb-4">
                We are a small but passionate team of coffee lovers, baristas, and dreamers — all working to bring you the coziest experience in Pila, Laguna.
            </p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-coffee-dark text-white py-6 text-center">
        <p>© 2026 D' Cozy Brew — Pila, Laguna. All rights reserved.</p>
    </footer>

</body>
</html>