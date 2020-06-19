# UbiTransport Test

*1. For this exercise I used API Platform which made my task easier for route management.*  
*2. For the database I used Sqlite*  
*3. To test my different routes I used API Plateform app with Nelmio*

## install project

### Clone or download repository and go to path project
```
cd ubiTest/
```

### install dependencies with
```
composer install
```
### Create database with 
```
php bin/console d:d:c
```

### Do the migration with 
```
php bin/console d:m:m -n 
```

### Finally runing this app 
```
https://127.0.0.1:8000/api
```

## Project routes
*Use with Api Platform/Nelmio*

### Add student with POST method
<img width="1342" alt="Capture d’écran 2020-06-19 à 10 25 34" src="https://user-images.githubusercontent.com/14937256/85113348-6e22fc80-b217-11ea-969e-5cf1d2b5ebb6.png">
<img width="1342" alt="Capture d’écran 2020-06-19 à 10 26 06" src="https://user-images.githubusercontent.com/14937256/85113472-a296b880-b217-11ea-81f6-52fc7da75d25.png">

 *do the same to edit a student with the PATCH method and delete with DELETE method*




