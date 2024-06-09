# CodeIgniter 4 Todo List Application

## About the Application

This application is a todo list built using CodeIgniter 4, leveraging the Restful API approach for backend operations, HTMX for dynamic frontend interactions without full page reloads, and Bootstrap for responsive design. It showcases how to create a modern, interactive web application with a PHP backend.

## Getting Started

After cloning the repository from GitHub, follow these steps to get the application running:

### Installation

1. **Install Dependencies**: Navigate to the project's root directory and run:

composer install

This command installs all required PHP dependencies.

2. **Environment Setup**: Copy the `env` file to `.env` and adjust the settings to match your environment. Make sure to set the `baseURL` and configure your database settings.

3. **Database Migration**: Run the following command to set up your database:

This will create the necessary tables for the todo list application.


### Running the Application

1. **Start the Server**: From the project's root directory, start the CodeIgniter server:

2. **Access the Application**: Open your web browser and navigate to `http://localhost:8080`. You should see the todo list application running.

## Features

- **Todo List Management**: Create, read, update, and delete todo items.
- **Dynamic Interactions**: Use HTMX to dynamically update the todo list without reloading the page.
- **Responsive Design**: Bootstrap ensures the application is accessible and usable on various devices.

## Technologies Used

- **CodeIgniter 4**: A lightweight PHP framework providing a rich set of functionalities for building web applications.
- **Restful API**: Backend API follows the RESTful principles, making it easy to perform CRUD operations.
- **HTMX**: Enhances your HTML, allowing you to access AJAX, CSS Transitions, WebSockets, and more, directly with HTML.
- **Bootstrap**: A front-end framework for developing responsive and mobile-first websites.

## Contributing

Contributions are welcome! Please feel free to submit pull requests or open issues to improve the application or suggest new features.

## License

This project is licensed under the MIT License - see the LICENSE file for details.