### Food Ordering Project
- This project is about ordering food . I have used api Laravel. 
- The user has to register by giving his details - Name ,Phone number  and  Location. These are stored inside database in "users" table.
- The  Food items are stored in table "Food". It has food_id,food_name and price fields.
- The Orders user placed are stored in "orders" table. Ih has the order_id,user_name,food_name,quantity,price and amount fields.

### Model of user,orders and food.
- $ php artisan make:model user

- $ php artisan make:model orders

- $ php artisan make:model food

- All controllers has crud.


- Here is Routes URL with Verb of User Controller:

### To display all users details
-get http://127.0.0.1:8000/Users

### To display any one user details - pass user_id in url
-get http://127.0.0.1:8000/Users/2
### To insert user details pass user_name,phone,location .Userid is auto generated.
-post http://127.0.0.1:8000/Users -
      [user_name  -   geeta]
      [Phone      -   9908767621]
      [location   -  kr street mysore]

### To edit the user details 
  -patch  http://127.0.0.1:8000/Users/2    
### To delete user details from database
-delete http://127.0.0.1:8000/Users/2

### Here is Routes URL with Verb of order Controller:

### To display all order details
-get http://127.0.0.1:8000/orders

### To display any one order deatils - pass user_id in url
-get http://127.0.0.1:8000/orders/2
### To insert order details pass user_name,food_name, quantity,price .Userid is auto generated and amount is calculated by quantity and price of food ordered.
-post http://127.0.0.1:8000/orders -
      [user_id   -   2]
      [food_name -  Dosa]
      [quantity  -  3]
### To edit the order details 
  -patch  http://127.0.0.1:8000/orders/2  
### To delete order details from database
-delete http://127.0.0.1:8000/orders/2


### Here is Routes URL with Verb of food Controller:

### To display all food details
-get http://127.0.0.1:8000/food

### To display any one food deatils - pass food_id in url
-get http://127.0.0.1:8000/food/2
### To insert food details pass food_name,price .food_id is auto generated.
-post http://127.0.0.1:8000/food -
      [food_name -  Dosa]
      [price -  50.00]
### To edit the food details 
  -patch  http://127.0.0.1:8000/food/2  
### To delete food details from database
-delete http://127.0.0.1:8000/food/2