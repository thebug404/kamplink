<p align="center"><a href="http://kamplink.herokuapp.com" target="__blank"><img src="https://res.cloudinary.com/dlkfpx8lb/image/upload/v1609962050/App_banners/kamplink_hyecpb.png" width="100%"></a></p>

# Kamplink

Kamplink is a web application that is responsible for registering sites, pages or web applications via URL, said application is developed in PHP, 
more specifically in [Laravel](https://laravel.com). The database used is `MySQL`. If you want to view the application, 
click here: [Kamplink](http://kamplink.herokuapp.com) or on the image.

## Project cloning
To clone the project on your computer enter the following command on your computer: `git clone https://github.com/IvanZM123/kamplink.git` To execute this command you need to have installed [Git](https://git-scm.com) on your computer.

## Prerequisites
1. You need to have php installed on your computer, visit this page to download: https://www.apachefriends.org/es/index.html once downloaded install the program.
2. You need to have `Node.js` installed on your computer, visit this page to download it: https://nodejs.org/es/ once downloaded install the program.
3. Have `Laravel` installed on your computer, visit this page for more information: https://laravel.com

## Config environments
In the project find a `.env.example` file, copy all the variables, then create a `.env` file and paste the previously copied variables.

## Command execution
Once the previous section is completed, run this command in order:
1. `npm i` This command will install the necessary packages for the application to function, after finishing the download it will create a node_modules folder.
2. `npm run dev` This command will compile the files in the `resources` folder and create them in the `public` folder already compiled.
3. `composer update --no-scripts` 
4. `composer dump-autoload` Updates the automatic class loader information. This command is useful when you add new classes and you don't want to run the command.
5. `php artisan key:generate` This command will generate a key for our project, and it will automatically assign it in the `.env` file.
6. `php artisan migrate` This command will create the necessary tables to save the data in the Database.
7. `php artisan serve` This command will generate a development server.
