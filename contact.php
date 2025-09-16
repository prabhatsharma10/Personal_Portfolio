<?php
$contact_info = [
    'email' => 'look.prabhat@gmail.com',
    'phone' => '+91 9532700804',
    'location' => 'Lucknow, Uttar Pradesh, India',
    'availability' => 'Available for freelance work'
];

$social_links = [
    [
        'name' => 'GitHub',
        'url' => 'https://github.com/prabhatsharma10',
        'icon' => 'fab fa-github',
        'color' => 'hover:text-gray-800'
    ],
    [
        'name' => 'LinkedIn',
        'url' => 'https://linkedin.com/in/prabhatsharma-',
        'icon' => 'fab fa-linkedin-in',
        'color' => 'hover:text-blue-600'
    ],
    [
        'name' => 'Twitter',
        'url' => 'https://twitter.com/johndoe',
        'icon' => 'fab fa-twitter',
        'color' => 'hover:text-blue-400'
    ],
    [
        'name' => 'Instagram',
        'url' => 'https://instagram.com/prabhat_.sharma._',
        'icon' => 'fab fa-instagram',
        'color' => 'hover:text-pink-600'
    ]
];

// Handle form submission (basic example)
$form_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_form'])) {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $subject = htmlspecialchars($_POST['subject'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
    
    // Basic validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Here you would typically send the email or save to database
        $form_message = 'success';
    } else {
        $form_message = 'error';
    }
}
?>

<section id="contact" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Get In Touch</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-6"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Ready to start your project? Let's discuss how we can work together to bring your ideas to life.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Let's Connect</h3>
                    <p class="text-gray-600 mb-8">
                        I'm always open to discussing new opportunities, creative projects, or just having a chat about technology and development.
                    </p>
                </div>

                <!-- Contact Details -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition duration-300 group">
                        <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white group-hover:bg-blue-700 transition duration-300">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Email</h4>
                            <a href="mailto:<?php echo $contact_info['email']; ?>" 
                               class="text-gray-600 hover:text-blue-600 transition duration-300">
                                <?php echo $contact_info['email']; ?>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition duration-300 group">
                        <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center text-white group-hover:bg-green-700 transition duration-300">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Phone</h4>
                            <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', $contact_info['phone']); ?>" 
                               class="text-gray-600 hover:text-green-600 transition duration-300">
                                <?php echo $contact_info['phone']; ?>
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition duration-300 group">
                        <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center text-white group-hover:bg-purple-700 transition duration-300">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Location</h4>
                            <p class="text-gray-600"><?php echo $contact_info['location']; ?></p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl hover:bg-blue-50 transition duration-300 group">
                        <div class="w-12 h-12 bg-orange-600 rounded-full flex items-center justify-center text-white group-hover:bg-orange-700 transition duration-300">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Availability</h4>
                            <p class="text-gray-600"><?php echo $contact_info['availability']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div>
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Follow Me</h4>
                    <div class="flex space-x-4">
                        <?php foreach ($social_links as $social): ?>
                            <a href="<?php echo $social['url']; ?>" 
                               target="_blank"
                               class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 <?php echo $social['color']; ?> transition duration-300 transform hover:scale-110 hover:shadow-lg">
                                <i class="<?php echo $social['icon']; ?> text-lg"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Response Time -->
                <div class="bg-blue-600 p-6 rounded-xl text-white">
                    <div class="flex items-center space-x-3 mb-3">
                        <i class="fas fa-bolt text-yellow-300 text-xl"></i>
                        <h4 class="font-semibold">Quick Response</h4>
                    </div>
                    <p class="text-blue-100">
                        I typically respond to messages within 24 hours. For urgent projects, feel free to call directly.
                    </p>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="bg-gray-50 p-8 rounded-2xl">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Send Message</h3>

                    <?php if ($form_message === 'success'): ?>
                        <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-700 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle mr-3"></i>
                                <span>Thank you! Your message has been sent successfully. I'll get back to you soon.</span>
                            </div>
                        </div>
                    <?php elseif ($form_message === 'error'): ?>
                        <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-700 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-exclamation-triangle mr-3"></i>
                                <span>Please fill in all required fields and try again.</span>
                            </div>
                        </div>
                    <?php endif; ?>

                    <form method="POST" class="space-y-6">
                        <input type="hidden" name="contact_form" value="1">
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       required
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition duration-300 bg-white"
                                       placeholder="Your full name"
                                       value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       required
                                       class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition duration-300 bg-white"
                                       placeholder="your.email@example.com"
                                       value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                Subject
                            </label>
                            <select id="subject" 
                                    name="subject"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition duration-300 bg-white">
                                <option value="">Select a subject</option>
                                <option value="web-development" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'web-development') ? 'selected' : ''; ?>>Web Development Project</option>
                                <option value="consultation" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'consultation') ? 'selected' : ''; ?>>Free Consultation</option>
                                <option value="collaboration" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'collaboration') ? 'selected' : ''; ?>>Collaboration Opportunity</option>
                                <option value="other" <?php echo (isset($_POST['subject']) && $_POST['subject'] === 'other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="4" 
                                      required
                                      class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition duration-300 resize-vertical bg-white"
                                      placeholder="Tell me about your project, ideas, or just say hello..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                        </div>

                        <!-- Project Budget (Optional) -->
                        <div>
                            <label for="budget" class="block text-sm font-semibold text-gray-700 mb-2">
                                Project Budget (Optional)
                            </label>
                            <select id="budget" 
                                    name="budget"
                                    class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:border-blue-500 focus:outline-none transition duration-300 bg-white">
                                <option value="">Select budget range</option>
                                <option value="under-5k">Under $5,000</option>
                                <option value="5k-10k">$5,000 - $10,000</option>
                                <option value="10k-25k">$10,000 - $25,000</option>
                                <option value="25k-50k">$25,000 - $50,000</option>
                                <option value="50k-plus">$50,000+</option>
                            </select>
                        </div>

                        <!-- Privacy Policy Checkbox -->
                        <div class="flex items-start space-x-3">
                            <input type="checkbox" 
                                   id="privacy" 
                                   name="privacy" 
                                   required
                                   class="mt-1 w-4 h-4 text-blue-600 border-2 border-gray-300 rounded focus:ring-blue-500">
                            <label for="privacy" class="text-sm text-gray-600">
                                I agree to the <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300">Privacy Policy</a> and consent to having my information processed. <span class="text-red-500">*</span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl flex items-center justify-center space-x-3">
                            <i class="fas fa-paper-plane"></i>
                            <span>Send Message</span>
                        </button>
                    </form>
                </div>

                <!-- Alternative Contact Methods -->
                <!-- <div class="mt-8 text-center">
                    <p class="text-gray-600 mb-4">Prefer a different way to connect?</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="mailto:<?php echo $contact_info['email']; ?>" 
                           class="inline-flex items-center px-6 py-3 border-2 border-blue-600 text-blue-600 rounded-full hover:bg-blue-600 hover:text-white transition duration-300 transform hover:scale-105">
                            <i class="fas fa-envelope mr-2"></i>
                            Email Directly
                        </a>
                        <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', $contact_info['phone']); ?>" 
                           class="inline-flex items-center px-6 py-3 border-2 border-green-600 text-green-600 rounded-full hover:bg-green-600 hover:text-white transition duration-300 transform hover:scale-105">
                            <i class="fas fa-phone mr-2"></i>
                            Call Now
                        </a>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- FAQ Section -->
        <!-- <div class="mt-16 max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Frequently Asked Questions</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                        How long does a typical project take?
                    </h4>
                    <p class="text-gray-600">
                        Project timelines vary based on complexity, but most websites take 2-6 weeks from start to finish.
                    </p>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                        Do you work with international clients?
                    </h4>
                    <p class="text-gray-600">
                        Absolutely! I work with clients worldwide and am comfortable with different time zones and communication preferences.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                        What's included in your development services?
                    </h4>
                    <p class="text-gray-600">
                        Full-stack development, responsive design, SEO optimization, testing, deployment, and ongoing support.
                    </p>
                </div>

                <div class="bg-gray-50 p-6 rounded-xl">
                    <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                        <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                        Do you offer maintenance services?
                    </h4>
                    <p class="text-gray-600">
                        Yes, I provide ongoing maintenance, updates, and support packages to keep your website running smoothly.
                    </p>
                </div>
            </div>
        </div> -->
    </div>
</section>

<script>
    // Form validation and enhancement
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        const submitButton = form.querySelector('button[type="submit"]');
        
        form.addEventListener('submit', function(e) {
            // Add loading state
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-3"></i>Sending...';
            submitButton.disabled = true;
        });

        // Real-time validation feedback
        const inputs = form.querySelectorAll('input[required], textarea[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-green-500');
                } else {
                    this.classList.add('border-green-500');
                    this.classList.remove('border-red-500');
                }
            });
        });

        // Character count for message textarea
        const messageTextarea = document.getElementById('message');
        const charCount = document.createElement('div');
        charCount.className = 'text-sm text-gray-500 mt-2 text-right';
        messageTextarea.parentNode.appendChild(charCount);

        messageTextarea.addEventListener('input', function() {
            const count = this.value.length;
            charCount.textContent = `${count}/1000 characters`;
            
            if (count > 1000) {
                charCount.classList.add('text-red-500');
                charCount.classList.remove('text-gray-500');
            } else {
                charCount.classList.add('text-gray-500');
                charCount.classList.remove('text-red-500');
            }
        });
    });
</script>