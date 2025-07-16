<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/lutherdev/">
    <img src="./assets/img/mineforge.png" alt="MineForge" width="130" height="100">
  </a>
  <h3 align="center">MineForge</h3>
</div>
<div align="center">
  MineForge, your marketplace for mining gears, ores, and amazingly forged tools from the mountains of Sword Coast.
</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=lutherdev/AD-MineForge)

[![wakatime](https://wakatime.com/badge/user/07922ef3-1982-4f9d-9785-e4224b8b3d43/project/772d92fb-ed73-4e5b-910c-3896139401cc.svg)](https://wakatime.com/badge/user/07922ef3-1982-4f9d-9785-e4224b8b3d43/project/772d92fb-ed73-4e5b-910c-3896139401cc)

---

<br />
<br />

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

MineForge is a medieval themed store that offers mining tools, gears and ores for purchase. We forge one of the best of best and helps you be prepared for your mining quest. This website allows customer to create an account, browse available items, add to cart, top up their wallets, edit their profile information. While the admin can manage the items, users, and view items, users and messages.

### Key Components

- Authentication & Authorization
- Customer Registration & Login
- Admin and Customer Role Separation
- CRUD Operations for Users (Admin)
- CRUD Operations for Items (Admin)
- Item Browsing and Filtering
- Add to Cart Functionality and Checkout
- Wallet Top-Up System
- User Profile Editing
- Order History Viewing
- Admin Dashboard for Managing Items, Users, and Messages
- Message/Feedback Viewing (Admin)

### Technology

#### Language
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Databases
![PostgreSQL](https://img.shields.io/badge/PostgreSQL-336791?style=for-the-badge&logo=postgresql&logoColor=white)

#### Deployment

![Docker](https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)

## Rules, Practices and Principles


1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-ProjectName
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|       └─ name.js
└─ components
|   └─ name.component.php
|   └─ templates
|      └─ name.component.php
└─ handlers
|   └─ name.handler.php
└─ layout
|   └─ name.layout.php
└─ pages
|  └─ pageName
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ name.jpeg/.jpg/.webp/.png
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ staticData
|  └─ name.staticdata.php
└─ utils
|   └─ name.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources


| Title        | Purpose                                                                       | Link          |
| ------------ | ----------------------------------------------------------------------------- | ------------- |
| Item Images  | Images for the items in the store                                             | https://chatgpt.com |
| Card Images  | Images for the card                                                           | https://chatgpt.com |
| Google Images| Utilized for some images                                                      | https://google.com |
| Pinterest    | Utilized for some background images                                           | https://ph.pinterest.com |
