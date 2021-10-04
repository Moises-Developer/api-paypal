class errorMessages 
{

    errorMessage(error)
    {
        let response = {};
        switch (error)
        {
            case 'error_noParam':
                response = 
                { 
                    "status" : "ko",
                    "warning" : "error_noParam",
                    "message" : "a param required in json was not found"
                }
            break;
            case 'out_lmt' :
                response = 
                {
                    "status" : "ko",
                    "warning" : "out_lmt",
                    "message" : "this params went out of limits please check it again"
                } 
            break;
        }

        return response;

    }


}

module.exports = errorMessages;