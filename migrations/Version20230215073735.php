<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230215073735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE figure (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, article VARCHAR(4096) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, figure_id INT DEFAULT NULL, message VARCHAR(1500) NOT NULL, date DATETIME NOT NULL, INDEX IDX_B6BD307FFB88E14F (utilisateur_id), INDEX IDX_B6BD307F5C011B5 (figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photo_figure (id INT AUTO_INCREMENT NOT NULL, figure_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_7AE8C4525C011B5 (figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(64) NOT NULL, nom VARCHAR(64) NOT NULL, prenom VARCHAR(64) NOT NULL, date_de_naissance DATE NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video_figure (id INT AUTO_INCREMENT NOT NULL, figure_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_170013B75C011B5 (figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FFB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F5C011B5 FOREIGN KEY (figure_id) REFERENCES figure (id)');
        $this->addSql('ALTER TABLE photo_figure ADD CONSTRAINT FK_7AE8C4525C011B5 FOREIGN KEY (figure_id) REFERENCES figure (id)');
        $this->addSql('ALTER TABLE video_figure ADD CONSTRAINT FK_170013B75C011B5 FOREIGN KEY (figure_id) REFERENCES figure (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FFB88E14F');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F5C011B5');
        $this->addSql('ALTER TABLE photo_figure DROP FOREIGN KEY FK_7AE8C4525C011B5');
        $this->addSql('ALTER TABLE video_figure DROP FOREIGN KEY FK_170013B75C011B5');
        $this->addSql('DROP TABLE figure');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE photo_figure');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE video_figure');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
