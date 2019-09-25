<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Info

The main purpose of this app is to send a post to the desired url via Artisan Console Command.

## App Specs:

1. Artisan Command was created trough php artisan make:command
2. FakePost.php file was edited to create the name and description of the command as well as the main functionality
    of this application.
3. Kernel.php file was edited to register the new artisan command.

## App testing:

1.Open the root folder of the project in your terminal.
2.Run the following command: php artisan fake-post:post
3.You should retrieve the following message:

The POST request has successfully sent to https://atomic.incfile.com/fakepost
The status of this POST request was 200
The content of the POST request is ok

## Author

This App was coded by Yiro Yuzin Yi Terreros.
E-mail: yiroyi@live.com

