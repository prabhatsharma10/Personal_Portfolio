<?php
$current_year = date('Y');
$footer_links = [
    'Home' => '#hero',
    'About' => '#about',
    'Skills' => '#skills',
    'Projects' => '#projects',
    'Education' => '#education',
    'Contact' => '#contact'
];

$social_media = [
    [
        'name' => 'GitHub',
        'url' => 'https://github.com/prabhatsharma10',
        'icon' => 'fab fa-github',
        'color' => 'hover:text-gray-300'
    ],
    [
        'name' => 'LinkedIn',
        'url' => 'https://linkedin.com/in/prabhatsharma-',
        'icon' => 'fab fa-linkedin-in',
        'color' => 'hover:text-blue-400'
    ],
    [
        'name' => 'Twitter',
        'url' => 'https://twitter.com/johndoe',
        'icon' => 'fab fa-twitter',
        'color' => 'hover:text-blue-300'
    ],
    [
        'name' => 'Instagram',
        'url' => 'https://instagram.com/prabhat_.sharma._',
        'icon' => 'fab fa-instagram',
        'color' => 'hover:text-pink-400'
    ],
    [
        'name' => 'Email',
        'url' => 'mailto:look.prabhat@gmail.com',
        'icon' => 'fas fa-envelope',
        'color' => 'hover:text-yellow-400'
    ]
];

$services = [
    'Web Development',
    'Mobile Apps',
    'UI/UX Design',
    'API Development',
    'Database Design',
    'DevOps & Deployment'
];
?>

<footer class="bg-gray-900 text-white">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">
            <!-- Brand Section -->
            <div class="lg:col-span-1">
                <div class="mb-6">
                    <h3 class="text-2xl font-bold mb-4">
                        <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                            <?php echo $portfolio_config['name']; ?>
                        </span>
                    </h3>
                    <p class="text-gray-400 mb-6 leading-relaxed">
                        Full-stack developer passionate about building scalable web applications and engaging user experiences.
                    </p>
                    
                    <!-- Location & Status -->
                    <div class="space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-blue-400"></i>
                            <span class="text-gray-400">Lucknow, Uttar Pradesh, India</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                            <span class="text-gray-400">Available for new projects</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="lg:col-span-1">
                <h4 class="text-lg font-semibold mb-6 relative">
                    Quick Links
                    <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 mt-2"></div>
                </h4>
                <ul class="space-y-3">
                    <?php foreach ($footer_links as $name => $link): ?>
                        <li>
                            <a href="<?php echo $link; ?>" 
                               class="text-gray-400 hover:text-white transition duration-300 flex items-center group">
                                <i class="fas fa-chevron-right text-blue-400 text-xs mr-3 group-hover:mr-4 transition-all duration-300"></i>
                                <?php echo $name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Services -->
            <div class="lg:col-span-1">
                <h4 class="text-lg font-semibold mb-6 relative">
                    Services
                    <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 mt-2"></div>
                </h4>
                <ul class="space-y-3">
                    <?php foreach ($services as $service): ?>
                        <li class="text-gray-400 hover:text-white transition duration-300 cursor-pointer flex items-center group">
                            <i class="fas fa-code text-purple-400 text-xs mr-3"></i>
                            <?php echo $service; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Info & Newsletter -->
            <div class="lg:col-span-1">
                <h4 class="text-lg font-semibold mb-6 relative">
                    Stay Connected
                    <div class="absolute bottom-0 left-0 w-8 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 mt-2"></div>
                </h4>
                
                <div class="space-y-4 mb-6">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-blue-400"></i>
                        <a href="mailto:look.prabhat@gmail.com" class="text-gray-400 hover:text-white transition duration-300">
                            look.prabhat@gmail.com
                        </a>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-phone text-green-400"></i>
                        <a href="tel:+919532700804" class="text-gray-400 hover:text-white transition duration-300">
                            +91 9532700804
                        </a>
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="bg-gray-800 p-4 rounded-lg">
                    <h5 class="font-semibold mb-3">Get Updates</h5>
                    <p class="text-gray-400 text-sm mb-4">Subscribe to receive updates about new projects and articles.</p>
                    <form class="flex">
                        <input type="email" 
                               placeholder="Your email" 
                               class="flex-1 px-3 py-2 bg-gray-700 border border-gray-600 rounded-l-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 transition duration-300">
                        <button type="submit" 
                                class="bg-gradient-to-r from-blue-500 to-purple-500 px-4 py-2 rounded-r-lg hover:from-blue-600 hover:to-purple-600 transition duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Social Media & Bottom Bar -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-6 py-8">
            <!-- Social Media Icons -->
            <div class="flex justify-center mb-8">
                <div class="flex space-x-6">
                    <?php foreach ($social_media as $social): ?>
                        <a href="<?php echo $social['url']; ?>" 
                           target="_blank"
                           class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center text-gray-400 <?php echo $social['color']; ?> transition duration-300 transform hover:scale-110 hover:bg-gray-700 group"
                           title="<?php echo $social['name']; ?>">
                            <i class="<?php echo $social['icon']; ?> text-lg"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Copyright & Links -->
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-gray-400 text-sm text-center md:text-left">
                    © <?php echo $current_year; ?> <?php echo $portfolio_config['name']; ?>. All rights reserved.
                    <span class="block md:inline md:ml-2">
                        Made with <i class="fas fa-heart text-red-400 mx-1 animate-pulse"></i> and lots of coffee ☕
                    </span>
                </div>
                
                <div class="flex space-x-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-white transition duration-300">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition duration-300">Terms of Service</a>
                    <a href="#" class="hover:text-white transition duration-300">Sitemap</a>
                </div>
            </div>

            <!-- Tech Stack Credit -->
            <!-- <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-500 text-xs">
                    Built with 
                    <span class="text-blue-400">PHP</span>, 
                    <span class="text-blue-400">Tailwind CSS</span>, 
                    <span class="text-blue-400">JavaScript</span> 
                    & deployed on 
                    <span class="text-orange-400">AWS</span>
                </p>
            </div> -->
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="back-to-top" 
            class="fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-full shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-300 opacity-0 invisible z-50">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>

<script>
    // Back to top button functionality
    const backToTopButton = document.getElementById('back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('opacity-0', 'invisible');
            backToTopButton.classList.add('opacity-100', 'visible');
        } else {
            backToTopButton.classList.add('opacity-0', 'invisible');
            backToTopButton.classList.remove('opacity-100', 'visible');
        }
    });

    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Newsletter form handling
    document.querySelector('footer form').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        const button = this.querySelector('button');
        
        if (email) {
            button.innerHTML = '<i class="fas fa-check"></i>';
            button.classList.add('bg-green-500');
            
            setTimeout(() => {
                button.innerHTML = '<i class="fas fa-paper-plane"></i>';
                button.classList.remove('bg-green-500');
                this.reset();
            }, 2000);
        }
    });

    // Add floating animation to heart icon
    const heartIcon = document.querySelector('.fa-heart');
    if (heartIcon) {
        setInterval(() => {
            heartIcon.style.transform = 'scale(1.2)';
            setTimeout(() => {
                heartIcon.style.transform = 'scale(1)';
            }, 200);
        }, 2000);
    }
</script>