# backend-codeigniter

# Promo Tiles CRUD Backend using CodeIgniter

This project implements a CRUD (Create, Read, Update, Delete) backend system for managing promo tiles using CodeIgniter framework. It allows you to perform operations such as adding, editing, listing, and removing promo tiles from a MySQL database.

## Features

- **Add Promo Tiles**: Create new promo tiles with title, description, and image URL.
- **Edit Promo Tiles**: Modify existing promo tiles details and update them in the database.
- **List Promo Tiles**: View a list of all promo tiles currently stored in the database.
- **Delete Promo Tiles**: Remove promo tiles permanently from the database.

## Setup Instructions

**Run Migration**

Once database is configured, execute the following command to run the migration:

```
  php spark migrate 
```

**Seed the Database**

Once migration is done, execute the following command to seed the database with data:

```
  php spark db:seed PromoTilesSeeder 
```
