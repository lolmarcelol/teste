{"filter":false,"title":"index.php","tooltip":"/cakephp/index.php","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":21,"column":0},"end":{"row":27,"column":2},"action":"insert","lines":["CREATE TABLE posts (","    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,","    title VARCHAR(50),","    body TEXT,","    created DATETIME DEFAULT NULL,","    modified DATETIME DEFAULT NULL",");"],"id":2}],[{"start":{"row":21,"column":0},"end":{"row":27,"column":2},"action":"remove","lines":["CREATE TABLE posts (","    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,","    title VARCHAR(50),","    body TEXT,","    created DATETIME DEFAULT NULL,","    modified DATETIME DEFAULT NULL",");"],"id":3}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":58},"action":"insert","lines":["INSERT INTO posts (title, body, created)","    VALUES ('The title', 'This is the post body.', NOW());"],"id":4}],[{"start":{"row":21,"column":0},"end":{"row":22,"column":58},"action":"remove","lines":["INSERT INTO posts (title, body, created)","    VALUES ('The title', 'This is the post body.', NOW());"],"id":5}],[{"start":{"row":21,"column":0},"end":{"row":24,"column":74},"action":"insert","lines":["INSERT INTO posts (title, body, created)","    VALUES ('A title once again', 'And the post body follows.', NOW());","INSERT INTO posts (title, body, created)","    VALUES ('Title strikes back', 'This is really exciting! Not.', NOW());"],"id":6}],[{"start":{"row":21,"column":0},"end":{"row":24,"column":74},"action":"remove","lines":["INSERT INTO posts (title, body, created)","    VALUES ('A title once again', 'And the post body follows.', NOW());","INSERT INTO posts (title, body, created)","    VALUES ('Title strikes back', 'This is really exciting! Not.', NOW());"],"id":7}]]},"ace":{"folds":[],"scrolltop":60,"scrollleft":0,"selection":{"start":{"row":11,"column":2},"end":{"row":11,"column":2},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1509368428355,"hash":"133c6a357e8a5349db42e354e33849b7bd8ce3da"}