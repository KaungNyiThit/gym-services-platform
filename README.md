# Gym Management System

Welcome to the Gym Management System! This project is designed to manage gym operations seamlessly. It includes features such as user membership management, trainer profiles, gym location map, a "Contact Us" messaging system, payment processing via Stripe, and admin tools for managing trainers and user inquiries.

---

## Features

### 1. Admin Services
#### Add Trainers
- Admins can add new trainers to the system with details such as name, expertise, and availability.
- Trainers are listed on the "Trainers" page, visible to all users.
- Secure form submission to ensure data integrity.

#### Read User Inbox
- Admins can access and read messages sent by users through the "Contact Us" page.
- Messages are displayed in an organized inbox view with filters for sorting by date or urgency.
- Option to reply to user inquiries directly from the admin dashboard.

### 2. Contact Us with Messaging System
- Users can send inquiries or feedback through a dedicated contact form.
- Messages are stored in a database and can be accessed by the admin.
- Real-time email notifications can be integrated for instant alerts.

### 3. Gym Map Location
- Interactive map powered by [Leaflet](https://leafletjs.com/).
- Displays the exact gym location with markers and directions.
- Mobile-friendly and responsive design.

### 4. Stripe Payment Integration
- Secure payment gateway using [Stripe](https://stripe.com/).
- Supports one-time payments and recurring subscriptions for memberships.
- Admin dashboard displays all transactions and payment statuses.

### 5. Trainers Page
- Displays a list of all trainers with their expertise and experience.
- Users can view trainer profiles and schedule sessions.
- Trainers can log in to update their availability.

---

## Installation

### Prerequisites
Ensure you have the following installed:
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)
- [PostgreSQL](https://www.postgresql.org/)

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/gym-management-system.git
   ```

2. Navigate to the project directory:
   ```bash
   cd gym-management-system
   ```

3. Install dependencies:
   ```bash
   npm install
   ```

4. Set up environment variables:
   Create a `.env` file in the root directory and add the following:
   ```env
   DATABASE_URL=your_database_url
   STRIPE_SECRET_KEY=your_stripe_secret_key
   LEAFLET_API_KEY=your_leaflet_api_key
   ADMIN_API_KEY=your_admin_api_key
   ```

5. Run the application:
   ```bash
   npm start
   ```

6. Open your browser and navigate to:
   ```
   http://localhost:8000
   ```

---

## Usage

### User Features
- **Sign Up/Login**: Create an account or log in to access features.
- **Browse Trainers**: View trainer profiles and schedule sessions.
- **Contact Us**: Send messages or inquiries to the gym.
- **Membership Payments**: Subscribe to gym plans using Stripe.

### Admin Features
- **Manage Trainers**: Add, update, or delete trainer profiles.
- **Read Inbox**: Access and respond to messages sent by users.
- **User Management**: Add, update, or delete users.

---

## API Endpoints

### Public Endpoints
- `GET /trainers`: Retrieve a list of trainers.
- `POST /contact`: Send a message to the gym.

### Admin Endpoints (Require API Key)
- `POST /admin/add-trainer`: Add a new trainer.
- `GET /admin/view-messages`: View user messages.

---

## Map Integration
The gym's location is displayed using Leaflet with custom markers. Users can zoom in/out and get directions to the gym.

---

## Payment Processing
Stripe is integrated to handle payments. To test payments:
- Use Stripe's test card numbers available in their [documentation](https://stripe.com/docs/testing).
- Ensure the `STRIPE_SECRET_KEY` is set in the `.env` file.

---
