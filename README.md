# CSIT-Internship-Activity-Log 🚀

A modern web application built with Laravel to manage and automate internship activity logging. It syncs directly with Excel files to maintain a professional record.

## ✨ Features
- **Dashboard Overview**: Track your progress through 16 weeks of internship.
- **Smart Statuses**: 
    - `Pending`: No logs yet.
    - `In Progress`: Partial logs added.
    - `Completed`: 5 daily logs from monday-friday  and a weekly summary provided.
- **Sequential Logging**: Weeks unlock only after the previous week is completed.
- **Student Profile**: Manage your Name, Reg No, Company, and Supervisor details via the UI.
- **Excel Sync**: Automatically reads and writes to your internship Excel sheets.

## 📂 File Locations & Structure
The app manages two main files in the root directory:
- `CSIT-Internship Activity Log - 1.xlsx`: Stores Student Profile (Cover Page) and Weekly Summaries.
- `Daily_Reports.xlsx`: Stores detailed daily activity logs.

## 🛠️ Setup Instructions

### 1. Prerequisites
- **PHP 8.1+**
- **Composer**

### 2. Installation
1.  **Clone the repository**:
    ```bash
    git clone [repository-url]
    cd Activity_Log_Tracker
    ```
2.  **Install Dependencies**:
    ```bash
    cd Internship-log-tracker
    composer install
    ```
3.  **Configure Environment**:
    - Copy `.env.example` to `.env` (if needed)
    - Ensure your Excel log files are in the project root

### 3. Running the App
1.  **Start the Laravel Server**:
    ```bash
    cd activity-log-tracker
    php artisan serve
    ```
2.  **Access the Dashboard**:
    Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

## 💡 Troubleshooting
- **"Resource temporarily unavailable"**: This happens if the Excel file is open in another app. **Close Excel** and try again.
- **Missing File**: If the Excel files are moved, the app will error. Keep them in the root directory of the project.

## 📝 Usage Tips
- **Pre-filled Dates**: The daily activity form defaults to today's date for faster entry.
- **Full Width**: The application is optimized for full-screen use to display data clearly.
