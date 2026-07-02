# Abalo – Full-Stack Marketplace Prototype
 
Abalo is a full-stack marketplace web application built as a team coursework project for the **Web Technologies (DBWT2)** course at **FH Aachen University of Applied Sciences**. The project was developed incrementally across five milestones, progressively adding backend structure, dynamic frontend behavior, and real-time features.
 
## Tech Stack
 
- **Backend:** Laravel (PHP), PostgreSQL, Eloquent ORM
- **Frontend:** Vue.js (Single File Components), vanilla JavaScript, AJAX
- **Styling:** Sass, BEM methodology
- **Real-time:** WebSockets via Laravel Reverb
- **Tooling:** NPM, Vite, Composer
## Features
 
### Backend & Database
- Relational PostgreSQL schema managed through Laravel migrations, covering users, articles, hierarchical article categories (self-referencing parent/child structure), and shopping carts
- Data seeding from CSV sources using custom Laravel seeders
- Factory-generated bulk data (10,000+ users) for performance testing
- REST API endpoints for articles and shopping cart management:
  - `GET /api/articles?search=` – search articles by name
  - `POST /api/articles` – create a new article (with server-side validation)
  - `DELETE /api/articles/{id}` – delete an article
  - `POST /api/shoppingcart` – add an article to the cart
  - `DELETE /api/shoppingcart/{id}/articles/{articleId}` – remove an article from the cart
### Frontend
- Article listing and search, initially implemented in vanilla JavaScript, then upgraded to AJAX, and finally rebuilt with Vue.js for live, debounced search
- Client-side shopping cart with add/remove functionality, later connected to persistent server-side storage
- Dynamic navigation menu built in JavaScript, later refactored into an encapsulated object
- Article submission form with client- and server-side validation
- Cookie consent banner (GDPR-compliant), implemented without local storage
- Server-side pagination (`LIMIT`/`OFFSET`) for article listings
- Modular Vue architecture using Single File Components (`siteheader`, `sitebody`, `sitefooter`)
- Component styling with Sass and the BEM naming methodology
### Real-Time Features
- WebSocket integration via Laravel Reverb
- Broadcast notifications sent to all connected users (e.g. maintenance announcements)
- Targeted notifications sent to a specific user (e.g. "your article has been sold")
## Project Structure
 
The project follows a standard Laravel application structure, with Vue components under `resources/js` and views under `resources/views`.
 
## Context
 
This project was developed collaboratively as part of a university team assignment. It is a learning prototype rather than a production-ready application, built to practice full-stack web development concepts including relational database design, RESTful API design, progressive frontend enhancement, and real-time communication.
