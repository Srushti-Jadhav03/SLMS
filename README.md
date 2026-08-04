# 🎓 Student Leave Management System (SLMS)

A web-based **Student Leave Management System** developed to simplify and automate the process of applying for and managing student leave requests.

The system provides students with an easy way to register, log in, submit leave requests, and track their leave information. It also provides an **Admin Panel** for managing students and leave-related activities.

---

## 📌 About the Project

The **Student Leave Management System (SLMS)** is designed to replace the traditional manual leave application process with a simple digital solution.

The application helps educational institutions maintain student leave records efficiently while reducing paperwork and making leave management easier for both students and administrators.

---

## ✨ Features

### 👨‍🎓 Student Module

* Student Registration
* Student Login
* Secure user authentication
* Student Dashboard
* Apply for Leave
* View leave-related information
* Manage student account/session
* Logout functionality

### 👨‍💼 Admin Module

* Admin Login
* Admin Dashboard
* Manage registered students
* View student leave requests
* Manage leave applications
* Maintain leave records
* Administrative control over the system

---

## 🛠️ Technologies Used

| Technology     | Purpose                   |
| -------------- | ------------------------- |
| **PHP**        | Backend Development       |
| **MySQL**      | Database Management       |
| **HTML5**      | Web Page Structure        |
| **CSS3**       | Styling                   |
| **JavaScript** | Client-side Functionality |
| **Bootstrap**  | Responsive User Interface |
| **XAMPP**      | Local Development Server  |

---

## 📂 Project Structure

```text
SLMS/
│
├── slms/
│   │
│   ├── admin/
│   │   └── Admin related functionality
│   │
│   ├── css/
│   │   └── Stylesheets
│   │
│   ├── fonts/
│   │   └── Font resources
│   │
│   ├── img/
│   │   └── Images and UI assets
│   │
│   ├── inc/
│   │   └── Common PHP includes and configuration
│   │
│   ├── js/
│   │   └── JavaScript files
│   │
│   ├── DATABASE FILE/
│   │   └── Database files required for the project
│   │
│   ├── dashboard.php
│   ├── index.php
│   ├── register.php
│   └── logout.php
│
└── README.md
```

---

## ⚙️ Installation and Setup

### 1. Install XAMPP

Install **XAMPP** or another PHP development environment containing:

* Apache
* PHP
* MySQL

---

### 2. Clone the Repository

```bash
git clone https://github.com/Srushti-Jadhav03/SLMS.git
```

Or download the repository as a ZIP file and extract it.

---

### 3. Move the Project to XAMPP

Move the project folder into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\SLMS
```

---

### 4. Start the Server

Open the **XAMPP Control Panel** and start:

```text
Apache
MySQL
```

---

### 5. Configure the Database

1. Open **phpMyAdmin**.
2. Create the required database.
3. Navigate to the project's:

```text
slms/DATABASE FILE/
```

4. Import the provided SQL/database file.
5. Verify the database connection configuration inside the project.

---

### 6. Run the Application

After starting Apache and MySQL, open the project through your localhost server.

```text
localhost/SLMS/slms/
```

The Student Leave Management System should now be available.

---

## 🔄 System Workflow

```text
Student Registration
        ↓
Student Login
        ↓
Student Dashboard
        ↓
Apply for Leave
        ↓
Leave Request Stored
        ↓
Admin Reviews Request
        ↓
Leave Request Management
        ↓
Student Leave Record Updated
```

---

## 🎯 Objectives

The main objectives of SLMS are:

* Digitize the student leave application process
* Reduce paperwork
* Maintain centralized student leave records
* Simplify leave request management
* Provide easy access to leave information
* Improve efficiency for students and administrators

---

## 🚀 Future Enhancements

The system can be further improved by adding:

* Email notifications for leave status
* SMS notifications
* Multi-level leave approval
* Faculty/HOD login
* Leave statistics and analytics
* PDF leave reports
* Advanced search and filtering
* Mobile responsive dashboard
* REST API integration
* Role-based access control

---

## 📚 Academic Project

This project was developed as an academic project to demonstrate the implementation of a web-based student leave management solution using **PHP and MySQL**.

---

## ⭐ Support

If you find this project useful, consider giving the repository a ⭐ on GitHub.

---

### Student Leave Management System

**Making student leave management simple, organized, and paperless.**
