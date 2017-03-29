
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- Author
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Author`;

CREATE TABLE `Author`
(
    `Id` INTEGER(8) NOT NULL,
    `FirstName` VARCHAR(200) NOT NULL,
    `LastName` VARCHAR(200) NOT NULL,
    PRIMARY KEY (`Id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tabellavuota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tabellavuota`;

CREATE TABLE `tabellavuota`
(
    `id_key` INTEGER(64) NOT NULL,
    `name` VARCHAR(200) NOT NULL,
    `surname` VARCHAR(200) NOT NULL,
    `description` VARCHAR(2000) NOT NULL,
    PRIMARY KEY (`id_key`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
