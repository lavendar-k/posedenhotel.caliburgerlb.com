# Laravel POS System

![Laravel](https://img.shields.io/badge/Laravel-9.x-red)
![PHP](https://img.shields.io/badge/PHP-%5E8.0-blue)
![License](https://img.shields.io/badge/License-MIT-green)
![Contributions](https://img.shields.io/badge/Contributions-Welcome-brightgreen)

A **Point of Sale (POS) system** built with Laravel to manage sales, inventory, and customer information. This system aims to streamline business processes and provide a user-friendly experience for store management.

## ⭐ Give a Star!

If you find this project helpful or interesting, please give it a star to show your support! ⭐

## Features

- **Inventory Management:** Track and manage products in your store with detailed information like SKU, category, pricing, and stock levels.
- **Sales Management:** Seamlessly handle customer sales, returns, and discounts.
- **Customer Management:** Keep customer information for easy reference and loyalty programs.
- **Reports:** Generate insightful sales and stock reports.
- **Secure Authentication & Authorization:** Robust user authentication and authorization system using Laravel's built-in authentication.
- **Responsive Design:** User-friendly and responsive UI for better accessibility.

## Demo

A live demo is available at [Demo URL](https://posedenhotel.caliburgerlb.com/).

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation

Follow these steps to set up the project on your local machine.

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/laravel-pos-system.git
   cd laravel-pos-system
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Create a `.env` file:**
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

4. **Generate an application key:**
   ```bash
   php artisan key:generate
   ```

5. **Set up your database:**
   Open the `.env` file and configure the database connection:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=pos_system
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run the migrations and seeders:**
   ```bash
   php artisan migrate --seed
   ```

7. **Serve the application:**
   ```bash
   php artisan serve
   ```

   You can now access the application at `http://127.0.0.1:8000`.

## Configuration

This project uses Laravel's default configuration settings. You can customize various configurations like cache, session, or mail from the `.env` file.

### Environment Variables

Ensure you have these environment variables configured in your `.env` file:

- **Database credentials**
- **Mail credentials (for sending emails)**
- **Application URL** for correct routing and links

## Usage

Once the application is up and running, you can log in with the default admin credentials:

- **Email:** admin@example.com
- **Password:** password

⚠️ Please change the default credentials after installation to keep your system secure.

## Screenshots

Here are some screenshots of the application:

![image](https://github.com/user-attachments/assets/43ec539b-feb9-4192-9863-80e91e7d9e1f)
![image](https://github.com/user-attachments/assets/5356629e-ee3e-425e-a98b-dda6f6694392)

## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/your-feature`).
5. Open a Pull Request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Support

If you have any questions, feel free to open an issue or reach out to me at [lavendarsolution@gmail.com](mailto:lavendarsolution@gmail.com).

## Acknowledgments

- Laravel Framework - [Laravel](https://laravel.com)
- Admin Template - (If you used any UI template, acknowledge it here)
- All contributors for their efforts!

Thank you for checking out this POS system project! Don't forget to leave a star if you found it helpful! ⭐

**Tips for optimizing your README:**
1. **Use badges** to give a visual overview of the project.
2. **Highlight features** to showcase what the project offers.
3. **Provide clear installation instructions** to make it easier for developers to get started.
4. **Include screenshots** to give a visual overview.
5. **Invite contributions** to encourage collaboration.

Feel free to update the README as your project evolves!
