# Kata DNI (PHP LARAVEL)

For this project we need to make an app in php laravel that returns an eight-digit number with a letter, via endpoints. It emulates the Spanish National Identification card (DNI).
***

## 🛠️ How it works
>[!IMPORTANT]
>The app has two type of operations, inserting the valid length (8 numbers), or an invalid length (7 numbers).

Going into postman insert the following route:
```
http://127.0.0.1:8000/api/assign/{id}
```
>[!NOTE]
>In the id put a random eight-digit number, or if you want to see the return of the invalid length, put 7 numbers. The two operations are made with the "get" request.

After inserting the route with the eight-digit id, you'll get the return of the number with a letter. Take a look below:

![Screenshot 2025-01-29 130754](https://github.com/user-attachments/assets/04fbe663-848e-4896-a181-130a1e9a7edc)

<p align="center">
  As you can see, my return was the eight-digit number with a random letter.
</p>

***

<p align="center">
  Now the invalid length.
</p>

![Screenshot 2025-01-29 123906](https://github.com/user-attachments/assets/13c81b31-1076-45b8-adda-7c2d51684d98)

<p align="center">
  As you can see the return is a text.
</p>

***
## Installation requirements
Before you start to read how to install the app you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

1. XAMPP

2. Install Composer

3. Install NPM in Node.js

4. Xdebug (for the tests coverage)

5. Postman
***

## Installation guide
>[!NOTE]
>Before we begin it's important that you create a database (i used mysql via xampp).

1. Clone this repository:
```
https://github.com/talenaa/kataDni.git
```

2. Install composer and NPM through the VSC terminal
```
composer install
```
```
npm install
```

3. In the .env file scroll a bit down and change the existing lines for these following lines

![Screenshot 2025-01-29 133548](https://github.com/user-attachments/assets/bb919b6c-e079-4b05-949b-8b54ac26e06e)

***

## ⚙️ Tests

These are all my tests passed:

![Screenshot 2025-01-29 124054](https://github.com/user-attachments/assets/c3f66876-16a1-4a28-8e82-38f8aab739e5)

***

## 📋 Jira backlog

![Screenshot 2025-01-29 142136](https://github.com/user-attachments/assets/ae496113-e1d8-4992-8321-6b3d202f95a3)

***

## 🧰 Languages and Tools

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FF8800&color=FF8800'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
