<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230319045342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE donnes_perso (id INT AUTO_INCREMENT NOT NULL, id_formation INT NOT NULL, adresse VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, descriptif LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, id_profil INT NOT NULL, nom VARCHAR(255) DEFAULT NULL, annee_formation VARCHAR(255) DEFAULT NULL, formation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP formation, DROP promotion, DROP ville, DROP description, DROP date_naissance');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE donnes_perso');
        $this->addSql('DROP TABLE profil');
        $this->addSql('ALTER TABLE `user` ADD nom VARCHAR(255) DEFAULT NULL, ADD prenom VARCHAR(255) DEFAULT NULL, ADD formation VARCHAR(255) DEFAULT NULL, ADD promotion INT DEFAULT NULL, ADD ville VARCHAR(255) DEFAULT NULL, ADD description VARCHAR(255) DEFAULT NULL, ADD date_naissance DATE DEFAULT NULL');
    }
}
