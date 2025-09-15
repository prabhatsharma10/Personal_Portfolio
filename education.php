<?php
$education = [
    [
        'degree' => 'Master of Computer Science',
        'institution' => 'Stanford University',
        'location' => 'Stanford, CA',
        'year' => '2018-2020',
        'description' => 'Specialized in Software Engineering and Machine Learning. Graduated Magna Cum Laude with a GPA of 3.8/4.0.',
        'achievements' => ['Dean\'s List', 'Research Assistant', 'Published 2 papers'],
        'icon' => 'fas fa-graduation-cap'
    ],
    [
        'degree' => 'Bachelor of Software Engineering',
        'institution' => 'University of California, Berkeley',
        'location' => 'Berkeley, CA',
        'year' => '2014-2018',
        'description' => 'Comprehensive study in software development, algorithms, and system design. Active member of the Computer Science Club.',
        'achievements' => ['Summa Cum Laude', 'President of CS Club', 'Hackathon Winner'],
        'icon' => 'fas fa-university'
    ]
];

$certifications = [
    [
        'name' => 'AWS Certified Solutions Architect',
        'issuer' => 'Amazon Web Services',
        'date' => 'March 2023',
        'credential' => 'AWS-CSA-2023-001234',
        'icon' => 'fab fa-aws',
        'color' => 'bg-orange-100 text-orange-700 border-orange-200'
    ],
    [
        'name' => 'Google Cloud Professional Developer',
        'issuer' => 'Google Cloud',
        'date' => 'January 2023',
        'credential' => 'GCP-PD-2023-005678',
        'icon' => 'fab fa-google',
        'color' => 'bg-blue-100 text-blue-700 border-blue-200'
    ],
    [
        'name' => 'Meta React Developer Certificate',
        'issuer' => 'Meta (Facebook)',
        'date' => 'November 2022',
        'credential' => 'META-RD-2022-009012',
        'icon' => 'fab fa-react',
        'color' => 'bg-cyan-100 text-cyan-700 border-cyan-200'
    ],
    [
        'name' => 'MongoDB Certified Developer',
        'issuer' => 'MongoDB Inc.',
        'date' => 'September 2022',
        'credential' => 'MDB-CD-2022-003456',
        'icon' => 'fas fa-leaf',
        'color' => 'bg-green-100 text-green-700 border-green-200'
    ]
];

$courses = [
    'Advanced JavaScript & ES6+',
    'React & Redux Masterclass',
    'Node.js & Express Development',
    'Database Design & Optimization',
    'DevOps & CI/CD Pipelines',
    'Machine Learning Fundamentals'
];
?>

<section id="education" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Education & Learning</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Continuous learning and professional development journey
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Education Timeline -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                    <i class="fas fa-graduation-cap text-blue-600 mr-3"></i>
                    Academic Background
                </h3>

                <div class="relative">
                    <!-- Timeline Line -->
                    <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-blue-200"></div>

                    <?php foreach ($education as $index => $edu): ?>
                        <div class="relative flex items-start mb-8 group">
                            <!-- Timeline Dot -->
                            <div class="relative z-10 flex items-center justify-center w-12 h-12 bg-blue-600 rounded-full text-white group-hover:bg-blue-700 transition duration-300 shadow-lg">
                                <i class="<?php echo $edu['icon']; ?>"></i>
                            </div>

                            <!-- Content Card -->
                            <div class="ml-6 bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 flex-1 group-hover:scale-105">
                                <div class="flex justify-between items-start mb-3">
                                    <div class="flex-1">
                                        <h4 class="text-xl font-bold text-gray-800 mb-1"><?php echo $edu['degree']; ?></h4>
                                        <h5 class="text-lg text-blue-600 font-semibold mb-1"><?php echo $edu['institution']; ?></h5>
                                        <p class="text-gray-500 text-sm">
                                            <i class="fas fa-map-marker-alt mr-1"></i>
                                            <?php echo $edu['location']; ?>
                                        </p>
                                    </div>
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">
                                        <?php echo $edu['year']; ?>
                                    </span>
                                </div>

                                <p class="text-gray-600 mb-4"><?php echo $edu['description']; ?></p>

                                <!-- Achievements -->
                                <div class="flex flex-wrap gap-2">
                                    <?php foreach ($edu['achievements'] as $achievement): ?>
                                        <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm hover:bg-blue-100 hover:text-blue-700 transition duration-300">
                                            <i class="fas fa-award mr-1"></i>
                                            <?php echo $achievement; ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Certifications & Courses -->
            <div>
                <h3 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                    <i class="fas fa-certificate text-purple-600 mr-3"></i>
                    Certifications
                </h3>

                <!-- Certifications Grid -->
                <div class="space-y-4 mb-12">
                    <?php foreach ($certifications as $cert): ?>
                        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start justify-between">
                                <div class="flex items-start space-x-4">
                                    <div class="w-12 h-12 rounded-full <?php echo $cert['color']; ?> flex items-center justify-center">
                                        <i class="<?php echo $cert['icon']; ?> text-lg"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-gray-800 mb-1"><?php echo $cert['name']; ?></h4>
                                        <p class="text-blue-600 font-semibold text-sm mb-1"><?php echo $cert['issuer']; ?></p>
                                        <p class="text-gray-500 text-sm mb-2">
                                            <i class="fas fa-calendar-alt mr-1"></i>
                                            Issued: <?php echo $cert['date']; ?>
                                        </p>
                                        <p class="text-xs text-gray-400">
                                            ID: <?php echo $cert['credential']; ?>
                                        </p>
                                    </div>
                                </div>
                                <button class="text-blue-600 hover:text-blue-800 transition duration-300">
                                    <i class="fas fa-external-link-alt"></i>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Online Courses -->
                <h4 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-laptop-code text-green-600 mr-3"></i>
                    Completed Courses
                </h4>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="grid gap-3">
                        <?php foreach ($courses as $course): ?>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg hover:bg-blue-50 transition duration-300">
                                <span class="text-gray-800 font-medium"><?php echo $course; ?></span>
                                <div class="flex items-center space-x-2">
                                    <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs font-semibold">
                                        <i class="fas fa-check mr-1"></i>
                                        Completed
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Learning Philosophy -->
                <div class="mt-8 bg-gradient-to-r from-blue-600 to-purple-600 p-6 rounded-xl text-white">
                    <h4 class="text-lg font-bold mb-3 flex items-center">
                        <i class="fas fa-lightbulb mr-3"></i>
                        Learning Philosophy
                    </h4>
                    <p class="text-blue-100">
                        "The technology landscape evolves rapidly, and continuous learning is essential. 
                        I believe in staying ahead of the curve by constantly expanding my skill set and 
                        exploring emerging technologies."
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-xl text-center shadow-md hover:shadow-lg transition duration-300">
                <div class="text-3xl font-bold text-blue-600 mb-2">2</div>
                <div class="text-gray-600">Degrees</div>
            </div>
            <div class="bg-white p-6 rounded-xl text-center shadow-md hover:shadow-lg transition duration-300">
                <div class="text-3xl font-bold text-purple-600 mb-2"><?php echo count($certifications); ?></div>
                <div class="text-gray-600">Certifications</div>
            </div>
            <div class="bg-white p-6 rounded-xl text-center shadow-md hover:shadow-lg transition duration-300">
                <div class="text-3xl font-bold text-green-600 mb-2"><?php echo count($courses); ?></div>
                <div class="text-gray-600">Courses</div>
            </div>
            <div class="bg-white p-6 rounded-xl text-center shadow-md hover:shadow-lg transition duration-300">
                <div class="text-3xl font-bold text-orange-600 mb-2">∞</div>
                <div class="text-gray-600">Learning</div>
            </div>
        </div>
    </div>
</section>