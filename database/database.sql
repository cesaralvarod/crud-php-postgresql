CREATE DATABASE crud_php;

CREATE TABLE tasks(
  id serial PRIMARY KEY,
  title varchar(255),
  description varchar(255),
  created_at timestamp DEFAULT CURRENT_TIMESTAMP
);
