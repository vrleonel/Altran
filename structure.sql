CREATE TABLE `teste_altran`.`Produto`
            ( `id` INT NOT NULL AUTO_INCREMENT ,
              `name` VARCHAR(50) NOT NULL ,
              `description` TEXT NOT NULL ,
              `price` DECIMAL NOT NULL , PRIMARY KEY (`id`))
              ENGINE = InnoDB;

CREATE TABLE `teste_altran`.`product_order`
            ( `id_client` INT NOT NULL ,
              `id_product` INT NOT NULL ) ENGINE = InnoDB;

CREATE TABLE `teste_altran`.`product_order`
              ( `id_client` INT NOT NULL ,
                `id_product` INT NOT NULL ) ENGINE = InnoDB;
