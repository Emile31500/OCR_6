<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230213125001 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brouillon_figures (id INT AUTO_INCREMENT NOT NULL, figure_id INT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, article VARCHAR(4096) NOT NULL, est_publie TINYINT(1) DEFAULT 0 NOT NULL, est_supprime TINYINT(1) DEFAULT 0 NOT NULL, UNIQUE INDEX UNIQ_BEAC35DD5C011B5 (figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brouillon_photo_figure (id INT AUTO_INCREMENT NOT NULL, brouillon_figure_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_41F136FEC4B1909 (brouillon_figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brouillon_video_figure (id INT AUTO_INCREMENT NOT NULL, brouillon_figure_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_69F7C48AEC4B1909 (brouillon_figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE figures (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, article VARCHAR(4096) NOT NULL, est_supprime TINYINT(1) DEFAULT 0 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messages (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, figure_id INT DEFAULT NULL, message VARCHAR(1500) NOT NULL, date DATETIME NOT NULL, est_supprime TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_DB021E96FB88E14F (utilisateur_id), INDEX IDX_DB021E965C011B5 (figure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photos_figures (id INT AUTO_INCREMENT NOT NULL, figures_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, est_supprime TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_28408FDA5C7F3A37 (figures_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_utilisateur VARCHAR(64) NOT NULL, nom VARCHAR(64) NOT NULL, prenom VARCHAR(64) NOT NULL, date_de_naissance DATE NOT NULL, est_supprime TINYINT(1) DEFAULT 0 NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_497B315EE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE videos_figures (id INT AUTO_INCREMENT NOT NULL, figures_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, est_supprime TINYINT(1) DEFAULT 0 NOT NULL, INDEX IDX_13FEA2EC5C7F3A37 (figures_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE brouillon_figures ADD CONSTRAINT FK_BEAC35DD5C011B5 FOREIGN KEY (figure_id) REFERENCES figures (id)');
        $this->addSql('ALTER TABLE brouillon_photo_figure ADD CONSTRAINT FK_41F136FEC4B1909 FOREIGN KEY (brouillon_figure_id) REFERENCES brouillon_figures (id)');
        $this->addSql('ALTER TABLE brouillon_video_figure ADD CONSTRAINT FK_69F7C48AEC4B1909 FOREIGN KEY (brouillon_figure_id) REFERENCES brouillon_figures (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E96FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE messages ADD CONSTRAINT FK_DB021E965C011B5 FOREIGN KEY (figure_id) REFERENCES figures (id)');
        $this->addSql('ALTER TABLE photos_figures ADD CONSTRAINT FK_28408FDA5C7F3A37 FOREIGN KEY (figures_id) REFERENCES figures (id)');
        $this->addSql('ALTER TABLE videos_figures ADD CONSTRAINT FK_13FEA2EC5C7F3A37 FOREIGN KEY (figures_id) REFERENCES figures (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE brouillon_figures DROP FOREIGN KEY FK_BEAC35DD5C011B5');
        $this->addSql('ALTER TABLE brouillon_photo_figure DROP FOREIGN KEY FK_41F136FEC4B1909');
        $this->addSql('ALTER TABLE brouillon_video_figure DROP FOREIGN KEY FK_69F7C48AEC4B1909');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E96FB88E14F');
        $this->addSql('ALTER TABLE messages DROP FOREIGN KEY FK_DB021E965C011B5');
        $this->addSql('ALTER TABLE photos_figures DROP FOREIGN KEY FK_28408FDA5C7F3A37');
        $this->addSql('ALTER TABLE videos_figures DROP FOREIGN KEY FK_13FEA2EC5C7F3A37');
        $this->addSql('DROP TABLE brouillon_figures');
        $this->addSql('DROP TABLE brouillon_photo_figure');
        $this->addSql('DROP TABLE brouillon_video_figure');
        $this->addSql('DROP TABLE figures');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE photos_figures');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP TABLE videos_figures');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
