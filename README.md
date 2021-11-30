


# Technical test
You have 72 hours to submit your code. Read the next lines to know about the requirement.

#### The challenge is simple. 
#### According to your desired position is, you are going to choice from the next options:
#### Our new business associate needs a GUI in order to their customers can to submit personal information for future telephonic contact.

## Frontend developer challenge's instructions
##### Clone the repository using the following url 
`https://github.com/bytestriker/mas-ti-dev-jr-challenge.git`
> Using ReactJS or AngularJS you must create SPA with a simple form registration.
> This is the URL of the API [https://micros.masservicios-ti.com.mx](#https://micros.masservicios-ti.com.mx)
> This is the main endpoint of the API `/api/customers`
> Attached to this message you'll found an (dot) JSON file EvaluacionProgramadoresFrontEndJunior.postman_collection.json, using POSTMAN to open it (google it if necessary), the documentation wil guide you through the actions that your GUI needs to perform. 


## Backend developer challenge's instructions
##### Clone the repository using the following url 
``https://github.com/bytestriker/mas-ti-dev-jr-challenge.git``

> Using Laravel you must create API for a simple form registration.
> Attached to this message you'll found an (dot) JSON file EvaluacionProgramadoresFrontEndJunior.postman_collection.json, using POSTMAN to open it (google it if necessary), the documentation wil guide you through the actions that your API needs to perform. 

### Bonus Points
 * Use unit tests.
 * Use of homestead.


### The API should be able to:

 * list all customers
 * retrieve a single customer
 * create a customer
 * update a customer
 * delete a customer
 * restore a deleted customer
 * upload a file with customer's avatar


### Data structure
Field             | Type             | Null | Key | Default                         |
------------------|------------------|------|-----|---------------------------------|
id                | int(11) unsigned | NO   | PRI | NULL                            |
email             | varchar(100)     | YES  |     | NULL                            |
password          | varchar(100)     | YES  |     | NULL                            |
name              | varchar(100)     | YES  |     | NULL                            |
last_name         | varchar(100)     | YES  |     | NULL                            |
birth_date        | date             | YES  |     | NULL                            |
personal_phone    | varchar(20)      | YES  |     | NULL                            |
contact_phone     | varchar(20)      | YES  |     | NULL                            |
address           | text             | YES  |     | NULL                            |
gender            | varchar(1)       | YES  |     | NULL                            |
state             | varchar(30)      | YES  |     | NULL                            |
city              | varchar(80)      | YES  |     | NULL                            |
suburb            | varchar(80)      | YES  |     | NULL                            |
zip_code          | varchar(8)       | YES  |     | NULL                            |
avatar            | varchar(150)     | YES  |     | https://via.placeholder.com/500 |
email_verified_at | timestamp        | YES  |     | NULL                            |
remember_token    | varchar(100)     | YES  |     | NULL                            |
created_at        | timestamp        | YES  |     | current_timestamp()             |
updated_at        | timestamp        | YES  |     | NULL                            |
deleted_at        | timestamp        | YES  |     | NULL                            |


### Customer's required attributes:
> email * validates email address
> password * validates min length of 10
> name * validates min length of 3
> last_name * validates min length of 4
> birth_date * validates date format: YYYY-MM-DD
> personal_phone * validates 10 digits
> contact_phone * validates 10 digits
> zip_code * validates 6 digits

### Criteria
For full transparency, the test will be scored according to the following:

 * REST Structure
 * Unit Testing
 * Logging
 * Best practices
 * Reusable code
 * Decoupled code
 * Ability to transform requirements into code
 * Use of services, controllers, and models | ONLY FOR BACKEND DEVELOPERS
 * Use of Laravel 6 LTS as a framework | ONLY FOR BACKEND DEVELOPERS
 * Use of hooks | ONLY FOR FRONTEND DEVELOPERS
 * Use of dom | ONLY FOR FRONTEND DEVELOPERS
 * This API not requires CSRF verification
 
