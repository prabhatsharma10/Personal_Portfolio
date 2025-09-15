<?php
$nav_items = [
    'Home' => '#hero',
    'About' => '#about',
    'Skills' => '#skills',
    'Projects' => '#projects',
    'Education' => '#education',
    'Contact' => '#contact'
];
?>

<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="navbar">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="#hero" class="text-2xl font-bold text-white hover:text-blue-200 transition duration-300">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">
                        <?php echo substr($portfolio_config['name'], 0, 1); ?>.<?php echo explode(' ', $portfolio_config['name'])[1]; ?>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <?php foreach ($nav_items as $name => $link): ?>
                    <a href="<?php echo $link; ?>" 
                       class="text-white hover:text-blue-300 transition duration-300 relative group">
                        <?php echo $name; ?>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-300 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                <?php endforeach; ?>
                <a href="#contact" 
                   class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300 transform hover:scale-105 shadow-lg">
                    Hire Me
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-blue-300 transition duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 bg-white rounded-lg shadow-lg overflow-hidden">
            <?php foreach ($nav_items as $name => $link): ?>
                <a href="<?php echo $link; ?>" 
                   class="block px-6 py-3 text-gray-800 hover:bg-blue-50 hover:text-blue-600 transition duration-300">
                    <?php echo $name; ?>
                </a>
            <?php endforeach; ?>
            <a href="#contact" 
               class="block px-6 py-3 bg-blue-600 text-white hover:bg-blue-700 transition duration-300">
                Hire Me
            </a>
        </div>
    </nav>
</header>

<script>
    // Handle navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 100) {
            navbar.classList.add('bg-white', 'shadow-lg');
            navbar.classList.remove('bg-transparent');
            // Update text colors for light background
            const links = navbar.querySelectorAll('a:not(.bg-blue-600)');
            links.forEach(link => {
                link.classList.remove('text-white', 'hover:text-blue-300');
                link.classList.add('text-gray-800', 'hover:text-blue-600');
            });
        } else {
            navbar.classList.remove('bg-white', 'shadow-lg');
            navbar.classList.add('bg-transparent');
            // Reset text colors for transparent background
            const links = navbar.querySelectorAll('a:not(.bg-blue-600)');
            links.forEach(link => {
                link.classList.add('text-white', 'hover:text-blue-300');
                link.classList.remove('text-gray-800', 'hover:text-blue-600');
            });
        }
    });

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
    });
</script>