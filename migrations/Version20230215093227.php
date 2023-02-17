<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215093227 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE figure ADD status VARCHAR(10) DEFAULT \'published\' NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP status, CHANGE code_recup code_recup VARCHAR(64) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE figure DROP status');
        $this->addSql('ALTER TABLE utilisateur ADD status VARCHAR(10) DEFAULT \'published\' NOT NULL, CHANGE code_recup code_recup VARCHAR(10) DEFAULT NULL');
    }
}
