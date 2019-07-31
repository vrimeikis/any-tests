-- // Create quiz results table
-- Migration SQL that makes the change goes here.
CREATE TABLE IF NOT EXISTS t_quiz_results (
    `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `quiz_slug` VARCHAR(191) NULL ,
    `first_name` VARCHAR(20) NOT NULL ,
    `last_name` VARCHAR(30) NOT NULL ,
    `email` VARCHAR(100) not null ,
    `result` TEXT NOT NULL,
    FOREIGN KEY `quiz_results_quiz_slug_foreign` (`quiz_slug`)
          REFERENCES `t_quizes` (`slug`)
          ON UPDATE CASCADE
          ON DELETE SET NULL
);
-- @UNDO
-- SQL to undo the change goes here.
DROP TABLE IF EXISTS t_quiz_results;
