-- // Create quizes table
-- Migration SQL that makes the change goes here.
CREATE TABLE IF NOT EXISTS t_quizes (
    `id` INT unsigned AUTO_INCREMENT PRIMARY KEY,
    `quiz` VARCHAR(191) NOT NULL,
    `slug` VARCHAR(191) NOT NULL UNIQUE
);
-- @UNDO
-- SQL to undo the change goes here.
DROP TABLE IF EXISTS t_quizes;