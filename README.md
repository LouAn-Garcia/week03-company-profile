# Phantom Tech — Company Profile Website

## 1. Project Title

**Phantom Tech — Laravel Company Profile Website**

A Persona-inspired company profile website developed using Laravel as part of the Week 03 Client-Server Computing activity.

---

## 2. Introduction

### What is a Company Profile Website?

A company profile website is an online platform that introduces a business, its identity, services, values, team, and contact information to visitors. It serves as a digital representation of a company and allows potential customers and business partners to learn more about the organization.

### Why Businesses Need One

Businesses need a professional online presence because customers often use the internet to research companies before choosing their products or services. A company website can improve credibility, provide important information, showcase services, and make it easier for customers to contact the business.

### Purpose of the Project

The purpose of this project is to develop a professional company profile website using Laravel and demonstrate the Model-View-Controller (MVC) architecture.

The project demonstrates Laravel routing, controllers, reusable Blade layouts, Blade components, and responsive web design.

The website is designed with a bold red, black, and white visual style inspired by the dramatic visual aesthetic of Persona-style interfaces.

---

## 3. Objectives

The following objectives were accomplished:

- Develop a company profile website using Laravel.
- Implement the Model-View-Controller (MVC) architecture.
- Create Laravel routes for the required website pages.
- Create and use a `CompanyController`.
- Implement reusable Blade layouts.
- Create reusable navigation and footer components.
- Develop Home, About, Services, and Contact pages.
- Display at least six company services.
- Create a responsive website design.
- Implement a professional and visually distinctive user interface.
- Organize the project according to Laravel conventions.
- Use Git and GitHub for version control and project submission.

---

## 4. MVC Architecture

### What is MVC?

MVC stands for **Model-View-Controller**. It is a software architecture pattern that separates an application into three major parts: the Model, View, and Controller.

The **Model** handles data and business-related operations.

The **View** handles what the user sees. In Laravel, Blade templates are commonly used to create views.

The **Controller** handles application logic and connects user requests to the appropriate response or view.

### Why Laravel Uses MVC

Laravel uses MVC because separating the different responsibilities of an application makes the code easier to understand, maintain, test, and expand.

For example, routes determine which controller method should receive a request, while the controller determines which Blade view should be displayed.

### Advantages of MVC

The main advantages of MVC include:

- Separation of concerns
- Easier code maintenance
- Better organization
- Easier testing
- Code reusability
- Easier collaboration between developers
- Easier expansion of larger applications

### MVC Request Flow

```text
        Browser
           │
           ▼
         Route
           │
           ▼
       Controller
           │
           ▼
       Blade View
           │
           ▼
 Response to Browser