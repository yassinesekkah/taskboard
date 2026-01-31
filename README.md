# 🧩 Taskly – Task Management Application

Taskly is a modern task management web application inspired by tools like Jira and Trello.  
It was built as a learning-focused project to practice **Laravel**, **Blade components**, and clean **CRUD-based architecture**, while delivering a smooth and productive user experience.

---

## 🚀 Features

### 🔐 Authentication
- User registration, login, and logout
- Authentication powered by **Laravel Breeze**
- Tasks are securely scoped to the authenticated user

### 📋 Task Management (CRUD)
- Create, read, update, and delete tasks
- Task fields:
  - Title
  - Description
  - Status (todo, in_progress, done)
  - Priority (low, medium, high)
  - Deadline
- Authorization checks to ensure only task owners can modify or delete tasks
- Soft delete support

### 📊 Kanban Board
- Tasks displayed in a Kanban-style board
- Columns:
  - Todo
  - In Progress
  - Done
- Tasks ordered by deadline
- Clean and intuitive workflow visualization

### 📑 Backlog View
- Centralized list of all tasks
- Advanced task management with:
  - 🔍 Search (title + description)
  - 🔽 Filter by priority
  - 🔄 Filter by status
- Filters are auto-applied (no submit button required)
- Pagination with query string preservation

### ⚡ Frontend Interactions
- **Tailwind CSS** for a modern and responsive UI
- **Alpine.js** for lightweight interactivity:
  - Modals
  - Sidebar toggle
  - Dropdowns
- No SPA complexity — simple and efficient interactions

---

## 🛠️ Tech Stack

- **Laravel** (MVC architecture)
- **Blade** & Blade Components
- **Laravel Breeze** (Authentication)
- **Eloquent ORM**
- **MySQL**
- **Tailwind CSS**
- **Alpine.js**
- **Vite**

---

## 🧠 Code Architecture & Best Practices

- Clear separation of concerns:
  - Controllers for business logic
  - Models for data and query scopes
  - Blade views for presentation
- Reusable **Eloquent scopes**:
  - `search()`
  - `priority()`
  - `status()`
- Clean routing and controller structure
- Secure user data isolation
- Readable and maintainable codebase

---