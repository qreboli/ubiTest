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
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 19 25" src="https://user-images.githubusercontent.com/14937256/85122670-39b73c80-b227-11ea-9266-04e9f541267b.png">  
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 19 54" src="https://user-images.githubusercontent.com/14937256/85122688-43d93b00-b227-11ea-812c-958d3db7c25c.png">


 *do the same to edit a student with the PATCH method and delete with DELETE method*




