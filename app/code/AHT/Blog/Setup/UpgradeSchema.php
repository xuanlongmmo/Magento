<?php
    namespace AHT\Blog\Setup;



    class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
    {

        public function upgrade( \Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context ) {
            $installer = $setup;
    
            $installer->startSetup();
    
            if(version_compare($context->getVersion(), '1.0.2', '<')) {
                // $installer->getConnection()->addColumn(
                //     $installer->getTable( 'aht_blog_post' ),
                //     'test',
                //     [
                //         'type' => \Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
                //         'nullable' => true,
                //         'length' => '12,4',
                //         'comment' => 'test',
                //         'after' => 'status'
                //     ]
                // );
            }
            $installer->endSetup();
        }
    }