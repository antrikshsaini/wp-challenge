# WordPress Bedrock & Sage Component Challenge

## Summary

This project involves building a reusable WordPress component that integrates with the third-party API at `https://jsonplaceholder.typicode.com/todos`. The component should be styled and functional, loading data from the API each time the page loads.

## Lando/Bedrock/Sage Wordpress Base

This is a modern code base for wordpress development that should be used as the base for all new wordpress projects. It implements:

- Lando (docker) for easy local site setup on any OS. https://docs.devwithlando.io/
- Bedrock for dependancy management of wordpress and plugins. https://roots.io/bedrock/
- Sage for a modern theme development setup using bootstrap, scss and blade templating. https://roots.io/sage/

## Install Dependencies

### 1. Composer

Ensure you have [Composer](https://getcomposer.org/) installed on your local machine. Composer is a dependency manager for PHP that you will use to manage your PHP dependencies.

- **Install Composer**: Follow the installation instructions from [Composer's official site](https://getcomposer.org/download/) if you haven't already installed it.

- **Install PHP Dependencies**: Once Composer is installed, navigate to your project directory and run the following command to install the PHP dependencies defined in your `composer.json` file:

  ```bash
  composer install
  ```

### 2. Lando

[Lando](https://docs.lando.dev/basics/installation.html) is a local development environment tool. If you don’t have Lando installed, follow these steps:

- **Install Lando**: Download and install Lando from [Lando's official site](https://docs.lando.dev/basics/installation.html) based on your operating system.

- **Start Lando**: Initialize and start your Lando environment by running:

  ```bash
  lando start
  ```

This command will set up the environment and start all necessary services such as PHP, MySQL, and the web server.

### 3. Node.js

[Node.js](https://nodejs.org/) is a JavaScript runtime used to run scripts and manage packages for JavaScript projects.

- **Install Node.js**: Download and install Node.js from [Node.js official site](https://nodejs.org/en/download/) if you haven’t already installed it.

- **Verify Installation**: Ensure Node.js is installed correctly by checking its version:

  ```bash
  node -v
  ```

### 4. Yarn

[Yarn](https://classic.yarnpkg.com/en/docs/install/) is a package manager for JavaScript that can be used as an alternative to npm.

- **Install Yarn**: Follow the installation instructions from [Yarn's official site](https://classic.yarnpkg.com/en/docs/install/) based on your operating system.

- **Install JavaScript Dependencies**: Once Yarn is installed, navigate to your project directory and install the JavaScript dependencies defined in your `package.json` file:

  ```bash
  yarn install
  ```

This command will download and install all required JavaScript packages and libraries for your project.

### 5. Download the repo

First off your going to need to download the repository localy. Open up your terminal and Head to whichever folder you would like the project to be created.

```
git clone https://github.com/antrikshsaini/wp-challenge.git
cd wp-challenge
```

### 6. Add your site and connection details

First off go to the root of the repo and copy .env.example into a new file called .env This is an enviroment variables file.

Add or Replace these connection details to your env

```
DB_NAME='wordpress'
DB_USER='wordpress'
DB_PASSWORD='wordpress'
DB_HOST='database'

WP_HOME='https://bedrock.lndo.site'
```

## Install Dependencies

### 1. Composer

Ensure you have [Composer](https://getcomposer.org/) installed on your local machine. Composer is a dependency manager for PHP that you will use to manage your PHP dependencies.

- **Install Composer**: Follow the installation instructions from [Composer's official site](https://getcomposer.org/download/) if you haven't already installed it.

- **Install PHP Dependencies**: Once Composer is installed, navigate to your project directory and run the following command to install the PHP dependencies defined in your `composer.json` file:

  ```bash
  composer install
  ```

### 2. Lando

[Lando](https://docs.lando.dev/basics/installation.html) is a local development environment tool. If you don’t have Lando installed, follow these steps:

- **Install Lando**: Download and install Lando from [Lando's official site](https://docs.lando.dev/basics/installation.html) based on your operating system.

- **Start Lando**: Initialize and start your Lando environment by running:

  ```bash
  lando start
  ```

This command will set up the environment and start all necessary services such as PHP, MySQL, and the web server.

### 3. Node.js

[Node.js](https://nodejs.org/) is a JavaScript runtime used to run scripts and manage packages for JavaScript projects.

- **Install Node.js**: Download and install Node.js from [Node.js official site](https://nodejs.org/en/download/) if you haven’t already installed it.

- **Verify Installation**: Ensure Node.js is installed correctly by checking its version:

  ```bash
  node -v
  ```

### 4. Yarn

[Yarn](https://classic.yarnpkg.com/en/docs/install/) is a package manager for JavaScript that can be used as an alternative to npm.

- **Install Yarn**: Follow the installation instructions from [Yarn's official site](https://classic.yarnpkg.com/en/docs/install/) based on your operating system.

- **Install JavaScript Dependencies**: Once Yarn is installed, navigate to your project directory and install the JavaScript dependencies defined in your `package.json` file:

  ```bash
  yarn install
  ```

### 5. Build the Theme

Navigate to the theme directory and build the assets:

- **Change Directory**: Go to the theme directory where the Sage theme is located:

  ```bash
  cd project-repo/web/app/theme-sage-challenge
  ```

- **Install PHP Dependencies**: Install the PHP dependencies for the Sage theme:

  ```bash
  composer install
  ```

- **Install Yarn Dependencies**: Install the JavaScript dependencies for the Sage theme:

  ```bash
  yarn
  ```

- **Build the Assets**: Build the assets using Yarn:

  ```bash
  yarn build
  ```

This will compile and optimize the CSS and JavaScript files for the Sage theme.

## Spin up lando

### Setup trusted certificates

Make sure to follow the instructions in the Lando docs https://docs.lando.dev/core/v3/security.html#trusting-the-ca for Trusting the CA to avoid warnings on your browser when visiting your site.

### Start your Lando site

Run lando start, and then your site will be accessible from https://bedrock.lndo.site/

```
lando start
```

Done. to see all lando commands just type and enter the below into the terminal

```
lando
```

May also run following commands to get the guts installed if something breaks while building theme

To install wordpress the plugins and any other php dependencies run

```
lando composer install
```

Now lets head into the theme folder and install their dependencies as well

```
cd web/app/themes/sage
lando composer install
lando yarn
```

### Compiling assets and watching them

Run the below to get your assets compiling

```
lando yarn build
lando yarn start
```

### Visit your site and setup the db

Final Step!! Now you just need to go to /wp-admin on the site url that lando has created for you and setup your WP site creds

Once that is done please active the theme and plugins

## Fini!!!
