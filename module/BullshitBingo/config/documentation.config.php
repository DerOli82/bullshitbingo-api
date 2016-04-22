<?php
return array(
    'BullshitBingo\\V1\\Rest\\Buzzwords\\Controller' => array(
        'description' => 'Buzzword handling',
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/buzzwords"
       },
       "first": {
           "href": "/buzzwords?page={page}"
       },
       "prev": {
           "href": "/buzzwords?page={page}"
       },
       "next": {
           "href": "/buzzwords?page={page}"
       },
       "last": {
           "href": "/buzzwords?page={page}"
       }
   }
   "_embedded": {
       "buzzwords": [
           {
               "_links": {
                   "self": {
                       "href": "/buzzwords[/:buzzwords_id]"
                   }
               }
              "id": "Buzzword db id",
              "text": "Buzzword text",
              "marked": "if buzzword is marked",
              "modifiedat": "Last modification timestamp"
           }
       ]
   }
}',
                'description' => 'Get all buzzwords.',
            ),
            'POST' => array(
                'description' => 'Create a new buzzword',
                'request' => '{
   "id": "Buzzword db id",
   "text": "Buzzword text",
   "marked": "if buzzword is marked"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/buzzwords[/:buzzwords_id]"
       }
   }
   "id": "Buzzword db id",
   "text": "Buzzword text",
   "marked": "if buzzword is marked",
   "modifiedat": "Last modification timestamp"
}',
            ),
            'DELETE' => array(
                'description' => 'Delete all buzzwords',
                'request' => '{

}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/buzzwords"
       },
       "first": {
           "href": "/buzzwords?page={page}"
       },
       "prev": {
           "href": "/buzzwords?page={page}"
       },
       "next": {
           "href": "/buzzwords?page={page}"
       },
       "last": {
           "href": "/buzzwords?page={page}"
       }
   }
   "_embedded": {
       "buzzwords": [
           {
               "_links": {
                   "self": {
                       "href": "/buzzwords[/:buzzwords_id]"
                   }
               }
              "id": "Buzzword db id",
              "text": "Buzzword text",
              "marked": "if buzzword is marked",
              "modifiedat": "Last modification timestamp"
           }
       ]
   }
}',
            ),
        ),
        'entity' => array(
            'description' => '',
            'GET' => array(
                'description' => 'Get a buzzword entry',
                'response' => '{
   "_links": {
       "self": {
           "href": "/buzzwords[/:buzzwords_id]"
       }
   }
   "id": "Buzzword db id",
   "text": "Buzzword text",
   "marked": "if buzzword is marked",
   "modifiedat": "Last modification timestamp"
}',
            ),
            'PATCH' => array(
                'description' => 'Change a buzzword entry',
                'request' => '{
   "id": "Buzzword db id",
   "text": "Buzzword text",
   "marked": "if buzzword is marked"
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/buzzwords[/:buzzwords_id]"
       }
   }
   "id": "Buzzword db id",
   "text": "Buzzword text",
   "marked": "if buzzword is marked",
   "modifiedat": "Last modification timestamp"
}',
            ),
            'DELETE' => array(
                'description' => 'Delete a buzzword entry',
                'request' => '{
   "id": "Buzzword db id"
}',
                'response' => '{

}',
            ),
        ),
    ),
);
