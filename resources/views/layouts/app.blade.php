<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D' Cozy Brew Café — Pila, Laguna</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome para sa mga Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Colors at Settings -->
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
    
    <style type="text/tailwindcss">
        @layer utilities {
            .text-shadow { text-shadow: 0 2px 4px rgba(0,0,0,0.1); }
            .text-shadow-lg { text-shadow: 0 4px 8px rgba(0,0,0,0.25); }
        }
    </style>
</head>
<body class="bg-coffee-cream text-coffee-dark font-sans antialiased">
    <!-- Dito papasok ang laman ng ibang pahina -->
    {{ $slot }}
</body>
</html>