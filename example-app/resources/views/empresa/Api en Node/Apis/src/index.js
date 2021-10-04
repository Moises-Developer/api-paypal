const express = require('express');
const app = express();
const morgan = require('morgan');
const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost/apiBD');

app.set('port', process.env.port || 8100);
app.set('json spaces', 2);

//middleware
app.use(morgan('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

app.use('/api', require('./routes/index'));

//starting the server
app.listen(8100, function () {
    console.log(`server listened in port ${app.get('port')}`);
});