<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Blog System 📝  

A powerful and user-friendly blog system built with **Laravel**. This project allows users to create, edit, and manage blog posts with an intuitive admin panel.  

## Features  
✅ User authentication (Login/Register)  
✅ Create, edit, and delete blog posts  
✅ Rich text editor for content creation  
✅ Category and tag management  
✅ Commenting system  
✅ SEO-friendly URLs  
✅ Responsive design  

## Live Demo  
[View the Blog](#) *(Add a link if hosted)*  

## Installation  
### **Prerequisites**  
Ensure you have the following installed:  
- PHP (>=8.0)  
- Composer  
- Laravel  
- MySQL or PostgreSQL  

### **Steps to Install**  
1. **Clone the repository**  
   ```sh  
   git clone https://github.com/A-Saleh-86/laravel-blog.git  
   cd laravel-blog  
   ```  

2. **Install dependencies**  
   ```sh  
   composer install  
   npm install && npm run dev  
   ```  

3. **Set up environment file**  
   ```sh  
   cp .env.example .env  
   ```  
   Update your `.env` file with database credentials.  

4. **Generate application key**  
   ```sh  
   php artisan key:generate  
   ```  

5. **Run database migrations**  
   ```sh  
   php artisan migrate --seed  
   ```  

6. **Start the application**  
   ```sh  
   php artisan serve  
   ```  

Now, visit **`http://127.0.0.1:8000`** to access the blog! 🚀  

## Technologies Used  
- Laravel (PHP Framework)  
- Blade (Templating Engine)  
- Tailwind CSS / Bootstrap  
- JavaScript  
- MySQL / PostgreSQL  

## Folder Structure  
```sh  
laravel-blog/  
🔄 app/           # Application logic  
🔄 bootstrap/     # Bootstrap framework  
🔄 config/        # Configuration files  
🔄 database/      # Migrations & Seeds  
🔄 public/        # Public assets (CSS, JS, Images)  
🔄 resources/     # Views & frontend assets  
🔄 routes/        # Web & API routes  
🔄 storage/       # Logs & uploads  
🔄 tests/         # Automated tests  
🔄 .env           # Environment settings  
🔄 artisan        # CLI tool  
🔄 composer.json  # Dependencies  
🔄 package.json   # Frontend dependencies  
```  

## API Endpoints (If applicable)  
| Method | Endpoint       | Description                  |  
|--------|--------------|------------------------------|  
| GET    | `/posts`     | Get all blog posts          |  
| GET    | `/post/{id}` | Get a single blog post      |  
| POST   | `/post`      | Create a new blog post     |  
| PUT    | `/post/{id}` | Update a blog post         |  
| DELETE | `/post/{id}` | Delete a blog post         |  

## Contributing  
Pull requests are welcome! If you find any issues, feel free to open an issue.  

---  

### **Enjoy blogging! ✍️🚀**

