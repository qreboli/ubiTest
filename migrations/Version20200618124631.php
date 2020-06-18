<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618124631 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE grade (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, student_id INTEGER NOT NULL, grade DOUBLE PRECISION DEFAULT NULL, subject VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE INDEX IDX_595AAE34CB944F1A ON grade (student_id)');
        $this->addSql('CREATE TABLE student (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthday DATE NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE student');
    }
}
