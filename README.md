# 🌐 Dynamic One-Page Portfolio (PHP + Tailwind CSS)
This is a **comprehensive, dynamic one-page portfolio website** built with **PHP** and **Tailwind CSS**, designed for modern web developers to showcase their skills, projects, and achievements.  

## 📂 File Structure

portfolio/
├── index.php # Main page with hero section and dynamic loading
├── header.php # Sticky navigation with scroll effects
├── about.php # About section with stats and highlights
├── skills.php # Interactive skills with progress bars and badges
├── projects.php # Project showcase with filtering system
├── education.php # Education timeline and certifications
├── contact.php # Contact form with validation
├── footer.php # Footer with social links and newsletter
└── assets/
└── img/
├── profile.jpg
├── project1.jpg
├── project2.jpg
└── ... (other project images)

## 🎨 Features
### ✅ Modern Design Elements
- Gradient backgrounds & glassmorphism effects  
- Smooth animations & hover transitions  
- Floating geometric shapes in hero section  
- Interactive progress bars for skills  
- Timeline design for education  
- Card-based layouts throughout  

### ⚡ Dynamic PHP Features
- Modular structure using `include` / `require`  
- Dynamic content generation from **PHP arrays**  
- Contact form processing with validation  
- Responsive project filtering  
- Real-time skill level tooltips  

### 🎨 Tailwind CSS Styling
- Responsive grid layouts (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`)  
- Modern gradient color schemes  
- Hover animations (`hover:scale-105`, `transform`)  
- Mobile-first responsive design  

### ✨ Interactive Features
- Smooth scrolling navigation  
- Sticky header with background change on scroll  
- Mobile hamburger menu  
- Project filtering by category  
- Form validation with real-time feedback  
- Back-to-top button  
- Newsletter signup  

## 🚀 Getting Started

1. **Clone the repository**  
   ```bash
   git clone https://github.com/your-username/portfolio.git
   cd portfolio
Add your images
Place profile and project images in assets/img/

Customize content
Update the PHP arrays in respective files (about.php, skills.php, projects.php, etc.)

Run locally
Start a local PHP server:

php -S localhost:8000
Deploy
Upload the project to any PHP-enabled hosting service (e.g., cPanel, XAMPP, Heroku with PHP buildpack, or Netlify with PHP runtime).
