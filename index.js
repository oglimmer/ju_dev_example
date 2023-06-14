const express = require('express');
const mysql = require('mysql');

const app = express();

// MySQL database configuration
const connection = mysql.createConnection({
  host: 'mysql_db',
  user: 'app_user',
  password: 'app_pass',
  database: 'deine_app',
});

// Connect to the MySQL database
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to the database: ' + err.stack);
    return;
  }
  console.log('Connected to the database');
});

// Define a route that executes the SQL query
app.get('/', (req, res) => {
  connection.query('SELECT * FROM test', (err, results) => {
    if (err) {
      console.error('Error executing the query: ' + err.stack);
      return res.status(500).json({ error: 'Database error' });
    }
    res.json(results);
  });
});

// Start the server
app.listen(3000, () => {
  console.log('Server listening on port 3000');
});
