# Laravel LDAP Demo
Simple LDAP demo using Adldap with Laravel
This project is built based on https://github.com/jotaelesalinas/laravel-simple-ldap-auth . It's for learning purpose only, but feel free to pull or add any features.

I'm using the popular LDAP testing server which you can find here http://www.forumsys.com/tutorials/integration-how-to/ldap/online-ldap-test-server/

For step by step installation please check out https://github.com/jotaelesalinas/laravel-simple-ldap-auth

For Adldap documentation please take a look at https://github.com/Adldap2/Adldap2


## Feature
- Basic LDAP login
- Home Page
  - Display all users and their emails
- Search Page
  - Input username and fetch all properties of the desired user.
  
## Usage
- Download as zip or git clone to your project directory
- Rename .env.example to .env
- Setup database connection in .env file, and create corresponding database
- At the project directory execute the following commands
  - php artisan key:generate // This will generate APP Key required by Laravel
  - php artisan migrate // This will generate all relative tables, you may check out the migration defination at /database/migrations
  
####  Note that there is no seeder for this demonstration, user record will only be inserted into database once user has successfully login to the application.

## Credits
Special thanks to the following developers for maintaining such great repositories!

Adldap2 - https://github.com/Adldap2/Adldap2-Laravel

jotaelesalinas - https://github.com/jotaelesalinas/laravel-simple-ldap-auth

## License
  The MIT License (MIT)

Copyright (c) 2015 Chris Kibble

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
