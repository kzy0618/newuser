## New User
This application give information to new users. It is an ownCloud application and it was created for the need of the VoNZ project.

## Installation
Download the newuser repository and place it in **owncloud/apps/**

Warning : The name of the repository HAVE TO be newuser !!
 
## Publish to App Store
 
First get an account for the [App Store](http://apps.owncloud.com/) then run:
 
     make appstore_package
 
The archive is located in build/artifacts/appstore and can then be uploaded to the App Store.

 ## Running tests
 
 After [Installing PHPUnit](http://phpunit.de/getting-started.html) run:
 
    phpunit -c phpunit.xml
    
 ## More

To have more informations on how you can manage this application, let's see the [Owncloud Developer Manual](https://doc.owncloud.org/server/latest/developer_manual/app/index.html)...
    
