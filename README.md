# Online Train Ticket Reservation System

This project is a simulation of an online train ticket reservation system built using PHP and MySQL. It was created as part of a coursework assignment for the *Information Systems and Databases* subject at Universitas Negeri Yogyakarta.

## 📌 Project Overview

The system supports three user roles:

- **Admin**: Full access to manage users, reservations, transactions, and tickets.
- **Operator**: Verifies reservations and records payment transactions.
- **Customer**: Can view train schedules and make ticket reservations.

## 🔄 System Workflow

### Customer
1. Opens the website and views available train schedules.
2. Fills out the reservation form.
3. Receives a reservation ID.
4. Completes payment and receives the ticket.

### Operator
1. Inputs the reservation ID.
2. Verifies reservation details and fills out the transaction form.
3. Prints the receipt and hands the ticket to the customer.

### Admin
- Logs in and manages all data related to customers, tickets, transactions, and reservations.

## 🗃️ Database Structure

The system consists of the following tables:

- `admin`: Stores admin login credentials
- `kereta`: Stores train data
- `penumpang`: Stores passenger (customer) data
- `reservasi`: Stores reservation details
- `tiket`: Stores issued tickets
- `transaksi`: Stores transaction records

## 🛠️ Technologies Used

- PHP
- MySQL (via phpMyAdmin)
- HTML & CSS

## 🚧 Project Status

This project is still under development. Some features may not work as expected. It was created as a learning project and contains intentional simplifications.

## 🐞 Known Issues & Development Notes

- Form validation is limited
- Some SQL queries may be suboptimal
- UI design is basic and not responsive
- Some processes are not yet fully connected or automated

## 📸 User Interface Highlights

The UI was designed with basic functionality in mind. It includes:
- Admin login page
- Customer reservation form and schedule view
- Operator transaction form and ticket printing
- Admin pages for managing all data

## 🙋‍♀️ Author

Kharisma Nur’aisyah  
[LinkedIn](https://www.linkedin.com/in/kharismanuraisyah/)
