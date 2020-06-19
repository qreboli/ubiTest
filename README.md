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
 
 ### Add student grade with POST method
 <img width="1342" alt="Capture d’écran 2020-06-19 à 12 23 10" src="https://user-images.githubusercontent.com/14937256/85123025-c82bbe00-b227-11ea-958a-e3a8cd9d8a14.png">
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 23 20" src="https://user-images.githubusercontent.com/14937256/85123039-cf52cc00-b227-11ea-9c55-203e0894c38a.png">


### Calcutate average student
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 26 57" src="https://user-images.githubusercontent.com/14937256/85123310-530cb880-b228-11ea-9a27-6d2c6bea63f7.png">
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 27 07" src="https://user-images.githubusercontent.com/14937256/85123328-5d2eb700-b228-11ea-8bf7-23fccc1bf2c7.png">

### Calculate average classroom
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 27 47" src="https://user-images.githubusercontent.com/14937256/85123382-76cffe80-b228-11ea-9651-c44974d7c8ea.png">
<img width="1342" alt="Capture d’écran 2020-06-19 à 12 27 54" src="https://user-images.githubusercontent.com/14937256/85123406-7fc0d000-b228-11ea-9e17-81880bacd924.png">







