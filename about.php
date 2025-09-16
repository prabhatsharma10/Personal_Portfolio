<?php
$about_info = [
    'description' => "I'm a passionate Full Stack Developer with over 0 years of experience creating innovative web solutions. I specialize in modern JavaScript frameworks, PHP backends, and creating seamless user experiences that drive business growth.",
    'experience' => 'Fresher',
    'projects_completed' => '9+',
    'happy_clients' => '2+',
    'location' => 'Lucknow, Uttar Pradesh, India'
];

$highlights = [
    [
        'icon' => 'fas fa-code',
        'title' => 'Clean Code',
        'description' => 'Writing maintainable, scalable, and well-documented code following industry best practices.'
    ],
    [
        'icon' => 'fas fa-mobile-alt',
        'title' => 'Responsive Design',
        'description' => 'Creating pixel-perfect, mobile-first designs that work seamlessly across all devices.'
    ],
    [
        'icon' => 'fas fa-rocket',
        'title' => 'Performance',
        'description' => 'Optimizing applications for speed and efficiency to deliver exceptional user experiences.'
    ],
    [
        'icon' => 'fas fa-users',
        'title' => 'Collaboration',
        'description' => 'Working effectively with cross-functional teams to deliver projects on time and within budget.'
    ]
];
?>

<section id="about" class="py-14 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">About Me</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Passionate about creating digital experiences that make a difference
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <!-- Profile Image -->
            <div class="text-center lg:text-center">
                <div class="relative inline-block">
                    <img src="assets/img/profile.jpeg" 
                         alt="<?php echo $portfolio_config['name']; ?>" 
                         class="w-80 h-90 rounded-2xl shadow-2xl object-cover mx-auto lg:mx-0">
                    <div class="absolute -bottom-6 -right-6 w-20 h-20 bg-gradient-to-br from-blue-600 to-purple-600 rounded-2xl flex items-center justify-center">
                        <i class="fas fa-code text-white text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="space-y-6">
                <h3 class="text-3xl font-bold text-gray-800 mb-4">
                    Hello! I'm <?php echo explode(' ', $portfolio_config['name'])[0]; ?>
                </h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    <?php echo $about_info['description']; ?>
                </p>
                
                <!-- Stats -->
                <div class="grid grid-cols-2 gap-6 mt-4">
                    <div class="p-4 rounded-xl text-center hover:bg-blue-50 transition duration-300">
                        <div class="text-3xl font-bold text-blue-600 mb-2"><?php echo $about_info['experience']; ?></div>
                        <div class="text-gray-600">Experience</div>
                    </div>
                    <div class="p-4 rounded-xl text-center hover:bg-blue-50 transition duration-300">
                        <div class="text-3xl font-bold text-blue-600 mb-2"><?php echo $about_info['projects_completed']; ?></div>
                        <div class="text-gray-600">Projects</div>
                    </div>
                    <div class="p-4 rounded-xl text-center hover:bg-blue-50 transition duration-300">
                        <div class="text-3xl font-bold text-blue-600 mb-2"><?php echo $about_info['happy_clients']; ?></div>
                        <div class="text-gray-600">Happy Clients</div>
                    </div>
                    <div class="p-4 rounded-xl text-center hover:bg-blue-50 transition duration-300">
                        <div class="text-3xl font-bold text-blue-600 mb-2">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="text-gray-600"><?php echo $about_info['location']; ?></div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="mt-8">
                    <a href="assets/docs/resume.pdf" download
                       class="inline-flex items-center bg-blue-600 text-white px-8 py-4 rounded-full hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-105 shadow-lg">
                        <i class="fas fa-download mr-3"></i>
                        Download Resume
                    </a>
                </div>
            </div>
        </div>

        <!-- Highlights Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php foreach ($highlights as $highlight): ?>
                <div class="p-8 rounded-xl text-center hover:bg-white hover:shadow-lg transition duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="<?php echo $highlight['icon']; ?> text-white text-xl"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-4"><?php echo $highlight['title']; ?></h4>
                    <p class="text-gray-600"><?php echo $highlight['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>