<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329090113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE housing ADD user_id INT NOT NULL, ADD categorie_id INT NOT NULL');
        $this->addSql('ALTER TABLE housing ADD CONSTRAINT FK_FB8142C3A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE housing ADD CONSTRAINT FK_FB8142C3BCF5E72D FOREIGN KEY (categorie_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_FB8142C3A76ED395 ON housing (user_id)');
        $this->addSql('CREATE INDEX IDX_FB8142C3BCF5E72D ON housing (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE housing DROP FOREIGN KEY FK_FB8142C3A76ED395');
        $this->addSql('ALTER TABLE housing DROP FOREIGN KEY FK_FB8142C3BCF5E72D');
        $this->addSql('DROP INDEX IDX_FB8142C3A76ED395 ON housing');
        $this->addSql('DROP INDEX IDX_FB8142C3BCF5E72D ON housing');
        $this->addSql('ALTER TABLE housing DROP user_id, DROP categorie_id');
    }
}
