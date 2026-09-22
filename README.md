# PHP To-Do List Application 📝

A simple and responsive Task Management (To-Do List) web application built using raw PHP, MySQL, and Bootstrap 4.
This project demonstrates the fundamental concepts of CRUD (Create, Read, Update, Delete) operations in PHP along with clean code practices, modular file structuring, and basic form validation.

##  Features

*   **Add New Task:** Users can easily add new tasks specifying the title and their completion status.
*   **View Tasks:** All tasks are fetched dynamically from the database and displayed in an organized table format.
*   **Update Task:** Users can edit an existing task's title or toggle its status between (Completed / Not Completed).
*   **Delete Task:** Tasks can be deleted permanently from the database with a single click.
*   **Session-based Flash Messages:** Displays success and error messages using PHP `$_SESSION` to provide immediate feedback to the user.
*   **Clean Architecture:** Code is logically separated into distinct directories (core, database, handlers, views) for better maintainability.

##  Technologies Used

*   **Backend:** PHP (Procedural)
*   **Database:** MySQL / phpMyAdmin
*   **Frontend:** HTML5, CSS3, Bootstrap 4
*   **Local Environment:** Laragon 

## Project Structure
📁 design
├── 📁 assets
│   └── 📄 script.js           # Frontend scripts (if any)
├── 📁 core
│   ├── 📄 functionForQuery.php # Centralized SQL queries and database functions
│   └── 📄 validations.php      # Form validation logic
├── 📁 database
│   ├── 📄 dbConnection.php     # MySQL database connection setup
│   └── 📄 migration.php        # Database tables setup script
├── 📁 handelers
│   ├── 📄 addTask.php          # Logic for inserting a new task
│   ├── 📄 delete.php           # Logic for deleting a task
│   └── 📄 edit.php             # Logic for updating a task
├── 📁 views
│   └── 📄 update.php           # UI for editing an existing task
└── 📄 index.php                # Main dashboard displaying all tasks and the add form
/////////////////////
and search for ACID properties in the database
