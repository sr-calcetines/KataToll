# 🛣️ Kata Tolls and Vehicles 🚗
In this project it is required to develop a program that models a toll system. In which data on both tolls and vehicles are stored, as well as the relationships between them.Designed with [Laravel](https://laravel.com) framework. 

## 👀 Views
![image](https://github.com/user-attachments/assets/185b674f-5a13-45b3-93f7-cefc12bb0eea)
*Tolls View*

![image](https://github.com/user-attachments/assets/9826f800-2534-43ce-a8a7-60008484395c)
*Vehicles View*

## 💻 Languages ​​and tools  
![](https://skillicons.dev/icons?i=html,css,php,laravel,git,github,vscode,)

## ⚙️ Installation prerequisites
🟢Install [Node.js](https://nodejs.org/en/download/source-code)

🟢Install [Composer](https://getcomposer.org/download/)

## 🛠️ Installation Guide 
0️⃣ Before starting to install the project, you will need to create a database (we have used mysql via xampp) and name it: `katatoll` 

1️⃣ Open a terminal in the folder where you want the repository to be cloned and enter this command:

`https://github.com/sr-calcetines/KataToll.git`

2️⃣ As you clone the repository, it will appear all the elements on it; you need to rename the file ".env.example" to ".env" and fill it with theese values:

![image](https://github.com/user-attachments/assets/3214fd0e-b010-4b18-a266-60e93e4d3168)

2️⃣ In your preferred environment, open the project you cloned; you will need three consoles for the next step.

▷Console 1:
    `npm install` `npm run dev`
    
▷Console 2:
    `composer install` `php artisan serve`
    
▷Console 3: 
    `php artisan migrat:fresh`
    `php artisan migrat:fresh --seed`
    
3️⃣ In the second console that you have opened, press the ctrl key and click on the link to localhost that it offers you. It should take you to the main view of the project where the offers are located.

⚠️ If you have done the previous steps and the view has not opened correctly, go back to the third command console and enter this:

`php artisan key:generate` `php artisan config:cache` 

## 🌐 Endpoints 
For this project, there are 2 endpoints for adding vehicles and tolls. And another one to make a vehicle pass through the toll. For the 2 first you'll need to introduce via postman this json schema to enter the data.

### 🏍️ Create Vehicle (POST)
`http://127.0.0.1:8000/api/vehicles`

![image](https://github.com/user-attachments/assets/e8536248-5283-4dd4-9f8d-1e1cdedc8212)

### 🛣️ Create Toll (POST)
`http://127.0.0.1:8000/api/toll`

![image](https://github.com/user-attachments/assets/a1c6e372-9034-4f67-a3f9-46dd6642c4ce)

### 🚚 Pass Through Toll 🛣️ (PUT)
`http://127.0.0.1:8000/api/vehicles/id/tolls/id`

## 🧪 Tests 
All tests passed. Introduce this line on your console to check it:

`./vendor/bin/phpunit tests`

  <img src="https://github.com/user-attachments/assets/495129c1-c17a-4314-8b42-85fa244aab7b" alt="PHP test" width="500"/>

If you want to launch the tests and view them you can put this command in console 3:

`php artisan test --coverage` 

  <img src="https://github.com/user-attachments/assets/fabb265d-bb44-45a7-8b21-84f15955af8e" alt="PHP test coverage" width="500"/>

## 🛠️ Jira Backlog 

![image](https://github.com/user-attachments/assets/7277c736-b984-4646-83b6-5768c3620ed8)

## 🗂️ BBDD Schema

![image](https://github.com/user-attachments/assets/b55d72bf-d829-4454-8837-61a05480c109)

## 👩‍💻 About me  
DAW graduate, im a developer enhancing my skills through a bootcamp focused on frontend, backend, and AWS.
- [José Ignacio Gavilán Sánchez](https://github.com/sr-calcetines)
