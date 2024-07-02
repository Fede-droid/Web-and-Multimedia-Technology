# Web-and-Multimedia-Technology Project

## Project Description

I created a website for the **Cignoli Automotive Group** aimed at the group's administrators. This project uses a range of technologies to ensure a smooth and functional user experience, both client-side and server-side.

## Table of Contents

- [Technologies Used](#technologies-used)
  - [Client-side](#client-side)
  - [Server-side](#server-side)
- [Website Features](#website-features)
  - [Login Page](#login-page)
  - [Home Page](#home-page)
  - [Associazione Page](#associazione-page)
  - [Proprietario Page](#proprietario-page)
  - [Concessionaria Page](#concessionaria-page)
  - [Automobile Page](#automobile-page)
  - [Statistiche Page](#statistiche-page)
  - [Logout](#logout)

## Technologies Used

### Client-side
- **HTML5**: Used for the structure of web pages.
- **CSS**: Used for the styling and layout of the site.
- **JavaScript**: Used for page interactivity and dynamism.

### Server-side
- **XAMPP**: Used as a development environment for Apache, PHP, and MySQL.
- **MySQL**: Used for database management.
- **PHP**: Used for server logic and database interaction.

## Website Features

### Login Page
The login page includes the following elements:
- **Title**: "Cignoli Automotive Group Login Page" with a lock image.
- **Login Form**: Users must enter their username and password. If fields are left blank or incorrect, an error popup will appear.
- **Login Button**: Submits the login form.
- **Brief Description**: Explains what users can do on the website.
- **Footer Links**:
  - Privacy Policy
  - Contacts and Opening Hours
  - SQL File Download

When the administrator is logged in, a navbar appears on every page of the site, containing links to other sections.

### Home Page
At the top of this page, there is the navbar. Secondly, there are some pieces of text in the center part of the page that talk about the main objectives of the company, along with the company's vision, interspersed with images showcasing our branches. Finally, there is the same footer that I explained previously.

### Associazione Page
The main focus of this page is to help users see more easily what is inside the company database. In fact, on this page, we always see the navbar at the top, and below the navbar, there is a title that describes the focus of the page. Following that, there is a table showing what is inside the database table "Associazione" through a query executed by the server. Additionally, an important feature of the page is a module that helps the administrator search for keys more rapidly. It provides live suggestions as the administrator types. Lastly, there is always the same footer.

### Proprietario Page
On this page, below the navbar, there is a title that explains the purpose of the page. Following that, there is an image depicting a salesman and a woman who has purchased a car at one of the possible Cignoli Automotive branches. Furthermore, beneath the image, there is a table displaying the database table "filiali". Here, we can find data about branch ownership, such as the "codice fiscale", the name and surname of the boss, the date of birth, the email, and the correlation between them and the Associazione table. Finally, there is the footer.

### Concessionaria Page
On this page, after and below the navbar, there is a page title and a large centered image showcasing one of the Cignoli Automotive group branches in the foreground. Following that, in the middle of the page, there is a table displaying data about the related dealerships. It includes the PI, the name of the dealership, its belonging group, and the CF related to the Proprietario table. Afterwards, we can see the footer.

### Automobile Page
On this page, after and below the navbar, there is a page title and a large centered image depicting the interior of one of the Cignoli Automotive group branches. Following that, there is the largest table on the website where the administrator can view the cars and their relevant information present in the company database. Finally, we can see the footer.

### Statistiche Page
This is the most important page of the website because here, the administrator can view the statistics about cars sold. At first glance, there is the title, followed by three different reports, one after the other. Each report includes an image representing the graph and accompanying text that explains what the user can see. The first report discusses the "Sales Analysis from 2000 to 2024." This is also the title of the report, and on the left side, there is an image displaying a column chart, with explanatory text on the right side. The second report is titled "Analysis of Sales in Italy by Brand (2000 - 2012)." Following this title, there is another image on the right side of the page, showing a different type of column chart. Corresponding explanatory text is positioned on the left side of the page. The last report focuses on the "Analysis of Sales in Italy by Brand (2013 - 2023)." Similar to the previous reports, the image (graph) is positioned on the right side, with accompanying text on the left side.

### Logout
Finally, clicking on the logout option does not lead to a separate page. Instead, it redirects the user back to the login page.
