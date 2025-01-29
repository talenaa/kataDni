# Kata DNI

For this project we need to make an app in php laravel that returns an eight-digit number with a letter, via endpoints. It emulates the Spanish National Identification card (DNI).

## 🛠️ How it works
>[!IMPORTANT]
>The app has two type of operations, inserting the valid length (8 numbers), or an invalid length (7 numbers).

Going into postman insert the following route:
```
http://127.0.0.1:8000/api/assign/{id}
```
>[!NOTE]
>In the id put a random eight-digit number, or if you want to see the return of the invalid length, put 7 numbers. The two operations are made with the "get" request.

After inserting the route with the eight-digit id, you'll get the return of the number with a number letter. Take a look below: