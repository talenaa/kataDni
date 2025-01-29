# Kata DNI

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
