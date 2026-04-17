# WordPress Headless CMS

A custom WordPress headless setup with modular theme architecture, REST API layer, ACF integration, and secure API authentication for modern frontend frameworks like Next.js.

## Features

Modular theme structure
Custom REST API endpoints
ACF-based content management
API key authentication
Clean bootstrap architecture
Headless-ready WordPress setup


##  Structure
theme/
inc/
api/
functions.php

## Architecture Overview
Theme_Bootstrap - Loads theme system
Api_Bootstrap - Loads API system
routes.php - Registers REST routes
requests/ - Contains API logic
Response.php - Standard API response structure
Options_Page - Manages Site Settings via ACF Options Page

## How to Setup

1. Clone repository
2. Place inside WordPress themes folder
3. Activate theme
4. Add API key in wp-config.php

## Site Settings (ACF Options Page)

This project includes a Site Settings admin page powered by ACF.

WP Admin → Site Settings

### Purpose:
Used to manage global website data such as:
- Logo
- Footer content
- Social links
- Global theme configurations


## API Authentication

All requests require header:

x-api-secret : YOUR_SECRET_KEY


## Example API Endpoint

### Get Page by Slug
GET /wp-json/v1/pages/{slug}

### Get Site Settings
GET /wp-json/v1/settings

### Get Menu
GET /wp-json/v1/menu


## Author
Sonia Chhabra

