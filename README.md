# Full-Stack Portfolio

A modern, admin-managed portfolio website built with Laravel and React. This project serves as a dynamic portfolio platform where only the admin (you) can update and manage content through an administrative interface, while visitors see a beautiful, responsive portfolio showcasing your work.

## 🎯 Project Overview

This full-stack portfolio application is designed to be a comprehensive showcase of your professional work and skills. Unlike static portfolios, this system allows you to dynamically manage your content through an admin dashboard, ensuring your portfolio stays current with your latest projects and achievements.

### Key Concept
- **Admin-Only Management**: You are the sole administrator who can add, update, and delete content
- **Dynamic Content**: All portfolio content is stored in a database and can be updated without code changes
- **Visitor Experience**: Public users see a polished, professional portfolio with your latest work
- **Real-Time Updates**: Changes made in the admin panel are immediately reflected on the public site

## ✨ Features

### Admin Dashboard
- **Project Management**: Add, edit, and delete portfolio projects with images, descriptions, and links
- **Skills Management**: Organize and categorize your technical skills and proficiencies
- **About Section**: Update your personal information, bio, and professional summary
- **Media Management**: Upload and manage images, documents, and other media files
- **Content Organization**: Categorize and tag content for better organization

### Public Portfolio
- **Responsive Design**: Beautiful, mobile-first design that works on all devices
- **Interactive UI**: Smooth animations and transitions powered by React
- **SEO Optimized**: Proper meta tags and structured data for search engines
- **Fast Loading**: Optimized performance with modern build tools

## 🛠 Tech Stack

### Backend
- **Laravel 12**: Robust PHP framework for API and admin functionality
- **MySQL/PostgreSQL**: Database for storing portfolio content
- **Laravel Sanctum**: API authentication for admin sessions
- **Laravel Breeze**: Authentication scaffolding

### Frontend
- **React 18**: Modern JavaScript library for building user interfaces
- **TypeScript**: Type-safe JavaScript for better development experience
- **Inertia.js**: Seamless communication between Laravel and React
- **Tailwind CSS**: Utility-first CSS framework for styling
- **Vite**: Fast build tool and development server

### Additional Tools
- **Pest**: Modern testing framework for PHP
- **ESLint & Prettier**: Code linting and formatting
- **Ziggy**: Laravel route generation for JavaScript

## 🚀 Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js 18+ and npm
- MySQL/PostgreSQL database

### Step 1: Clone the Repository
```bash
git clone https://github.com/edmyrbatiancila/full-stack-portfolio.git
cd full-stack-portfolio
```

### Step 2: Install PHP Dependencies
```bash
composer install
```

### Step 3: Install Node.js Dependencies
```bash
npm install
```

### Step 4: Environment Configuration
1. Copy the environment file:
```bash
cp .env.example .env
```

2. Generate application key:
```bash
php artisan key:generate
```

3. Configure your database settings in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 5: Database Setup
1. Create your database
2. Run migrations and seeders:
```bash
php artisan migrate --seed
```

### Step 6: Storage Setup
```bash
php artisan storage:link
```

## 🏃‍♂️ Running the Application

### Development Mode

1. **Start the Laravel development server**:
```bash
php artisan serve
```

2. **Start the Vite development server** (in a new terminal):
```bash
npm run dev
```

3. **Access the application**:
   - Public Portfolio: `http://localhost:8000`
   - Admin Dashboard: `http://localhost:8000/admin` (after authentication)

### Production Build

1. **Build frontend assets**:
```bash
npm run build
```

2. **Optimize Laravel**:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 📋 Usage Guide

### First-Time Setup
1. Register your admin account at `/register`
2. Log in to access the admin dashboard
3. Start adding your projects, skills, and personal information

### Managing Content

#### Adding Projects
1. Navigate to Admin Dashboard → Projects
2. Click "Add New Project"
3. Fill in project details:
   - Title and description
   - Technologies used
   - Project images
   - Live demo and GitHub links
   - Project category/tags
4. Publish to make it visible on the public portfolio

#### Managing Skills
1. Go to Admin Dashboard → Skills
2. Add skills by category (e.g., Frontend, Backend, Tools)
3. Set proficiency levels
4. Organize skills in the order you want them displayed

#### Updating About Section
1. Access Admin Dashboard → About
2. Update your:
   - Professional bio
   - Contact information
   - Resume/CV upload
   - Profile picture

### Content Organization Tips
- Use clear, descriptive titles for projects
- Include high-quality images and screenshots
- Write compelling project descriptions
- Keep skills updated with your current proficiencies
- Regularly review and update your content

## 🔧 Configuration

### Customization Options
- **Theme Colors**: Modify `tailwind.config.js` to change the color scheme
- **Layout**: Customize React components in `resources/js/Components/`
- **Database Schema**: Add migrations for additional content types
- **API Endpoints**: Extend Laravel controllers for new features

### Environment Variables
Key environment variables to configure:

```env
APP_NAME="Your Portfolio"
APP_URL=http://localhost:8000
MAIL_MAILER=smtp  # For contact form
FILESYSTEM_DISK=public  # For file uploads
```

## 🧪 Testing

Run the test suite:
```bash
# PHP tests
php artisan test
# or using Pest
./vendor/bin/pest

# JavaScript/TypeScript tests (if configured)
npm run test
```

## 📝 Contributing

This is a personal portfolio project, but if you'd like to suggest improvements:
1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## 📞 Support

If you encounter any issues or need help with setup:
- Check the Laravel documentation: https://laravel.com/docs
- React documentation: https://react.dev
- Inertia.js documentation: https://inertiajs.com

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

---

**Happy coding!** 🚀 Keep your portfolio updated and showcase your amazing work!
