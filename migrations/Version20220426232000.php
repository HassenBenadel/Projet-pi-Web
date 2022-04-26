<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220426232000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentairerating DROP FOREIGN KEY FK_D73D02A2A1311813');
        $this->addSql('DROP INDEX fk_commentaireid ON commentairerating');
        $this->addSql('CREATE INDEX fk_commentaire_id ON commentairerating (idcommentaire)');
        $this->addSql('ALTER TABLE commentairerating ADD CONSTRAINT FK_D73D02A2A1311813 FOREIGN KEY (idcommentaire) REFERENCES commentaire (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentairerating DROP FOREIGN KEY FK_D73D02A2A1311813');
        $this->addSql('DROP INDEX fk_commentaire_id ON commentairerating');
        $this->addSql('CREATE INDEX fk_commentaireid ON commentairerating (idcommentaire)');
        $this->addSql('ALTER TABLE commentairerating ADD CONSTRAINT FK_D73D02A2A1311813 FOREIGN KEY (idcommentaire) REFERENCES commentaire (id)');
    }
}
