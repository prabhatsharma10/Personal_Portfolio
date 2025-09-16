<?php
$projects = [
    [
        'title' => 'FixNow - On-Demand Home Services',
        'description' => 'A comprehensive platform connecting users with local service providers for home repairs and maintenance.',
        'image' => 'assets/img/FixNow.png',
        'technologies' => ['MongoDB', 'Express.js', 'React.js', 'Node.js'],
        'github' => 'https://github.com/johndoe/ecommerce-dashboard',
        'demo' => 'https://demo-ecommerce-dashboard.com',
        'category' => 'Web Application',
        'featured' => true
    ],
    [
        'title' => 'Mausam Mitra - Weather Forecast API',
        'description' => 'A RESTful API providing accurate and up-to-date weather forecasts with location-based services and historical data access.',
        'image' => 'assets/img/Mausam_Mitra.png',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'JQuery', 'JSON'],
        'github' => 'https://github.com/johndoe/weather-api',
        'demo' => 'https://api-weather-forecast.com',
        'category' => 'API Development',
        'featured' => false
    ],
    // [
    //     'title' => 'Personal Portfolio',
    //     'description' => 'A drag-and-drop portfolio website builder with customizable templates, theme options, and one-click deployment.',
    //     'image' => 'assets/img/Portfolio.png',
    //     'technologies' => ['JavaScript', 'PHP', 'MySQL', 'AWS'],
    //     'github' => 'https://github.com/johndoe/portfolio-builder',
    //     'demo' => 'https://demo-portfolio-builder.com',
    //     'category' => 'Web Application',
    //     'featured' => false
    // ],
    [
        'title' => 'OpenLibrary - Book Sharing Platform',
        'description' => 'A platform for sharing and discovering books with social features and community engagement.',
        'image' => 'assets/img/openlibrary.png',
        'technologies' => ['Core Java','Servlets', 'JSP','JDBC', 'MySQL'],
        'github' => 'https://github.com/johndoe/social-platform',
        'demo' => 'https://demo-social-platform.com',
        'category' => 'Web Application',
        'featured' => true
    ],
    // [
    //     'title' => 'Task Management App',
    //     'description' => 'A collaborative task management application with team features, deadline tracking, and progress visualization.',
    //     'image' => 'assets/img/project3.jpg',
    //     'technologies' => ['React', 'Laravel', 'PostgreSQL', 'Redis'],
    //     'github' => 'https://github.com/johndoe/task-manager',
    //     'demo' => 'https://demo-task-manager.com',
    //     'category' => 'Web Application',
    //     'featured' => false
    // ],
    
    // [
    //     'title' => 'Cryptocurrency Tracker',
    //     'description' => 'Real-time cryptocurrency price tracking with portfolio management, alerts, and detailed market analysis.',
    //     'image' => 'assets/img/project6.jpg',
    //     'technologies' => ['React', 'Node.js', 'MongoDB', 'WebSocket'],
    //     'github' => 'https://github.com/johndoe/crypto-tracker',
    //     'demo' => 'https://demo-crypto-tracker.com',
    //     'category' => 'Web Application',
    //     'featured' => true
    // ]
];

$project_categories = array_unique(array_column($projects, 'category'));
?>

<section id="projects" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-10">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">My Projects</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                A showcase of my recent work and creative solutions
            </p>
        </div>

        <!-- Project Filter -->
        <div class="flex flex-wrap justify-center mb-12 gap-4">
            <button class="filter-btn active px-6 py-3 rounded-full border-2 border-blue-600 text-white-600 bg-blue-50 hover:bg-blue-600 hover:text-white transition duration-300 font-semibold"
                data-filter="all">
                All Projects
            </button>
            <?php foreach ($project_categories as $category): ?>
                <button class="filter-btn px-6 py-3 rounded-full border-2 border-gray-300 text-gray-600 hover:border-blue-600 hover:text-blue-600 transition duration-300 font-semibold"
                    data-filter="<?php echo strtolower(str_replace(' ', '-', $category)); ?>">
                    <?php echo $category; ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $index => $project): ?>
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transform hover:-translate-y-2 transition duration-300 group <?php echo strtolower(str_replace(' ', '-', $project['category'])); ?>"
                    data-category="<?php echo strtolower(str_replace(' ', '-', $project['category'])); ?>">

                    <!-- Project Image -->
                    <div class="relative overflow-hidden">
                        <img src="<?php echo $project['image']; ?>"
                            alt="<?php echo $project['title']; ?>"
                            class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">

                        <!-- Featured Badge -->
                        <?php if ($project['featured']): ?>
                            <div class="absolute top-4 left-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                                <i class="fas fa-star mr-1"></i> Featured
                            </div>
                        <?php endif; ?>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-4 left-4 right-4 flex gap-3">
                                <a href="<?php echo $project['github']; ?>"
                                    target="_blank"
                                    class="flex-1 bg-white/20 backdrop-blur-sm text-white text-center py-2 rounded-lg hover:bg-white/30 transition duration-300">
                                    <i class="fab fa-github mr-2"></i> Code
                                </a>
                                <a href="<?php echo $project['demo']; ?>"
                                    target="_blank"
                                    class="flex-1 bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                    <i class="fas fa-external-link-alt mr-2"></i> Demo
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Project Content -->
                    <div class="p-6">
                        <!-- Category -->
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm text-blue-600 font-semibold bg-blue-50 px-3 py-1 rounded-full">
                                <?php echo $project['category']; ?>
                            </span>
                            <div class="text-gray-400">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                <span class="text-sm">2024</span>
                            </div>
                        </div>

                        <!-- Title -->
                        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition duration-300">
                            <?php echo $project['title']; ?>
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 mb-4 line-clamp-3">
                            <?php echo $project['description']; ?>
                        </p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($project['technologies'] as $tech): ?>
                                <span class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full hover:bg-blue-100 hover:text-blue-700 transition duration-300">
                                    <?php echo $tech; ?>
                                </span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-3">
                            <a href="<?php echo $project['github']; ?>"
                                target="_blank"
                                class="flex-1 text-center py-2 border-2 border-gray-300 text-gray-600 rounded-lg hover:border-gray-400 hover:text-gray-800 transition duration-300">
                                <i class="fab fa-github mr-2"></i> Code
                            </a>
                            <a href="<?php echo $project['demo']; ?>"
                                target="_blank"
                                class="flex-1 text-center py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                                <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Load More Button -->
        <!-- <div class="text-center mt-12">
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-105 shadow-lg">
                <i class="fas fa-plus mr-3"></i>
                Load More Projects
            </button>
        </div> -->

        <!-- GitHub CTA -->
        <div class="mt-16 text-center">
            <!-- bg-gray-50 p-8 rounded-2xl -->
            <div class="max-w-2xl mx-auto">
                <div class="text-4xl text-gray-400 mb-4">
                    <i class="fab fa-github"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">More Projects on GitHub</h3>
                <p class="text-gray-600 mb-6">
                    Explore my complete collection of open-source projects and contributions.
                </p>
                <a href="https://github.com/prabhatsharma10"
                    target="_blank"
                    class="inline-flex items-center bg-gray-800 text-white px-8 py-4 rounded-full hover:bg-gray-900 transition duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fab fa-github mr-3"></i>
                    Visit GitHub Profile
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Project filtering functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active', 'bg-blue-600', 'text-white', 'bg-blue-50'));
            filterButtons.forEach(btn => btn.classList.add('border-gray-300', 'text-gray-600'));

            button.classList.add('active', 'bg-blue-600', 'text-white');
            button.classList.remove('border-gray-300', 'text-gray-600', 'bg-blue-50');

            // Filter projects
            projectCards.forEach(card => {
                const category = card.getAttribute('data-category');

                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                        card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    // Add CSS for line-clamp
    const style = document.createElement('style');
    style.textContent = `
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);
</script>