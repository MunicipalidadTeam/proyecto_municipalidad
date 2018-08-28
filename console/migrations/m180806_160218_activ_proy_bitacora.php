<?php
use yii\db\municipalidadniquen;
use yii\db\Migration;

/**
 * Class m180806_160218_activ_proy_bitacora
 */
class m180806_160218_activ_proy_bitacora extends Migration
{

  public function safeUp() // FUNCION PARA CREAR LAS TABLAS
     {
         $tableOptions = null;
         if ($this->db->driverName === 'mysql') {
             // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
             $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
         }

    $this->createTable('{{%Decreto}}',[
                  'id_Decreto'=>$this->primaryKey(),
                  'numeroDecreto'=>$this->integer()->notNull()->unique(),
                  'fechaDeEnvio'=>$this->date()->notNull(),
                  'fechaDecreto'=>$this->date()->notNull(),
                  'proveedor'=>$this->varchar(150)->notNull(),
                  'monto'=>$this->float()->notNull(),
                  'cuenta'=>$this->varchar(100)->notNull(),
                  'fechaRecepcion'=>$this->integer()->notNull(),
                  'estado'=>$this->varchar(100)->notNull()->defaultValue('PENDIENTE'),
                  'id_user'=>$this->integer()
                   ],$tableOptions);

     /*$this->addForeignKey('FK_act_proy','Actividad','idProyecto','Proyecto','idProyecto');
     $this->addForeignKey('FK_user_decreto','Decreto','id_user','user','id');
     $this->addForeignKey('FK_bitt_proy','Bitacoratiempo','idProyecto','Proyecto','idProyecto');*/
     }

     public function safeDown() // FUNCION PARA ELIMINAR LAS TABLAS
         {
             //$this->dropForeignKey('FK_user_decreto','Decreto');
             $this->dropTable('{{%Decreto}}');

         }

/*
   //Use up()/down() to run migration code without a transaction.
  public function up()
  {

  }

  public function down()
  {
      echo "m180806_160218_activ_proy_bitacora cannot be reverted.\n";

      return false;
  }

    public function safeDown()
    {
        echo "m180806_160218_activ_proy_bitacora cannot be reverted.\n";

        return false;
    }
*/

}
