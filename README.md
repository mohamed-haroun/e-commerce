# Laravel E-commerce Single Vendor

[![Laravel Version](https://img.shields.io/badge/Laravel-10.x-orange.svg)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.1+-purple.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

A modern, fully-featured single-vendor e-commerce platform built with Laravel. This application provides everything needed to run an online store with admin management capabilities.

![E-commerce Screenshot](screenshot.png) <!-- Add your screenshot here -->

## ✨ Features

### 🛍️ Customer Features
- **User Registration & Authentication** - Secure signup/login with email verification
- **Product Catalog** - Browse products by categories, brands, and filters
- **Advanced Search** - Search products with filters and sorting
- **Shopping Cart** - Add/remove items, update quantities
- **Wishlist** - Save favorite products for later
- **Checkout Process** - Multi-step checkout with address management
- **Multiple Payment Methods** - Stripe, PayPal, and Cash on Delivery
- **Order Tracking** - Track order status with real-time updates
- **Product Reviews & Ratings** - Rate and review purchased items
- **Coupon System** - Apply discount codes at checkout

### 👨‍💼 Admin Dashboard
- **Dashboard Analytics** - Sales overview, revenue charts, and statistics
- **Product Management** - CRUD operations for products, categories, brands
- **Inventory Management** - Stock control with low stock alerts
- **Order Management** - Process and fulfill customer orders
- **Customer Management** - View and manage customer profiles
- **Content Management** - Manage banners, pages, and announcements
- **Report Generation** - Sales reports, customer reports, product reports
- **Coupon Management** - Create and manage discount coupons

## 🛠️ Tech Stack

**Backend:**
- Laravel 10.x
- PHP 8.1+
- MySQL 8.0+
- Redis (Caching & Queues)

**Frontend:**
- Tailwind CSS
- Alpine.js
- Vite
- Heroicons

**Payment Gateways:**
- Stripe
- PayPal
- Cash on Delivery

**Key Packages:**
- `spatie/laravel-permission` - Role-based permissions
- `spatie/laravel-medialibrary` - Media management
- `laravel/cashier` - Subscription billing
- `maatwebsite/excel` - Import/export functionality
- `barryvdh/laravel-dompdf` - PDF generation

## 📦 Installation

Follow these steps to set up the project locally:

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js & npm
- MySQL 8.0+
- Redis (optional but recommended)

### Step 1: Clone the repository
```bash
git clone https://github.com/yourusername/laravel-ecommerce.git
cd laravel-ecommerce
