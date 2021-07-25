## Command use project
- composer install
- php artisan migrate
- php artisan db:seed

## Use Api
// Routes Example Campaign
- http://localhost:8000/api/campaign/  - GET      - List All - Name Method (Index)
- http://localhost:8000/api/campaign/1 - GET      - Get one campaign - Name Method (Store)
- http://localhost:8000/api/campaign/  - POST     - Json Example { "name": "Campaign 10" } - Name Method (Show)
- http://localhost:8000/api/campaign/1 - PUT      - Json Example { "name": "Campaign update 10" } - Name Method (Update)
- http://localhost:8000/api/campaign/1 - Delete   - Delete Campaign - Name Method (Destroy)

// Routes Example Discount
- http://localhost:8000/api/discount/  - GET      - List All - Name Method (Index)
- http://localhost:8000/api/discount/1 - GET      - Get one discount - Name Method (Store)
- http://localhost:8000/api/discount/  - POST     - Json Example { "price_discount": 500 } - Name Method (Show)
- http://localhost:8000/api/discount/1 - PUT      - Json Example { "price_discount": 600 } - Name Method (Update)
- http://localhost:8000/api/discount/1 - Delete   - Delete discount - Name Method (Destroy)

// Routes Example Product
- http://localhost:8000/api/product/  - GET      - List All - Name Method (Index)
- http://localhost:8000/api/product/1 - GET      - Get one product - Name Method (Store)
- http://localhost:8000/api/product/  - POST     - Json Example { "name": "Product One", "discount_id": 2 } - Name Method (Show)
- http://localhost:8000/api/product/1 - PUT      - Json Example { "name": "Product New One", "discount_id": 2 } - Name Method (Update)
- http://localhost:8000/api/product/1 - Delete   - Delete product - Name Method (Destroy)

// Routes Example Group Cities
- http://localhost:8000/api/group/  - GET      - List All - Name Method (Index)
- http://localhost:8000/api/group/1 - GET      - Get one group - Name Method (Store)
- http://localhost:8000/api/group/  - POST     - Json Example { "name": "Group One", "campaign_id": 2 } - Name Method (Show)
- http://localhost:8000/api/group/1 - PUT      - Json Example { "name": "Group New One", "campaign_id": 1 } - Name Method (Update)
- http://localhost:8000/api/group/1 - Delete   - Delete group - Name Method (Destroy)

// Routes Example City
- http://localhost:8000/api/city/  - GET      - List All - Name Method (Index)
- http://localhost:8000/api/city/1 - GET      - Get one city - Name Method (Store)
- http://localhost:8000/api/city/  - POST     - Json Example { "name": "City One", "group_id": 2 } - Name Method (Show)
- http://localhost:8000/api/city/1 - PUT      - Json Example { "name": "City New One", "group_id": 1 } - Name Method (Update)
- http://localhost:8000/api/city/1 - Delete   - Delete city - Name Method (Destroy)
