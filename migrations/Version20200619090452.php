<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200619090452 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_595AAE34CB944F1A');
        $this->addSql('CREATE TEMPORARY TABLE __temp__grade AS SELECT id, student_id, grade, subject FROM grade');
        $this->addSql('DROP TABLE grade');
        $this->addSql('CREATE TABLE grade (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, student_id INTEGER NOT NULL, grade DOUBLE PRECISION DEFAULT NULL, subject VARCHAR(255) NOT NULL COLLATE BINARY, CONSTRAINT FK_595AAE34CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO grade (id, student_id, grade, subject) SELECT id, student_id, grade, subject FROM __temp__grade');
        $this->addSql('DROP TABLE __temp__grade');
        $this->addSql('CREATE INDEX IDX_595AAE34CB944F1A ON grade (student_id)');
        $this->addSql('DROP INDEX IDX_B723AF336278D5A8');
        $this->addSql('CREATE TEMPORARY TABLE __temp__student AS SELECT id, classroom_id, name, lastname, birthday FROM student');
        $this->addSql('DROP TABLE student');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, classroom_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL COLLATE BINARY, lastname VARCHAR(255) NOT NULL COLLATE BINARY, birthday DATE NOT NULL, CONSTRAINT FK_B723AF336278D5A8 FOREIGN KEY (classroom_id) REFERENCES classroom (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO student (id, classroom_id, name, lastname, birthday) SELECT id, classroom_id, name, lastname, birthday FROM __temp__student');
        $this->addSql('DROP TABLE __temp__student');
        $this->addSql('CREATE INDEX IDX_B723AF336278D5A8 ON student (classroom_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_595AAE34CB944F1A');
        $this->addSql('CREATE TEMPORARY TABLE __temp__grade AS SELECT id, student_id, grade, subject FROM grade');
        $this->addSql('DROP TABLE grade');
        $this->addSql('CREATE TABLE grade (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, student_id INTEGER NOT NULL, grade DOUBLE PRECISION DEFAULT NULL, subject VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO grade (id, student_id, grade, subject) SELECT id, student_id, grade, subject FROM __temp__grade');
        $this->addSql('DROP TABLE __temp__grade');
        $this->addSql('CREATE INDEX IDX_595AAE34CB944F1A ON grade (student_id)');
        $this->addSql('DROP INDEX IDX_B723AF336278D5A8');
        $this->addSql('CREATE TEMPORARY TABLE __temp__student AS SELECT id, classroom_id, name, lastname, birthday FROM student');
        $this->addSql('DROP TABLE student');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, classroom_id INTEGER DEFAULT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthday DATE NOT NULL)');
        $this->addSql('INSERT INTO student (id, classroom_id, name, lastname, birthday) SELECT id, classroom_id, name, lastname, birthday FROM __temp__student');
        $this->addSql('DROP TABLE __temp__student');
        $this->addSql('CREATE INDEX IDX_B723AF336278D5A8 ON student (classroom_id)');
    }
}
