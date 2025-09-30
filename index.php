<?php
// Main portfolio configuration
$portfolio_config = [
    'name' => 'Prabhat Sharma',
    'title' => 'Software Developer',
    'tagline' => 'Creating innovative web solutions with passion and precision'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $portfolio_config['name']; ?> - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'fadeInUp': 'fadeInUp 0.8s ease-out',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header/Navigation -->
    <?php include 'header.php'; ?>

    <section id="hero" class="min-h-screen bg-gradient-to-br from-blue-600 via-purple-700 to-indigo-800 text-white flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-6 text-center relative z-10 animate-fadeInUp">
            <div class="mb-8">
                <img src="assets/img/profile.jpeg" alt="<?php echo $portfolio_config['name']; ?>" 
                     class="w-32 h-32 rounded-full mx-auto mb-6 border-4 border-white shadow-2xl animate-float object-cover">
            </div>
            <h1 class="text-5xl md:text-7xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-blue-200">
                <?php echo $portfolio_config['name']; ?>
            </h1>
            <p class="text-xl md:text-2xl mb-2 font-light"><?php echo $portfolio_config['title']; ?></p>
            <p class="text-lg md:text-xl mb-8 text-blue-200 max-w-2xl mx-auto">
                <?php echo $portfolio_config['tagline']; ?>
            </p>
            <div class="space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center">
                <a href="#projects" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-full font-semibold hover:bg-blue-50 transition duration-300 transform hover:scale-105 shadow-lg">
                    View My Work
                </a>
                <a href="#contact" class="inline-block border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition duration-300 transform hover:scale-105">
                    Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Floating geometric shapes -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-400 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-20 right-10 w-16 h-16 bg-purple-400 rounded-lg opacity-20 animate-float" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/2 left-20 w-12 h-12 bg-indigo-400 rounded-full opacity-20 animate-float" style="animation-delay: 2s;"></div>
    </section>

    <?php include 'about.php'; ?>

    <?php include 'skills.php'; ?>

    <?php include 'projects.php'; ?>

    <?php include 'education.php'; ?>

    <?php include 'contact.php'; ?>

    <?php include 'footer.php'; ?>

    <script>
        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll animation to sections
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('section:not(#hero)').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            observer.observe(section);
        });
    </script>
</body>
</html>
