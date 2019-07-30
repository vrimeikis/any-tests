-- // Create quastions table
-- Migration SQL that makes the change goes here.
CREATE TABLE IF NOT EXISTS t_questions (
    `id` INT unsigned AUTO_INCREMENT PRIMARY KEY,
    `quiz_id` INT unsigned NULL,
    `question` TEXT NOT NULL,
    FOREIGN KEY `questions_quiz_id_foreign` (`quiz_id`)
           REFERENCES `t_quizes` (`id`)
           ON UPDATE CASCADE
           ON DELETE SET NULL
);
-- @UNDO
-- SQL to undo the change goes here.
DROP TABLE IF EXISTS t_questions;