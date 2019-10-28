<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191027002008 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nome (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usuarios CHANGE tipo tipo TINYINT(1) NOT NULL, CHANGE nome nome VARCHAR(255) NOT NULL, CHANGE r_social r_social VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE nome');
        $this->addSql('ALTER TABLE usuarios CHANGE tipo tipo TINYINT(1) DEFAULT \'0\' NOT NULL, CHANGE nome nome VARCHAR(100) NOT NULL COLLATE utf8_general_ci, CHANGE r_social r_social VARCHAR(100) NOT NULL COLLATE utf8_general_ci, CHANGE email email VARCHAR(100) NOT NULL COLLATE utf8_general_ci');
    }
}
