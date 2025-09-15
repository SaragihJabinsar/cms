# 📰 Blog CMS (PHP + Bootstrap)

A simple **Content Management System (CMS)** for blogging, built with **PHP, MySQL, and Bootstrap**.  
This project is designed to manage articles with basic **CRUD functionality** (Create, Read, Delete).  
Perfect for beginners who want to learn **fullstack fundamentals**. ✨

---

## 🚀 Features
- 📄 List all blog posts on the homepage (`index.php`)
- 🔎 View single post detail (`post.php`)
- ➕ Add new posts with image upload (`admin.php`)
- 🗑️ Delete posts safely (`delete.php`)
- 🎨 Styled with **Bootstrap (CDN)** for a modern look

---

## 📂 Project Structure
blog-cms/
│── index.php → Homepage (list of posts)
│── post.php → Post detail page
│── admin.php → Add new post form
│── delete.php → Delete post by ID
│── db.php → Database connection
│── assets/
│ ├── css/
│ │ └── bootstrap.min.css (CDN linked in files)
│ └── uploads/ → Folder for uploaded images

yaml
Copy code

---

## 🛠️ Tech Stack
- **Frontend**: HTML5, Bootstrap 5 (via CDN)
- **Backend**: PHP (Procedural)
- **Database**: MySQL
- **Server**: XAMPP / LAMP / WAMP

---

## ⚙️ Setup Instructions
1. Clone this repository:
   ```bash
   git clone https://github.com/your-username/blog-cms.git
   cd blog-cms
Import the database:

Create a new database blog_db

Run this SQL:

sql
Copy code
CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL,
  image VARCHAR(255) NOT NULL
);
Configure database connection in db.php:

php
Copy code
$host = "localhost";
$user = "root";
$pass = "";
$db   = "cms";
$conn = mysqli_connect($host, $user, $pass, $db);
Start your server (XAMPP/LAMP):

Place project inside htdocs/

Visit: http://localhost/blog-cms/

📸 Screenshots
![App Screenshot](./contoh.png)

📌 CRUD Operations
Create → Add new post (admin.php)

Read → Show posts (index.php, post.php)

Delete → Remove post (delete.php)

Update → Not implemented yet (can be added in future)

🔮 Future Improvements
✏️ Edit/Update posts

👤 User authentication (login/logout)

🌙 Dark mode with JavaScript

🛡️ Security improvements (Prepared Statements, CSRF token)

