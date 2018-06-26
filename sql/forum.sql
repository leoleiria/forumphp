CREATE TABLE usuarios (
us_id    INT(8) NOT NULL AUTO_INCREMENT,
us_nome   VARCHAR(30) NOT NULL,
us_pass   VARCHAR(255) NOT NULL,
us_email  VARCHAR(255) NOT NULL,
us_data   DATETIME NOT NULL,
user_level  INT(8) NOT NULL,
UNIQUE INDEX us_nome_unique (us_nome),
PRIMARY KEY (us_id)
);

CREATE TABLE categorias (
cat_id          INT(8) NOT NULL AUTO_INCREMENT,
cat_nome        VARCHAR(255) NOT NULL,
cat_desc     VARCHAR(255) NOT NULL,
UNIQUE INDEX cat_nome_unique (cat_nome),
PRIMARY KEY (cat_id)
);

CREATE TABLE topicos (
topic_id        INT(8) NOT NULL AUTO_INCREMENT,
topic_assunto       VARCHAR(255) NOT NULL,
topic_data      DATETIME NOT NULL,
topic_cat       INT(8) NOT NULL,
topic_aut        INT(8) NOT NULL,
PRIMARY KEY (topic_id)
);

CREATE TABLE posts (
post_id         INT(8) NOT NULL AUTO_INCREMENT,
post_cont        TEXT NOT NULL,
post_data       DATETIME NOT NULL,
post_topic      INT(8) NOT NULL,
post_aut     INT(8) NOT NULL,
PRIMARY KEY (post_id)
);

ALTER TABLE topicos ADD FOREIGN KEY(topic_cat) REFERENCES categorias(cat_id) ON DELETE CASCADE;

ALTER TABLE topicos ADD FOREIGN KEY(topic_aut) REFERENCES usuarios(us_id) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE posts ADD FOREIGN KEY(post_topic) REFERENCES topicos(topic_id) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE posts ADD FOREIGN KEY(post_aut) REFERENCES usuarios(us_id) ON DELETE RESTRICT ON UPDATE CASCADE;
