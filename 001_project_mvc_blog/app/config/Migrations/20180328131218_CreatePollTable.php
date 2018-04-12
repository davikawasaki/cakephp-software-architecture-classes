<?php
use Migrations\AbstractMigration;

class CreatePollTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('poll');
        $table->addColumn('title', 'string', ['null' => false])
            ->addColumn('alt1', 'string', ['null' => false])
            ->addColumn('alt2', 'string', ['null' => false])
            ->addColumn('alt3', 'string', ['null' => false])
            ->addColumn('alt4', 'string', ['null' => false])  
            ->create();

        $refTable = $this->table('poll_answer');
        $refTable->addColumn('poll_id', 'integer')
                ->addColumn('alt1', 'boolean')
                ->addColumn('alt2', 'boolean')
                ->addColumn('alt3', 'boolean')
                ->addColumn('alt4', 'boolean')
                ->addForeignKey('poll_id', 'poll', 'id', ['delete'=> 'NO_ACTION', 'update'=> 'NO_ACTION'])
                ->create();
    }
}
