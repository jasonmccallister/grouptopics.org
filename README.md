# Group Topics

Group Topics is a Open Source Project started by the San Diego PHP (SDPHP) User group. It's designed to help other User Groups discover and manage presentation ideas.

***This project is very early in development and not quite ready for prime time.***

## Requirements

- Apache 2 or Nginx
- PHP 5.4+
- MySQL or MariaDB

	***Note: All of these requirements are met if you use the `Vagrantfile` provided in this repository.***

## Installation

- Clone this repository using:

	`git clone https://github.com/sdphp/grouptopics.org.git /desired/path/to/install`

- If using the `Vagrantfile` provided in this repository, open terminal, `cd` to the directory and run:

	`vagrant up`

	***Note: Windows users may experience issues with NFS, well because you are using Windows. We will provide our fix for that when the time comes.***

- While vagrant automagically installs your machine, thanks to Vaprobash, make sure you modify your `hosts` file to reflect below:

	`192.168.22.10 dev.grouptopics.org`

	***Note: For OS X and Linux users it is located at /etc/hosts. Windows it is located at C:\Windows\System32\Drivers\etc\hosts ***

- Vagrant will run the `migrate.sh` script from the root of the directory. This will perform the following tasks:

	- Create the parameters.yml in app/config
	- Run `composer install` for the project`
	- Run `php app/console doctrine:schema:create`

	***Note: this migrate script will only run when you provision Vagrant.***
- Open your browser and visit `http://dev.grouptopics.org/config.php`. Ensure that you clear any MAJOR issues with the your configuration.

- Once you have cleared any errors, click the link to **Configure your Symfony Application online**.

- Follow the steps to configure your database. Use `localhost` and `root/root` for the username and password, unless you changed password in the Vagrantfile. This will edit the new `parameters.yml` in app/config and provide your database credentials.

- Open your favorite browser and visit `dev.grouptopics.org/app_dev.php` and check it out! Don't forget to make changes and send a pull request back to our main repository, read our section on contributing below to find out more.

	***Note: you may receive a 404 error on from the web debug toolbar that asks if you want to load the profiler. The common remedy for this is to ensure that there is no trailing slash on app_dev.php. ***

## Contributing

Please review these guidelines before submitting any pull requests to the framework.

- **ALL** Pull requests should be made to the `development` branch.

- **Pull Requests**: Once a pull request is sent in, it will be need to be reviewed. Don't worry, it's a fun process! We make @aequasi do most of the work!

- **Feature Requests**: If you have an idea for a new feature you would like to see added to Grouptopics, you may create an issue on Github with `[Request]` in the title. The feature request will then be reviewed by a core contributor.

- **Coding Guidelines**: Grouptopics follows all of the [PHP-FIG coding standards](https://github.com/php-fig/fig-standards/tree/master/accepted) coding standards. In addition to these standards, Grouptopics also follows the [naming conventions](https://github.com/php-fig/fig-standards/blob/master/bylaws/002-psr-naming-conventions.md#naming-conventions-for-code-released-by-php-fig) for PHP-FIG.
