Objective
Build a simplified Laravel system to sync product data from an external API into a local database. Focus on clean structure and proper use of Laravel features.

Time Limit
2 Hours

Requirements

1. Artisan Command - done
Create a command:
php artisan sync:products

This should trigger the sync process.

2. External API - done
Fetch product data from a mock or public API (you can hardcode JSON if needed).
Each product should include:
- external_id
- name
- price
- stock

3. Database - done
Create a products table.
Ensure:
- No duplicate records (use external_id)
- Proper insert or update logic (upsert)

4. Basic Queue Usage - done
Use at least one job:
- Dispatch a job from the command
- Process product data inside the job

5. Idempotency - done
Running the command multiple times should not create duplicate or inconsistent data.

6. Logging - done
Log:
- Total records processed
- Any failures

7. API Endpoint - done 
Create:
GET /api/products

Support:
- Pagination

Notes

- Focus on structure and approach rather than completing everything
- Keep code clean and modular
- You may skip advanced features if time is limited

Submission Requirements

- Source code repository
- Steps to run the project
- Any assumptions mentioned briefly


RESULT 

steps to run this project
- please set your ENV variables for database 
- php artisan migrate
- php artisan app:sync-products-command

for API Endpoint hit into postman to see paginated wise response
- http://127.0.0.1:8000/api/v1/products

