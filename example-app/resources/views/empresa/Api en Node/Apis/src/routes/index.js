const { Router } = require('express');
const router = Router();
const Error = require('../libraries/errorMessages');
const Response = require('../libraries/funct');
const mongoose = require('mongoose');
const generateError = new Error();
const response = new Response();

mongoose.connect('mongodb://localhost/apiBD');

const Schema = mongoose.Schema;
const userSchema = new Schema({
    "name" : String,
    "username" : String,
    "password" : String
});
const articleSchema = new Schema({
    "article name" : String,
    "SubArticle name" : String,
    "price" : Number
});
const userModel = mongoose.model('users', userSchema);
const articleModel = mongoose.model('articles', articleSchema);


//para recuperar datos de un post se usa req.body

// routes
router.get('/', (req, res) => {
    res.json({
        "status" : "ok",
        "message": "hola mundo"
    });
});

router.post('/conrobot/saludar', (req, res) => {
    res.json({
        "status" : "ok",
        "message" : "Hola, Como estas?"
    });
});

router.post('/conrobot/ayudar', (req, res) => {
    let msg = req.body.message;

    if(msg == null)
    {
        res.json(generateError.errorMessage("error_noParam"));
    }

    switch (msg)
    {
        case 'Necesito informes':
            res.json(response.getInformation());
        break;
        case 'Quiero saber mi usuario':
            let msg2 = req.body.username;
            if(msg2 == null)
            {
                res.json(generateError.errorMessage("error_noParam"));
            }

            let userGbl = {};

            userModel.find({username: msg2}, (err, user) => {
                if(user == null) 
                {
                    userGbl = 
                    {
                        "status" : "ko",
                        "message" : "user not found",
                        "information" : err
                    };
                }
                else
                {
                    userGbl = 
                    {
                        "status" : "ok",
                        "message" : "user found",
                        "information" : user
                    };
                }
                res.json(userGbl);
            });


        break;
        case 'Ocupo ver algunos articulos':

            let msg3 = req.body.articles;
            let articles = {};

            if(msg3 == null)
            {
                articleModel.find({}, (err, article) => {
                    if(article == null)
                    {
                        articles = 
                        {
                            "status" : "ko",
                            "message" : "articles not found",
                            "information" : err
                        };
                    }
                    else
                    {
                        articles = 
                        {
                            "status" : "ok",
                            "message" : "articles found succesfully",
                            "information" : article
                        };
                    }

                    res.json(articles);
                });
            }
            else
            {
                articleModel.find({"article name" : msg3}, (err, article) => {
                    if(article == null)
                    {
                        articles = 
                        {
                            "status" : "ko",
                            "message" : "not well conection",
                            "information" : err
                        };
                    }
                    else
                    {
                        articles = 
                        {
                            "status" : "ok",
                            "message" : "good connection",
                            "information" : article
                        };
                    }

                    res.json(articles);
                });
            }

            

        break;
        default :
            res.json(generateError.errorMessage('out_lmt'));
    }

});

module.exports = router;