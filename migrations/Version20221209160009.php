<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221209160009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_A369E2B53DF39296 ON recipes');
        $this->addSql('ALTER TABLE recipes ADD user_id LONGTEXT NOT NULL, DROP userId, CHANGE recipe_name recipe_name LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recipes ADD userId INT DEFAULT NULL, DROP user_id, CHANGE recipe_name recipe_name INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_A369E2B53DF39296 ON recipes (recipe_name)');
    }
}
