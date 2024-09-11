## Golden Minds Colleges Web System

### Application Structure
  - `Backend (Laravel 11)` 
    The backend is responsible for handling all server-side logic, database interactions, and API endpoints. It follows the Model-View-Controller (MVC) pattern, with a clean separation of concerns thru Object Oriented Programming (OOP)


  - `app` - The core of the backend application.
    - `app/Enums` - Contains predefined constant values for use throughout the application.
    - `app/Exceptions` - Custom exception classes for handling errors.
    - `app/Helpers` - Utility or helper methods that provide reusable code snippets.
    - `app/Http` - Handles all HTTP-related tasks.
      - `app/Http/Controllers` - Contains controllers that handle HTTP requests and return responses.
      - `app/Http/Middleware` - Manages authentication and request filtering.
      - `app/Http/Requests` - Houses request validation logic.
      - `app/Http/Resources` - Data Transfer Objects (DTO) for transforming API responses.
    - `app/Models` - Eloquent models representing database tables.
    - `app/Observers` - Observers for monitoring and reacting to Eloquent model events.
    - `app/Providers` - Service providers that bootstrap the application services.
    - `app/Services` - Contains business logic that is more complex than what's in controllers.
  - `bootstrap` - Manages the initial bootstrapping of the application.
  - `config` - Contains all configuration files for the application.
  - `routes` - Defines backend routes.
    - `routes/api.php` - API endpoint routes.
    - `routes/web.php` - Web application routes.
    - `routes/auth.php` - Authentication routes.


- `Frontend (Vue.js 3)` 
  The frontend is built using Vue.js 3 and follows a component-based architecture. It is designed to be modular, making it easy to maintain and extend.

 
  - `resources/assets` - for assets (e.g. `styles`, `scripts`, `images`).
  - `resources/js` - Core source code for the frontend.
    - `resources/js/components` - for shared components.
    - `resources/js/components/base` - for parent components
    - `resources/js/components/auth` - components for authenticated
    - `resources/js/components/guest` - components for guest
  - `resources/js/libs` - for 3rd party integrations libraries.
  - `resources/js/pages` - for application frontend pages
  - `resources/js/router/index.js` - Manages the frontend routing, connecting 
  Vue components to URL paths.
  - `resources/js/store` - for vuex store
  - `resources/js/utilities` - for utilities.
  - `resources/js/app.js` - main core of the frontend
  - `resources/js/bootstrap.js` - Manages the initial bootstrapping frontend
  - `resources/js/App.vue` - serves as application layout


### Router
Routing is a crucial part of both the frontend and backend. It defines how requests are mapped to their corresponding controllers or components.

- `Backend Routes:` 
  - `api.php` - for defining RESTful API endpoints.
  - `web.php` - for defining routes that return views.
  - `auth.php` - For defining authentication-related routes.
- `Frontend Routes:` 
  - `index.js` - centralizes route definitions for Vue.js components.


# Deployment
The application is configured for continuous deployment using GitHub Actions. On every push to the `main` branch, the application is automatically built and deployed to the production server.

To deploy manually:
	- Push your changes to the main branch.
	- The GitHub Actions workflow will handle the rest.

## Prerequisites

- Download VSCode extensions [ESLint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint) and [Prettier - Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode). Ensure these are configured according to the project's specific settings, if applicable.
- Download Chrome extension [Vue.js DevTools](https://chromewebstore.google.com/detail/vuejs-devtools/nhdogjmejiglipccpnnnanhbledajbpd?pli=1) for easier debugging of Vue components.
- Install [Composer](https://getcomposer.org/download/) (check the required version in [composer.json](./composer.json)).
- Install [Node.js](https://nodejs.org/en) using [nvm](https://github.com/nvm-sh/nvm) or [fnm](https://github.com/Schniz/fnm). Ensure you are using the Node.js version specified in the project, if any.
- Install [npm](https://docs.npmjs.com/) (check the required version in [package.json](./package.json)). Note: npm is typically bundled with Node.js.

## Rules

Please read the repo **Standards** here: [README.STANDARDS.md](./README.STANDARDS.md)
