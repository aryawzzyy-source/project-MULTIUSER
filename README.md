# 🔐 Multi-User Authentication System
### PHP Native • MySQL • Role-Based Access Control

Sistem autentikasi berbasis web menggunakan **PHP Native** tanpa framework dengan implementasi **Role-Based Access Control (RBAC)**.

Project ini dibuat untuk memahami konsep fundamental backend development seperti session handling, database integration, dan sistem otorisasi berbasis role.

---

## 🚀 Overview

Aplikasi mendukung dua jenis pengguna:

- 👨‍💼 **Admin** → Dashboard Admin
- 👤 **User** → Dashboard User

Sistem memvalidasi kredensial melalui MySQL dan menyimpan status login menggunakan session PHP.

---

## 🛠 Tech Stack

- **Backend** : PHP Native
- **Database** : MySQL
- **Frontend** : HTML5 & CSS3
- **Server** : Apache (XAMPP / LAMP)

---

## 🗄 Database Setup

### 1️⃣ Create Database

```sql
CREATE DATABASE db_login_multiuser;
USE db_login_multiuser;
```

### 2️⃣ Create Table

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') NOT NULL
);
```

### 3️⃣ Insert Default Data

```sql
INSERT INTO users (username, password, role) VALUES
('admin', MD5('admin123'), 'admin'),
('user1', MD5('user123'), 'user');
```

---

## 📂 Project Structure

```
MULTIUSER/
│
├── config/
│   └── database.php
│
├── assets/
│   └── style.css
│
├── login.php
├── proses_login.php
├── dashboard_admin.php
├── dashboard_user.php
├── logout.php
```

---

## ⚙️ How to Run

1. Start **Apache & MySQL** from XAMPP  
2. Import database via phpMyAdmin  
3. Place project folder in:

```
htdocs/
```

4. Open in browser:

```
http://localhost/MULTIUSER/login.php
```

---

## 🔑 Default Login

| Role  | Username | Password |
|-------|----------|----------|
| Admin | admin    | admin123 |
| User  | user1    | user123  |

---

## 📈 Future Improvements

- Replace MD5 with password_hash()
- Use Prepared Statements
- Add CSRF Protection
- Implement MVC Structure
- Add Admin CRUD User Management
