# CSB383 HW Final Project

---

## 📄 Make a New Document

**Naming Convention:** `HWFinal-MUId.docx`

(Example: HWFinal-johnsok9.docx)

### 🎯 Objective

The objective of this exercise is to use all the skills learned in the entire course.

### 📤 Submit

- Screenshots
- Word document
- HTML files
- Links to your web page(s)

> You may discuss the concepts with your fellow students, but you may **not** show or share code with your fellow students (except your partner).
> **You may not show or share code with internet sources.**
> You may discuss this with your instructor or TA.

---

> **NOTE:** This assignment includes a mandatory presentation by you to the Professor and submission to Canvas. Any assignments that are not presented will receive a zero for the entire assignment. This must be working on your OpenStack instance.

The programming part of the final project is a three-page website: an introduction (landing) page, an AI front-end page, and a history page. These pages are described below. Any sections left out (such as the page layout) are up to your discretion.

---

## 🧩 Part #1: Create a GitLab Project

**Estimated Time:** 0.5 – 2 hours

### Exercise

#### GitLab

- Follow the lab assignment for this part.
- Create your final project in GitLab (one person only):
    - Share this with your partner.
- Clone it into your `~/ubuntu` directory.
- Note: you and your partner will work together. Make sure you both have access to one OpenStack server and the Git repository (so you can show this later).

#### Project

- Make certain Docker, Apache, SQLite database, phpliteadmin, and password protection are all working.

---

## 🌦️ Part #2: Final Project

**Estimated Time:** 20–40 hours
**Assignment:** Weather Dashboard Web Application

### Objective

Develop a sophisticated, responsive web application, building a fully responsive weather dashboard that integrates real-time weather data, AI-generated summaries, and historical logging, with a professional landing page and profile pages for each team member. The application includes transaction logging and history tracking using OpenStack, PHP REST API, and SQLite. You will demonstrate your full-stack web development skills by incorporating HTML, CSS, JavaScript, jQuery, Ajax, Bootstrap, OpenStack, Linux, PHP, SQLite, Docker, and API integration. The application **must** be deployed and working on OpenStack.

### Project Overview

The weather dashboard project is designed to provide a capstone experience that brings together the wide range of web development skills learned throughout the course. By combining front-end technologies like HTML, CSS, Bootstrap, JavaScript, and jQuery with back-end tools such as PHP, Docker, and SQLite, students are challenged to apply their knowledge in a real-world, full-stack scenario. The inclusion of external API consumption and AI-generated content introduces modern development techniques that are increasingly relevant in today’s job market.

Additionally, the requirement to build a professional-looking, responsive, and interactive web application mirrors the expectations of real-world software development teams and encourages collaboration, planning, and iteration.

### Summary

This final project results in a multi-page weather web application that provides users with a clear, interactive dashboard powered by two real-time weather APIs. The application uses jQuery AJAX to fetch and display data, integrates AI summarization to provide natural-language weather forecasts, and logs results into a backend SQLite database for historical retrieval. Each system includes a responsive landing page, personalized profile pages for both team members, and full deployment on an OpenStack server. The final outcome is a polished, fully functional, and modern web application that showcases students’ ability to work collaboratively on a complete system from design to deployment.

---

## 📑 Pages Required

### 🌐 Landing Page

- Engaging introduction and clear overview of your smart database frontend application.
- Brief explanation of the app’s capabilities and intended use-case scenarios.
- General team information and easy navigation to other sections.

### 👥 Team Member Pages (Two Individual Pages)

- Professional-style personal photo.
- Clear description of individual skills, interests, and relevant technical competencies.
- Detailed overview of personal contributions to the project.
- Reflections or insights gained from working on the project.
- Links to personal GitLab/GitHub or other relevant professional profiles (optional, encouraged).

### ☁️ Weather Dashboard Page (Student-Created Frontend Interface)

- **Pick 2 of the three options for weather services:**
    - Sign up for the API if required.
    - Research how to get the required data using Ajax.
    - Services: Weatherapi.com, weather.gov, open-meteo.com.

#### Content Generation and Editing

- The user enters their address or zip code.
- Get whatever weather information you decide on to show for each service:
    - Today’s weather.
    - Upcoming weather for the next six days.
- Make a good-looking dashboard.
- Call ChatGPT, give it your weather data, and display a good summary of the day and upcoming week.
- Logs transaction metadata to the PHP REST backend interfaces.

---

### 📜 Transaction History Page

- Comprehensive overview of past user interactions and database queries.
- Interactive and sortable table for transaction details.
- Fetches historical data from the PHP REST backend.

---

## ⚙️ Technical Requirements

- Implement a responsive design with Bootstrap, ensuring functionality across various screen sizes and devices.
- Use external JavaScript and CSS files exclusively for better organization and maintainability.
- Employ AJAX calls (using jQuery with `.done()` and `.fail()` callbacks) exclusively for interacting with backend APIs.
- Ensure graceful degradation by clearly demonstrating layout and usability adjustments when resizing from desktop to mobile.
- Use jQuery for all DOM activity. You are not allowed to use `document.getElementByID`.

---

### 💡 Encouragement for Design Research

- You should look at examples of effective dashboard design for inspiration.
- I encourage you to get feedback from non-CS friends on user-friendliness and aesthetics.

---

### 🗃️ Database Design (SQLite)

- **Tables:** (may need more)
    - `transactions` — log user interactions, API requests, and related details.

### 🔗 API Integration

- **ChatGPT:**
    - AI summary of weather based on your data from weather APIs.
- **PHP REST API (OpenStack):**
    - Database interactions, including logging, retrieval, and detailed transaction records.
- **Pick two weather sources from:**
    - Weather.gov.
    - Weatherapi.com.
    - open-meteo.com.

---

## 🧱 Requirements

**Note:** Everything you write must use the following (from exam2):

### Concepts

- HTML.
- CSS.
- JavaScript.
- Bootstrap (must be responsive).
- jQuery.
- Ajax.

### Style

- Good-looking using CSS.
- All CSS, Ajax, and JavaScript must be external files.
- Every page (including the menu) must include pictures that integrate well into the web page.

### Location

- All code **must** be working on your OpenStack instance’s HTTP server, inside of the Docker container.
- All code must be in Git.

### Ajax

- You are to write all code using the jQuery Ajax routines as done in the lecture, labs, and homework. Some examples you see will use other methods, notably the fetch command. You may use those as an example to review, but you **must** use the `$.ajax` with done and fail calls for credit.

### Navigation Menu

- Menu of pages you are providing (with a mechanism to switch pages): **You are to research and decide on your own mechanism** to provide the front-end menu of pages.
    - This was not covered in class. However, you have already seen websites for research that include them.
    - **Do NOT** just add buttons or links to the top of a page (hint: nav); you must use a **navigation element (navbar)**.

---

### 📚 Helpful Resources

- [Bootstrap Documentation](https://getbootstrap.com/docs)
- [Chart.js Documentation](https://www.chartjs.org/docs)
- [OpenStack Documentation](https://docs.openstack.org)
- [SQLite Documentation](https://www.sqlite.org/docs.html)
- [ChatGPT API](https://platform.openai.com/docs/api-reference)

---

## 📝 Part #3: Each Person Must Write Their Own Word Document

**Estimated Time:** 45 minutes
(Note: a 2-minute Word document will be graded appropriately.)

### Exercise

- Make sure it includes your name, class, assignment, etc.
- Explain (relating to this assignment and the entire course) in **full paragraphs with full sentences** for full credit:
    - What worked.
    - What didn’t.
    - How long it took.
    - What you liked.
    - What you didn’t.

---

### 📬 Submit

- Word Document.
- Mandatory presentation of the working system in the Zoom session.
- Upload all code.
- Git all the code.
- Paste the URL of your menu page into the submission as a comment.

> **NOTE:** You are graded based on what you present. Do not attend the Zoom presentation; saying you will complete it later.

---
