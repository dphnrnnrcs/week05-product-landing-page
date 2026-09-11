<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us — D' Cozy Brew Café</title>
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
                <a href="/products" class="hover:text-coffee-light transition">Products</a>
                <a href="/contact" class="text-coffee-light font-semibold">Contact</a>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <section class="py-16 px-6 text-center">
        <h1 class="text-4xl font-bold text-coffee-dark mb-4">Contact Us 📍</h1>
        <p class="text-xl text-coffee-light">We'd love to hear from you!</p>
    </section>

    <!-- CONTACT INFO + FORM -->
    <section class="pb-20 px-6">
        <div class="container mx-auto max-w-5xl grid md:grid-cols-2 gap-10">
            
            <!-- Contact Info -->
            <div class="bg-white p-8 rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-coffee-dark mb-6">Get In Touch</h2>
                <div class="space-y-4 text-lg text-coffee-light">
                    <p><i class="fas fa-map-marker-alt mr-3 text-coffee"></i> Gen. Luna St., Brgy. Bulilan Norte, Pila, Laguna</p>
                    <p><i class="fas fa-clock mr-3 text-coffee"></i> Sun–Thu: 10AM–10PM | Fri–Sat: 10AM–11PM</p>
                    <p><i class="fas fa-phone mr-3 text-coffee"></i> +63 920 989 2123</p>
                    <p><i class="fas fa-envelope mr-3 text-coffee"></i> hello@dcozybrew.ph</p>
                </div>
                <div class="mt-8 space-x-4 text-2xl">
                    <a href="#" class="text-coffee hover:text-coffee-dark"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-coffee hover:text-coffee-dark"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-coffee hover:text-coffee-dark"><i class="fab fa-messenger"></i></a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-coffee-warm p-8 rounded-xl shadow-md">
                <h2 class="text-2xl font-bold text-coffee-dark mb-6">Send Us a Message</h2>
                <form>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Your Name</label>
                        <input type="text" class="w-full px-4 py-2 rounded-lg border border-coffee-light focus:outline-none focus:ring-2 focus:ring-coffee-light" placeholder="Juan Dela Cruz">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Email Address</label>
                        <input type="email" class="w-full px-4 py-2 rounded-lg border border-coffee-light focus:outline-none focus:ring-2 focus:ring-coffee-light" placeholder="juan@email.com">
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1">Message</label>
                        <textarea rows="4" class="w-full px-4 py-2 rounded-lg border border-coffee-light focus:outline-none focus:ring-2 focus:ring-coffee-light" placeholder="Your message..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-coffee text-white py-3 rounded-lg font-semibold hover:bg-coffee-dark transition">
                        Send Message ☕
                    </button>
                </form>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-coffee-dark text-white py-6 text-center">
        <p>© 2026 D' Cozy Brew — Pila, Laguna. All rights reserved.</p>
    </footer>

</body>
</html>