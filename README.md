Demosite for DEVOPS batch for testing Apache 2 and PHP.

Commands used to configure project for CENTOS 7

a) Install and Configure Apache 2
   i)   yum install httpd
   ii)  service httpd start/stop/status
   iii) Check by: curl http://localhost/
   iv) To access from outside the machine :: firewall-cmd --permanent --zone=public --add-service=http
   v)  firewall-cmd --reload
   
b) Install php
   i)  yum install php
   ii) Restart Apache 2 : service httpd restart
   
c) To install GIT
   i)   yum install git
   ii)  git config --global user.name "Yourname"
   iii) git config --global user.email "Your email address"
   iv)  Go to Folder and intialise git using the command : git init
   
    
 
