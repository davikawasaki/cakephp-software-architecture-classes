<?php declare(strict_types = 1);

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180421185516 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        // Create 'produto' table
        $table = $schema->createTable('produto');
        $table->addColumn('id', 'integer', ['autoincrement'=>true]);        
        $table->addColumn('nome', 'text', ['notnull'=>true]);
        $table->addColumn('estoque', 'integer', ['notnull'=>true]);
        $table->addColumn('preco', 'decimal', ['notnull'=>true]);
        $table->setPrimaryKey(['id']);
        $table->addOption('engine' , 'InnoDB');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
