# 📚 BOOKSHELF – Online Bookstore Web Application
A PHP-based web application that allows users to browse books, manage carts, view categories, register/login, update profiles, and interact with an online bookstore system.

---

## 🎯 Introduction
BOOKSHELF is a complete online bookstore system developed using PHP and MySQL.  
It provides functionalities such as user authentication, book browsing, cart management, category filtering, and an admin panel for book and user management.

This project is ideal for students, academic submissions, portfolio projects, or anyone learning full-stack PHP development.

---

## ✅ Features

### **User Features**
- User registration and login  
- Browse and view books by categories  
- Add books to cart  
- Remove books from cart  
- Search books  
- Update user profile  
- Change password  
- Contact form for user queries  

### **Admin Features**
- Admin login  
- Add, edit, delete books  
- Manage categories  
- Manage users  
- View contact messages  

### **Technical Features**
- Built using **Core PHP**  
- MySQL-based database  
- HTML, CSS, JS frontend  
- Session-based authentication  
- Organized folder structure  

---

## 🛠 Installation & Setup

### **Requirements**
- XAMPP / WAMP / MAMP  
- PHP 7+  
- MySQL or MariaDB  
- Web browser  

---

### **1️⃣ Extract the Project**
Place the `BOOKSHELF` folder inside:

```
xampp/htdocs/
```

---

### **2️⃣ Import Database**
1. Open **phpMyAdmin**  
2. Create a database (example name):  
   ```
   bookshelf_db
   ```
3. Import the SQL file found in:

```
BOOKSHELF/database/
```

---

### **3️⃣ Configure Database Connection**
Open your database configuration file and set:

```php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "bookshelf_db";
```

---

### **4️⃣ Run the Application**
Open in your browser:

```
http://localhost/BOOKSHELF/
```

---

## 📁 Project Structure

```
BOOKSHELF/
│── admin/
│── css/
│── js/
│── database/
│── img/
│── index.php
│── books_page.php
│── category_books.php
│── cart.php
│── registration_code.php
│── userlogincode.php
│── my_profile.php
│── contact.php
│── logout_user.php
```

---

## 👥 Who Can Use This
- Students building projects  
- PHP beginners  
- Developers showcasing full-stack work  
- Anyone learning PHP + MySQL  

---

## 📄 License
This project is open-source and free to modify.

---

## 🤝 Contributions
Feel free to contribute.  
Open an issue or submit a pull request.

