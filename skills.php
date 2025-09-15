<?php
$skill_categories = [
    'Frontend' => [
        ['name' => 'HTML5', 'level' => 95, 'color' => 'bg-orange-100 text-orange-700 border-orange-200'],
        ['name' => 'CSS3', 'level' => 92, 'color' => 'bg-blue-100 text-blue-700 border-blue-200'],
        ['name' => 'JavaScript', 'level' => 90, 'color' => 'bg-yellow-100 text-yellow-700 border-yellow-200'],
        ['name' => 'React', 'level' => 88, 'color' => 'bg-cyan-100 text-cyan-700 border-cyan-200'],
        ['name' => 'Vue.js', 'level' => 85, 'color' => 'bg-green-100 text-green-700 border-green-200'],
        ['name' => 'Tailwind CSS', 'level' => 93, 'color' => 'bg-teal-100 text-teal-700 border-teal-200'],
        ['name' => 'Bootstrap', 'level' => 87, 'color' => 'bg-purple-100 text-purple-700 border-purple-200']
    ],
    'Backend' => [
        ['name' => 'PHP', 'level' => 92, 'color' => 'bg-indigo-100 text-indigo-700 border-indigo-200'],
        ['name' => 'Node.js', 'level' => 88, 'color' => 'bg-green-100 text-green-700 border-green-200'],
        ['name' => 'Python', 'level' => 85, 'color' => 'bg-blue-100 text-blue-700 border-blue-200'],
        ['name' => 'MySQL', 'level' => 90, 'color' => 'bg-orange-100 text-orange-700 border-orange-200'],
        ['name' => 'PostgreSQL', 'level' => 83, 'color' => 'bg-blue-100 text-blue-700 border-blue-200'],
        ['name' => 'MongoDB', 'level' => 80, 'color' => 'bg-green-100 text-green-700 border-green-200'],
        ['name' => 'Laravel', 'level' => 89, 'color' => 'bg-red-100 text-red-700 border-red-200']
    ],
    'Tools & Technologies' => [
        ['name' => 'Git', 'level' => 90, 'color' => 'bg-gray-100 text-gray-700 border-gray-200'],
        ['name' => 'Docker', 'level' => 82, 'color' => 'bg-blue-100 text-blue-700 border-blue-200'],
        ['name' => 'AWS', 'level' => 78, 'color' => 'bg-orange-100 text-orange-700 border-orange-200'],
        ['name' => 'Linux', 'level' => 85, 'color' => 'bg-yellow-100 text-yellow-700 border-yellow-200'],
        ['name' => 'Figma', 'level' => 88, 'color' => 'bg-purple-100 text-purple-700 border-purple-200'],
        ['name' => 'Webpack', 'level' => 80, 'color' => 'bg-blue-100 text-blue-700 border-blue-200']
    ]
];
?>

<section id="skills" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Skills & Expertise</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Technologies and tools I use to bring ideas to life
            </p>
        </div>

        <?php foreach ($skill_categories as $category => $skills): ?>
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">
                    <?php echo $category; ?>
                </h3>

                <!-- Skills as Badges -->
                <div class="flex flex-wrap justify-center gap-4 mb-8">
                    <?php foreach ($skills as $skill): ?>
                        <div class="group relative">
                            <span class="inline-flex items-center px-6 py-3 rounded-full text-sm font-medium border-2 
                                       <?php echo $skill['color']; ?> 
                                       hover:scale-105 transform transition duration-300 shadow-md hover:shadow-lg cursor-pointer">
                                <?php echo $skill['name']; ?>
                            </span>
                            <!-- Tooltip showing skill level -->
                            <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 
                                      bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 
                                      transition-opacity duration-300 pointer-events-none whitespace-nowrap z-10">
                                Proficiency: <?php echo $skill['level']; ?>%
                                <div class="absolute top-full left-1/2 transform -translate-x-1/2 w-0 h-0 
                                          border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Skills Progress Bars -->
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    <?php foreach ($skills as $skill): ?>
                        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
                            <div class="flex justify-between items-center mb-3">
                                <span class="font-semibold text-gray-800"><?php echo $skill['name']; ?></span>
                                <span class="text-sm text-gray-600"><?php echo $skill['level']; ?>%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-blue-600 to-purple-600 rounded-full transition-all duration-1000 ease-out skill-bar" 
                                     style="width: 0%" data-width="<?php echo $skill['level']; ?>%"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Call to Action -->
        <div class="text-center mt-16">
            <div class="bg-white p-8 rounded-2xl shadow-lg max-w-2xl mx-auto">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Ready to Work Together?</h3>
                <p class="text-gray-600 mb-6">
                    Let's discuss how my skills can help bring your project to life.
                </p>
                <a href="#contact" 
                   class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-handshake mr-3"></i>
                    Let's Collaborate
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // Animate skill bars when they come into view
    const observeSkillBars = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const skillBar = entry.target;
                const width = skillBar.getAttribute('data-width');
                setTimeout(() => {
                    skillBar.style.width = width;
                }, 200);
            }
        });
    }, {
        threshold: 0.5
    });

    document.querySelectorAll('.skill-bar').forEach(bar => {
        observeSkillBars.observe(bar);
    });
</script>