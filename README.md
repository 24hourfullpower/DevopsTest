# DevopsTest

I have used the following technologies for this project.
- Ubuntu 14
- MySQL
- PHP 5
- Apache
- Ansible

- I have created a simple html page which has a button called "Get Data" which is calling a php file customers.php which has the code to connect to the MySQL database and get data.
- Ansible is being used to setup the environment where it is installing all the required packages like PHP, Apache, MySQl also it is being used to create tables with insert.sql file.
- There is Vagrant file which has all the required configurations to get an Ubuntu box running once the vagrant file is placed and vagrant up is called the box is setup with a private IP and port 80 of the vagrant box is being forwarded to your localhost port 8080 so inorder to access the website you can directly hit "http://localhost:8080" or the ip address "192.168.0.23" in your browser.


