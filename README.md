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

- Edit the new `parameters.yml` in app/config and provide your database credentials.

- Open your favorite browser and visit `dev.grouptopics.org` and check it out! Don't forget to make changes and send a pull request back to our main repository, read our section on contributing below to find out more.


## Contributing
