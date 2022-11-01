<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221031230232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupons CHANGE createda_at createda_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE orders ADD createda_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, DROP created_at');
        $this->addSql('ALTER TABLE products ADD createda_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, DROP created_at');
        $this->addSql('ALTER TABLE users ADD createda_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, DROP created_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coupons CHANGE createda_at createda_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE orders ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP createda_at');
        $this->addSql('ALTER TABLE products ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP createda_at');
        $this->addSql('ALTER TABLE users ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP createda_at');
    }
}
